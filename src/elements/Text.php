<?php

namespace UiFrame\Elements;

class Text implements ElementInterface
{
    private string $innerHtml = '';

    public function getHtml($element): string
    {
        return '<span>' . $element['payload']['text'] .'</span>';
    }

    public function setInnerHtml(string $html)
    {
        $this->innerHtml = $html;
    }
}