<?php

return array (
    'from_1.0.0_to_1.0.1_one' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
            'actual' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'from_1.0.0_to_1.0.5_one' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
                2 => 'upgrade-1.0.1-1.0.5.php',
            ),
            'actual' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'to_1.0.5_one' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
                2 => 'upgrade-1.0.1-1.0.5.php',
            ),
            'actual' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'from_1.0.0_one' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
            'actual' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'from_1.0.0_to_1.0.1_one_invalid' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
            'actual' =>
            array (
                0 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'from_1.0.0_to_1.0.5_one_invalid' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
                2 => 'upgrade-1.0.1-1.0.5.php',
            ),
            'actual' =>
            array (
                0 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'from_1.0.0_one_invalid' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
            ),
            'actual' =>
            array (
                0 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
    'to_1.0.5_one_invalid' =>
    array (
        'diff' =>
        array (
            'expected' =>
            array (
                0 => 'install-1.0.0.php',
                1 => 'upgrade-1.0.0-1.0.1.php',
                2 => 'upgrade-1.0.1-1.0.5.php',
            ),
            'actual' =>
            array (
                0 => 'upgrade-1.0.0-1.0.1.php',
            ),
        ),
    ),
);