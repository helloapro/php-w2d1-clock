<?php

    class Clock

    {
        function determineAngle($input_hour, $input_min)
        {
            $inputHour = 7;
            $inputMinute = 11;

            $calculateHour = $inputHour * 30;
            $calculateMinute = $inputMinute * 6;
            $degrees = $calculateHour - $calculateMinute;

            return $degrees;
        }

    }
?>
