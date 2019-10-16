<?php

namespace edmunds22\ehs;

/**
 * Class ehs
 * @package edmunds22\ehs
 */
class ehs
{

    /**
     * Add X amount of days to a date string, returning a string
     *
     * @param $date
     * @param $numberOfDays
     * @param string $format
     * @return string
     */
    public static function addDaysToDateString($date, $numberOfDays, $format = 'd/m/Y')
    {
        return \DateTime::createFromFormat($format, $date)->modify('+'.$numberOfDays.' day')->format($format);
    }

    /**
     * Get the week day index of a day name
     *
     * @param string $day
     * @param int $start - set to 1 to start with Monday = 1, rather than 0
     * @return int
     */
    public static function weekDayIndex($day = 'Mon', $start = 0)
    {
        $index = 0;

        switch ($day) {
            case "Tue":
                $index = 1;
                break;
            case "Wed":
                $index = 2;
                break;
            case "Thu":
                $index = 3;
                break;
            case "Fri":
                $index = 4;
                break;
            case "Sat":
                $index = 5;
                break;
            case "Sun":
                $index = 6;
                break;
        }

        if ($start === 1) {
            $index = $index +1;
        }

        return $index;
    }

}