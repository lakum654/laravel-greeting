<?php

namespace SevenTS\DateFormat;

use Carbon\Carbon;

class DateFormat
{
    /**
     * Formats the given date with the specified format and timezone.
     *
     * @param string $date The date to be formatted.
     * @param string $format The desired format for the date.
     * @param string $timezone The desired timezone for the date.
     * @return string The formatted date.
     */
    public static function makeFormat($date, $format = 'M d, Y @ h:i A', $timezone = 'US/Central')
    {
        $date = Carbon::parse(strtotime($date));
        $date->setTimezone($timezone);
        $date = $date->format($format);

        return $date;
    }

    /**
     * Converts the given time to a human-readable format.
     *
     * @param string $time The time to be converted.
     * @return string The converted time in a human-readable format.
     */
    public function convertForHumans($time)
    {
        $createdAt = Carbon::parse($time);
        $now = Carbon::now();
        $diffInSeconds = $now->diffInSeconds($createdAt);

        if ($diffInSeconds < 60) {
            return 'just now';
        } else {
            return $time->diffForHumans();
        }
    }
}
