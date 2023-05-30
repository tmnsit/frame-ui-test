<?php

namespace UiFrame\Elements;

class Button implements ElementInterface
{
    private string $innerHtml = '';

    public function getHtml($element): string
    {
        return '<a href="'.$element['payload']['link']['payload'].'" >'.$element['payload']['text'].'</a>';
    }

    public function setInnerHtml(string $html)
    {
        $this->innerHtml = $html;
    }
}