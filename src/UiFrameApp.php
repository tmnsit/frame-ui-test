<?php

namespace UiFrame;

use UiFrame\Elements\Block;
use UiFrame\Elements\Button;
use UiFrame\Elements\Container;
use UiFrame\Elements\ElementInterface;
use UiFrame\Elements\Image;
use UiFrame\Elements\Text;

class UiFrameApp
{
    protected string $dataPath;

    public function run()
    {
        $elements = $this->build($this->parseJson());
        Help::showArray($elements);
    }

    public function setDataPath($path): self
    {
        $this->dataPath = $path;
        return $this;
    }

    public function parseJson()
    {
        return json_decode(file_get_contents($this->dataPath), true);
    }

    public function build($element)
    {
        if (!key_exists('children', $element) || !count($element['children'])) {
            $item = $this->buildObject($element['type']);
            return $item->getHtml($element);
        } else {
            $html = '';
            foreach ($element['children'] as $child) {
                $html .= $this->build($child);
            }
            $item = $this->buildObject($element['type']);
            $item->setInnerHtml($html);
            return $item->getHtml($child);
        }
    }


    /**
     * @throws \Exception
     */
    private function buildObject($type): ElementInterface
    {
        $classes = [
            'container' => Container::class,
            'block' => Block::class,
            'text' => Text::class,
            'button' => Button::class,
            'image' => Image::class,
        ];
        if (!key_exists($type, $classes)) {
            throw new \Exception('Нет такого типа');
        }
        return new $classes[$type]();
    }

}