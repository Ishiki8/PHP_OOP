<?php

namespace Task27\Tests;

use PHPUnit\Framework\TestCase;

use Task27\Course;

class CourseTest extends TestCase
{
    public function testCourse()
    {
        $course = new Course("Физкультура");
        $this->assertEquals( "Физкультура", $course->getName());

        $course2 = new Course("Математика");
        $this->assertEquals( "Математика", $course2->getName());
    }
}