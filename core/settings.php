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

      // HTML or XHTML
      'element_suffix'              => '>', // HTML5

      // Predefined abbreviations
      'abbreviations'               => null,

      // Predefined links
      'links'                       => null,

      // Custom attributes for (external) links / images
      'links_attr'                  => [],
      'links_external_attr'         => ['rel' => 'nofollow', 'target' => '_blank'],
      'images_attr'                 => null,
      'images_external_attr'        => null,

      // Custom code class / (block) text
      'code_class'                  => 'language-%s',
      'code_text'                   => null,
      'code_block_text'             => null,

      // Putting <code> attributes on <pre> element
      'code_block_attr_on_parent'   => false,

      // Custom table (alignment) class
      'table_class'                 => null,
      'table_align_class'           => null,

      // Custom footnote class
      'footnote_class'              => null,

      // Custom footnote link id / class / text
      'footnote_link_id'            => 'fnref:%s',
      'footnote_link_class'         => 'footnote-ref',
      'footnote_link_text'          => '[%s]',

      // Custom footnote back link id / class / text
      'footnote_back_link_id'       => 'fnref:%s-%s',
      'footnote_back_link_class'    => 'footnote-backref',
      'footnote_back_link_text'     => '↩',
    ];

    // If config settings exist, return the config with fallback
    if(isset($settings) && array_key_exists($name, $settings)) {
      return c::get($prefix . $name, $settings[$name]);
    }
  }
}
