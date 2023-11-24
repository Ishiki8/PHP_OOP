<?php

namespace App\Task54;

class HTMLPairElement extends HTMLElement {
    public function __toString(): string {
        $attrLine = $this->stringifyAttributes();
        $body = $this->getTextContent();
        $tagName = $this->getTagName();

        return "<{$tagName}{$attrLine}>{$body}</{$tagName}>";
    }

    public function getTextContent(): ?string {
        return $this->body ?? null;
    }

    public function setTextContent(string $body): void {
        $this->body = $body;
    }
}
