<?php

namespace task38\HTML;

use Tightenco\Collect;

function stringify(array $tag): ?string {
    switch ($tag['tagType']) {
        case 'single':
            return '<' . makeInnerTagPart($tag) . '>';
        case 'pair':
            return '<' . makeInnerTagPart($tag) . '>' . $tag['body'] . '</' . $tag['name'] . '>';
    }

    return null;
}

function makeInnerTagPart(array $tag): string {
    return trim($tag['name'] . ' ' . collect($tag)
                ->except(['name', 'tagType', 'body'])
                ->implode(fn ($value, $key) => $key . '=' . '"' . $value . '"', ' ')
    );
}