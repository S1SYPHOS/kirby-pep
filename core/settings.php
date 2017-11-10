<?php

namespace S1SYPHOS\PEP;

use c;

class Settings {

  /**
   * Returns the default options for `kirby-pep`
   *
   * @return array
   */

  public static function __callStatic($name, $args) {

    // Set prefix
    $prefix = 'plugin.kirby-pep.';

    // Set config names and fallbacks as settings
    $settings = [
      'code_class'                  => 'language-%s',
      'code_text'                   => null,
      'code_block_text'             => null,
      'code_block_attr_on_parent'   => false,
      'table_class'                 => null,
      'table_align_class'           => null
    ];

    // If config settings exist, return the config with fallback
    if(isset($settings) && array_key_exists($name, $settings)) {
      return c::get($prefix . $name, $settings[$name]);
    }
  }
}
