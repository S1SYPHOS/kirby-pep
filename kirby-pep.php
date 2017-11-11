<?php

/**
 * Kirby PEP -  Supercharging Parsedown with ParsedownExtraPlugin for Kirby
 *
 * @package   Kirby CMS
 * @author    S1SYPHOS <hello@twobrain.io>
 * @link      http://twobrain.io
 * @version   0.2.0-beta
 * @license   MIT
 */

if(!c::get('plugin.kirby-pep')) return;

// Loading ParsedownExtraPlugin
require_once __DIR__ . DS . 'vendor' . DS . 'ParsedownExtraPlugin.php';

// Loading settings & core
load([
  's1syphos\\pep\\settings'     => __DIR__ . DS . 'core' . DS . 'settings.php',
  's1syphos\\pep\\markdown'     => __DIR__ . DS . 'core' . DS . 'markdown.php'
]);

// Registering with Kirby's extension registry
kirby()->set('component', 'markdown', 'S1SYPHOS\\PEP\\MARKDOWN');
