<?php

/*
 * This file is part of Plugin Name.
 *
 * (c) Company <example@example.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CompanyName\PluginName;

/**
 * Class for hooking into WordPress.
 *
 * @author Company <example@example.com>
 */
class Hooks
{
    /**
     * Setup hooks.
     */
    public static function setup()
    {
        /*
         * Installation
         */

        register_activation_hook(ESI_PLUGINFILE, [__NAMESPACE__.'\Controller\Install', 'actionActivate']);

        /*
         * Admin
         */

        // add_action('admin_menu', [__NAMESPACE__.'\Controller\Admin', 'actionAdminMenu']);
        // add_action('admin_init', [__NAMESPACE__.'\Controller\Admin', 'actionAdminInit']);
        // add_action('wp_ajax_my_action', [__NAMESPACE__.'\Controller\Admin', 'ajaxMyAction']);

        /*
         * Filters & Actions
         */

        // add_action('save_post', [__NAMESPACE__.'\Controller\Post', 'actionSavePost'], 10, 3);
    }
}
