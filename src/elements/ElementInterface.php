<?php

namespace UiFrame\Elements;

interface ElementInterface
{
    public function getHtml(array $element) : string;
    public function setInnerHtml(string $html);
}