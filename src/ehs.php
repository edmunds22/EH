<?php

namespace edmunds22\ehs;

/**
 * Class ehs
 * @package edmunds22\ehs
 */
class ehs
{

    /**
     * hello world!
     *
     * @return string
     */
    public static function helloWorld()
    {
        return 'hello world!';
    }

    public static function forceDownload($path)
    {
        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . basename($path) . "\"");
        readfile($path);
        exit();
    }


    /**
     * Return a string with non alpha-num-space characters removed
     *
     * @param $input
     * @return string
     */
    public static function alphaNumSp($input='')
    {
        return preg_replace("/[^A-Za-z0-9 ]/", "", $input);
    }

    /**
     * Validate a string is in Y-m-d format
     *
     * @param $date
     * @return bool
     */
    public static function validateYMD($date)
    {
        $date = \DateTime::createFromFormat('Y-m-d', $date);
        if (!$date) {
            return false;
        }
        return true;
    }

    /**
     * Validate a string is in d/m/Y format
     *
     * @param $date
     * @return bool
     */
    public static function validateDMY($date)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $date);
        if (!$date) {
            return false;
        }
        return true;
    }

    /**
     * Convert the format of a date string
     *
     * @param $in
     * @param $out
     * @param string $string
     * @return string
     */
    public static function convertDateString($in, $out, $string)
    {
        return \DateTime::createFromFormat($in, $string)->format($out);
    }

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
        return \DateTime::createFromFormat($format, $date)->modify('+' . $numberOfDays . ' day')->format($format);
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
            $index = $index + 1;
        }

        return $index;
    }

}