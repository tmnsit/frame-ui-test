<?php

namespace UiFrame\Elements;

class Block implements ElementInterface
{
    private string $innerHtml = '';

    public function getHtml($element) :string
    {
        return '<div>'. $this->innerHtml .'</div>';
    }


    public function setInnerHtml(string $html)
    {
        $this->innerHtml = $html;
    }
}