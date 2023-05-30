<?php

namespace UiFrame\Elements;

class Image implements ElementInterface
{
    private string $innerHtml = '';

    public function getHtml($element): string
    {
        return '<img src="'. $element['payload']['image']['url'] .'" />';
    }

    public function setInnerHtml(string $html)
    {
        $this->innerHtml = $html;
    }
}