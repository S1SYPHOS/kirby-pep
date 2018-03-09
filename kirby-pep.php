<?php

/**
 * Kirby PEP -  Supercharging Parsedown with ParsedownExtraPlugin for Kirby
 *
 * @package   Kirby CMS
 * @author    S1SYPHOS <hello@twobrain.io>
 * @link      http://twobrain.io
 * @version   0.3.0
 * @license   MIT
 */

if (c::get('plugin.kirby-pep', false)) {
    // Loading ParsedownExtraPlugin
    require_once __DIR__ . DS . 'vendor' . DS . 'ParsedownExtraPlugin.php';

    // Loading settings & core
    load([
      'kirby\\plugins\\pep\\settings'     => __DIR__ . DS . 'core' . DS . 'settings.php',
      'kirby\\plugins\\pep\\markdown'     => __DIR__ . DS . 'core' . DS . 'markdown.php'
    ]);

    // Registering with Kirby's extension registry
    kirby()->set('component', 'markdown', 'Kirby\\Plugins\\PEP\\Markdown');
}
