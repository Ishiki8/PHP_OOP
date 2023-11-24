<?php

namespace App\Tests;

use App\Task60\Application;
use PHPUnit\Framework\TestCase;
use App\Task60\Sanitizer;
use App\Task60\SanitizerStripTagsDecorator;

class ApplicationTest extends TestCase
{
    public function test()
    {
        $sanitizer = new Sanitizer();
        $decorated = new SanitizerStripTagsDecorator($sanitizer);
        $app = new Application($decorated);
        $result = $app->run('<p>text<p>');
        $this->assertEquals('text', $result);

        $result = $app->run('  <hr>   another text ');
        $this->assertEquals('another text', $result);
    }
}
