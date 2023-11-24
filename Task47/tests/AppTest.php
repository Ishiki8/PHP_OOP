<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Task47\tags\LabelTag;
use App\Task47\tags\InputTag;

class AppTest extends TestCase
{
    public function testLabelTag()
    {
        $inputTag = new InputTag('submit', 'Save');
        $labelTag = new LabelTag('Press Submit', $inputTag);
        $actual = $labelTag->render();
        $expected = '<label>Press Submit<input type="submit" value="Save"></label>';
        $this->assertEquals($expected, $actual);
    }
}
