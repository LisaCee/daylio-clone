<?php

function get_color($mood_level): string
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

