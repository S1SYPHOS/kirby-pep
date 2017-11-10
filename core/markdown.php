<?php

namespace S1SYPHOS\PEP;

use c;
use Parsedown;
use ParsedownExtra;
use ParsedownExtraPlugin;

/**
 * Kirby Markdown Parser Component
 *
 * @package   Kirby CMS
 * @author    Bastian Allgeier <bastian@getkirby.com>
 * @link      http://getkirby.com
 * @copyright Bastian Allgeier
 * @license   http://getkirby.com/license
 */

class Markdown extends \Kirby\Component\Markdown {

  /**
   * Returns the default options for the component
   *
   * @return array
   */

  public function defaults() {
    return [
      'markdown'        => true,
      // 'markdown.extra'  => false,
      'markdown.breaks' => true,
    ];
  }

  /**
   * Initializes the Parsedown parser and
   * transforms the given markdown to HTML
   *
   * @param string $markdown
   * @return string
   */

  public function parse($markdown) {

    if(!$this->kirby->options['markdown']) {
      return $markdown;
    } else {
      // Instantiating ParsedownExtraPlugin
      $parsedown = new ParsedownExtraPlugin();

      // set markdown auto-breaks
      $parsedown->setBreaksEnabled($this->kirby->options['markdown.breaks']);

      /**
       * Configuring ParsedownExtraPlugin options
       *
       * https://github.com/tovic/parsedown-extra-plugin#features
       */

      // Custom Code Class / Text Format
      $parsedown->code_class = settings::code_class();
      $parsedown->code_text = settings::code_text();
      $parsedown->code_block_text = settings::code_block_text();

      // Putting <code> attributes on <pre> element
      $parsedown->code_block_attr_on_parent = settings::code_block_attr_on_parent();

      // Custom Table (Alignment) Class
      $parsedown->table_class = settings::table_class();
      $parsedown->table_align_class = settings::table_align_class();

      // Parse it!
      return $parsedown->text($markdown);
    }

  }

}
