<?php

/**
 * Kirby PEP - Supercharging Parsedown for Kirby with ParsedownExtraPlugin
 *
 * @package   Kirby CMS
 * @author    S1SYPHOS <hello@twobrain.io>
 * @link      http://twobrain.io
 * @version   0.1.0-beta
 * @license   MIT
 */

if(!c::get('plugin.kirby-pep')) return;

// Loading ParsedownExtraPlugin & core
load([
  'parsedownextraplugin'    => __DIR__ . DS . 'vendor' . DS . 'ParsedownExtraPlugin.php',
  's1syphos\\pep\\markdown' => __DIR__ . DS . 'core' . DS . 'markdown.php'
]);

// Registering with Kirby's extension registry
kirby()->set('component', 'markdown', 'S1SYPHOS\\PEP\\MARKDOWN');

