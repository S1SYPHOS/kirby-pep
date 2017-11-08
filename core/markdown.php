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

      // Configuring  options  - see https://github.com/tovic/parsedown-extra-plugin#features
      $parsedown->code_class = c::get('plugin.kirby-pep.code_class') ? c::get('plugin.kirby-pep.code_class') : 'language-%s';
      $parsedown->code_block_attr_on_parent = c::get('plugin.kirby-pep.code_block_attr_on_parent') ? true : false;

      // set markdown auto-breaks
      $parsedown->setBreaksEnabled($this->kirby->options['markdown.breaks']);

      // Parse it!
      return $parsedown->text($markdown);
    }

  }

}
