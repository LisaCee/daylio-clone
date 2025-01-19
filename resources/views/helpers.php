<?php

function get_color(int $mood_level): string
{
    return match ($mood_level) {
        0 => 'accent-gray',
        1 => 'accent-blue',
        2 => 'accent-purple',
        3 => 'accent-green',
        4 => 'accent-orange',
        default => '',
    };
}

function get_label(int $mood_level): string
{
    return match ($mood_level) {
        0 => 'Bad',
        1 => 'Poor',
        2 => 'Meh',
        3 => 'Good',
        4 => 'Great',
        default => '',
    };
}


