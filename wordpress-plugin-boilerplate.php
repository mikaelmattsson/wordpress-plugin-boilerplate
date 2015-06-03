<?php

/*
 * This file is part of Plugin Name.
 *
 * (c) Company <example@example.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @wordpress-plugin
 * Plugin URI: https://github.com/mikaelmattsson/wordpress-plugin-boilerplate
 * Plugin Name: Wordpress Plugin Boilerplate
 * Description: A boilerplate for WordPress plugins that uses composer.
 * Version: 1.2.3
 * Author: Mikael Mattsson
 * Text Domain: wordpress-plugin-boilerplate
 */

require_once './vendor/autoload.php';

CompanyName\PluginName\Hooks::setup();
