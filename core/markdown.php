<?php

namespace Kirby\Plugins\PEP;

use c;
use Parsedown;
use ParsedownExtra;
use ParsedownExtraPlugin;
use Field;

/**
 * Kirby Markdown Parser Component
 *
 * @package   Kirby CMS
 * @author    Bastian Allgeier <bastian@getkirby.com>
 * @link      http://getkirby.com
 * @copyright Bastian Allgeier
 * @license   http://getkirby.com/license
 */

class Markdown extends \Kirby\Component\Markdown
{

    /**
     * Returns the default options for the component
     *
     * @return array
     */

    public function defaults()
    {
        return [
          'markdown' => true,
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

    public function parse($markdown, Field $field = null)
    {

        if (!$this->kirby->options['markdown']) {
            return $markdown;
        } else {
            // Instantiating ParsedownExtraPlugin
            $parsedown = new ParsedownExtraPlugin();

            // set markdown auto-breaks
            $parsedown->setBreaksEnabled($this->kirby->options['markdown.breaks']);

            /**
             * Configuring ParsedownExtraPlugin options
             *
             * See https://github.com/tovic/parsedown-extra-plugin#features
             */

            // HTML or XHTML
            $parsedown->element_suffix = settings::element_suffix();

            // Predefined abbreviations
            $parsedown->abbreviations = settings::abbreviations();

            // Predefined links
            $parsedown->links = settings::links();

            // Custom attributes for (external) links / images
            $parsedown->links_attr = settings::links_attr();
            $parsedown->links_external_attr = settings::links_external_attr();
            $parsedown->images_attr = settings::images_attr();
            $parsedown->images_external_attr = settings::images_external_attr();

            // Custom code class / (block) text
            $parsedown->code_class = settings::code_class();
            $parsedown->code_text = settings::code_text();
            $parsedown->code_block_text = settings::code_block_text();

            // Putting <code> attributes on <pre> element
            $parsedown->code_block_attr_on_parent = settings::code_block_attr_on_parent();

            // Custom table (alignment) class
            $parsedown->table_class = settings::table_class();
            $parsedown->table_align_class = settings::table_align_class();

            // Custom footnote class
            $parsedown->footnote_class = settings::footnote_class();

            // Custom footnote link id / class / text
            $parsedown->footnote_link_id = settings::footnote_link_id();
            $parsedown->footnote_link_class = settings::footnote_link_class();
            $parsedown->footnote_link_text = settings::footnote_link_text();

            // Custom footnote back link id / class / text
            $parsedown->footnote_back_link_id = settings::footnote_back_link_id();
            $parsedown->footnote_back_link_class = settings::footnote_back_link_class();
            $parsedown->footnote_back_link_text = settings::footnote_back_link_text();

            // Parse it!
            return $parsedown->text($markdown);
        }
    }
}
