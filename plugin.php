<?php

/**
 * Plugin Name: #btgn.media Breakdance Custom Elements
 * Plugin URI: https://btgn.media/
 * Description: Custom Elements for Breakdance BageBuilder
 * Author: Breakdance
 * Author URI: https://btgn.media/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace BreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function() {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'BreakdanceCustomElements',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'BreakdanceCustomElements',
        'macro',
        'Custom Macros',
        false,
    );

//    \Breakdance\ElementStudio\registerSaveLocation(
//        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
//        'BreakdanceCustomElements',
//        'preset',
//        'Custom Presets',
//        false,
//    );
});
