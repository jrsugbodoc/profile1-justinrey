
<?php
// application/helpers/my_helper.php

if (!function_exists('get_time_elapsed_string')) {
    function get_time_elapsed_string($timestamp) {
        $current_time = time();
        $time_difference = $current_time - $timestamp;

        $units = [
            "year"   => 31536000, // Seconds in a year
            "month"  => 2629743,  // Seconds in a month
            "week"   => 604800,   // Seconds in a week
            "day"    => 86400,    // Seconds in a day
            "hour"   => 3600,     // Seconds in an hour
            "minute" => 60,       // Seconds in a minute
            "second" => 1,
        ];

        foreach ($units as $name => $value) {
            if ($time_difference >= $value) {
                $number = floor($time_difference / $value);

                if ($number > 1) {
                    return $number . " " . $name . "s ago";
                } else {
                    return $number . " " . $name . " ago";
                }
            }
        }

        // Handle seconds and minutes
        if ($time_difference >= 45) {
            return "about a minute ago";
        } elseif ($time_difference >= 1) {
            return $time_difference . " seconds ago";
        }

        return "just now";
    }
}
