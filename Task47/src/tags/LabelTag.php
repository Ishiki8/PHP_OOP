<?php

namespace App\Task47\tags;

class LabelTag implements TagInterface {
    private string $body;
    private TagInterface $wrapTag;

    public function __construct(string $body, TagInterface $wrapTag) {
        $this->body = $body;
        $this->wrapTag = $wrapTag;
    }

    public function render()
    {
        return "<label>{$this->body}{$this->wrapTag->render()}</label>";
    }

    public function __toString()
    {
        return $this->render();
    }
}
