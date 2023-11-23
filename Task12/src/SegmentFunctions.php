<?php

namespace Task12;

function reverse(Segment $segment): Segment {
    return new Segment(new Point($segment->endPoint->x, $segment->endPoint->y),
        new Point($segment->beginPoint->x, $segment->beginPoint->y));
}