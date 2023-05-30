<?php

namespace UiFrame\Elements;

class Container implements ElementInterface
{
    private string $innerHtml = '';

    public function getHtml($element) : string
    {
        return '<div class="container">'.$this->innerHtml.'</div>';
    }

    public function setInnerHtml(string $html)
    {
        $this->innerHtml = $html;
    }


}