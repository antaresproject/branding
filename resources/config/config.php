<?php

/**
 * Part of the Antares package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Antares Core
 * @version    0.9.0
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */
return [
    'timezones'    => [
        'Europe/Warsaw' => 'Europe/Warsaw'
    ],
    'time_formats' => [
        'H:i:s'   => 'H:i:s (24h)',
        'h:i:s a' => 'h:i:s a (12h)'
    ],
    'per_page'     => 10,
    'logo'         => [
        'default_white' => 'logo_white_full.png',
        'default_path'  => '/img/logos/',
        'destination'   => public_path('img/logos'),
        'rules'         => [
            "acceptedFiles" => ['jpg', 'png', 'jpeg'],
            "maxFilesize"   => 9.765625,
            "minFilesize"   => 0.0009765625,
            'dimensions'    => [
                'main'    => [
                    'min_width' => 190,
                    'max_width' => 192,
                ],
                'favicon' => [
                    'min_width'  => 60,
                    'min_height' => 60
                ],
            ]
        ],
    ],
    /**
     * default values for brand options
     */
    'default'      => [
        'header' => view('antares/brands::_header_default'),
        'styles' => view('antares/brands::_styles_default'),
        'footer' => view('antares/brands::_footer_default'),
    ],
    'compositions' => [
        'small_sidemenu', 'big_sidemenu', 'top_menu', 'short_top_menu'
    ],
    'stylesets'    => [
        'material', 'simple'
    ],
];

