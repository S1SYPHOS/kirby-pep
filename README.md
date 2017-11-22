# Kirby P(arsedown)E(xtra)P(lugin)
[![Release](https://img.shields.io/github/release/S1SYPHOS/kirby-pep.svg)](https://github.com/S1SYPHOS/kirby-pep/releases) [![License](https://img.shields.io/github/license/S1SYPHOS/kirby-pep.svg)](https://github.com/S1SYPHOS/kirby-pep/blob/master/LICENSE) [![Issues](https://img.shields.io/github/issues/S1SYPHOS/kirby-pep.svg)](https://github.com/S1SYPHOS/kirby-pep/issues)

This plugin modifies Kirby's `markdown` component and enhances the built-in markdown parser [ParsedownExtra](https://github.com/erusev/parsedown-extra) by adding some [PEP](https://github.com/tovic/parsedown-extra-plugin).

**Table of contents**
- [1. What's MarkdownExtra?](#whats-markdownextra)
- [2. Getting started](#getting-started)
- [3. Configuration](#configuration)
- [4. Credits / License](#credits--license)

## What's MarkdownExtra?
> Markdown Extra is an extension to PHP Markdown implementing some features currently not available with the plain Markdown syntax [such as]
> - Inline HTML
> - Markdown Inside HTML Blocks
> - Special Attributes
> - Fenced Code Blocks
> - Tables
> - Definition Lists
> - Footnotes
> - Output
> - Abbreviations
> - Ordered Lists
> - Emphasis
> - Backslash Escapes
>
> By [Michel Fortin](https://michelf.ca/projects/php-markdown/extra/)

While these are already nice to have, [PEP](https://github.com/tovic/parsedown-extra-plugin) takes global configurability just a bit further - because Markdown!

## Getting started
Use one of the following methods to install & use `kirby-pep`:

### Git submodule

If you know your way around Git, you can download this plugin as a [submodule](https://github.com/blog/2104-working-with-submodules):

```text
git submodule add https://github.com/S1SYPHOS/kirby-pep.git site/plugins/kirby-pep
```

### Clone or download

1. [Clone](https://github.com/S1SYPHOS/kirby-pep.git) or [download](https://github.com/S1SYPHOS/kirby-pep/archive/master.zip) this repository.
2. Unzip / Move the folder to `site/plugins`.

### Activate the plugin
Activate the plugin with the following line in your `config.php`:

```text
c::set('plugin.kirby-pep', true);
```

In order to enable features of [ParsedownExtraPlugin](https://github.com/tovic/parsedown-extra-plugin), read on about configuring it. If you want to activate `kirby-pep` only on specific domains, read about [multi-environment setups](https://getkirby.com/docs/developer-guide/configuration/options).

## Configuration
Change `kirby-pep` [options](https://github.com/tovic/parsedown-extra-plugin#features) to suit your needs:

- Element prefix (HTML / XHTML)
  - `'element_suffix' => '>' // HTML5`
- Predefined abbreviations
  - `'abbreviations' => []`
- Predefined links
  - `'links' => null`
- Custom attributes for (external) links / images
  - `'links_attr' => []`
  - `'links_external_attr' => ['rel' => 'nofollow', 'target' => '_blank']`
  - `'images_attr' => null`
  - `'images_external_attr' => null`
- Custom code class / (block) text
  - `'code_class' => 'language-%s'`
  - `'code_text' => null`
  - `'code_block_text' => null`
- Putting `<code>` attributes on `<pre>` element
  - `'code_block_attr_on_parent'   => false`
- Custom table (alignment) class
  - `'table_class' => null`
  - `'table_align_class' => null`
- Custom footnote class
  - `'footnote_class' => 'footnotes'`
- Custom footnote link id / class / text
  - `'footnote_link_id' => 'fnref:%s'`
  - `'footnote_link_class' => 'footnote-ref'`
  - `'footnote_link_text' => '[%s]'`
- Custom footnote back link id / class / text
  - `'footnote_back_link_id' => 'fnref:%s-%s'`
  - `'footnote_back_link_class' => 'footnote-backref'`
  - `'footnote_back_link_text' => '↩'`

If you'd like to change them, just prefix each option with `plugin.kirby-pep.` in your `config.php` and you're set! With the following option in place, this plugin integrates seemlessly with `kirby-highlight`, generating themeable [server-side syntax highlighting](https://github.com/S1SYPHOS/kirby-highlight) for Kirby:

```text
c::set('plugin.kirby-pep.code_class', 'language-%s hljs');
```

These [examples](https://github.com/tovic/parsedown-extra-plugin#features) are a **good starting point**, too.

## Credits / License
`kirby-pep` is based on Taufik Nurrohman's `parsedown-extra-plugin` library (an extension to [ParsedownExtra](https://github.com/erusev/parsedown-extra)). It is licensed under the [MIT License](LICENSE), but **using Kirby in production** requires you to [buy a license](https://getkirby.com/buy). Are you ready for the [next step](https://getkirby.com/next)?

## Special Thanks
I'd like to thank everybody that's making great software - you people are awesome. Also I'm always thankful for feedback and bug reports :)
