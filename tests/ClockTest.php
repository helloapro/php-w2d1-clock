<?php
    require_once 'src/Clock.php';

    class ClockTest extends PHPUnit_Framework_TestCase
    {

        function test_calculateAngle()
        {
            $test_Clock = new Clock;
            $inputHour = 7;
            $inputMinute = 11;

            $result = $test_Clock->determineAngle($inputHour, $inputMinute);

            $this->assertEquals(144, $result);
        }
    }
?>
