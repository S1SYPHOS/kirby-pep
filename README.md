# Kirby P(arsedown)E(xtra)P(lugin)
[![Release](https://img.shields.io/github/release/S1SYPHOS/kirby-pep.svg)](https://github.com/S1SYPHOS/kirby-pep/releases) [![License](https://img.shields.io/github/license/S1SYPHOS/kirby-pep.svg)](https://github.com/S1SYPHOS/kirby-pep/blob/master/LICENSE) [![Issues](https://img.shields.io/github/issues/S1SYPHOS/kirby-pep.svg)](https://github.com/S1SYPHOS/kirby-pep/issues)

This plugin modifies Kirby's `markdown` component and enhances the built-in markdown parser [ParsedownExtra](https://github.com/erusev/parsedown-extra) by adding some [PEP](https://github.com/tovic/parsedown-extra-plugin).

**Table of contents**
- [1. Getting started](#getting-started)
- [2. Configuration](#configuration)
- [3. Credits / License](#credits--license)

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

| Option | Type | Default | Description |
| --- | --- | --- | --- |
| `plugin.kirby-pep.code_class` | String | `language-%s` | Defines the classes used by `<code>` elements (`%s` outputs the language specified at the beginning of your code block). |
| `plugin.kirby-pep.code_block_attr_on_parent` | Boolean | `false` | Moves (inner) `<code>` element attributes on (outer) `<pre>` element. |

**Currently only these two options are available.** In the future, more options will be supported - feel free to [open a PR](https://github.com/S1SYPHOS/kirby-pep/compare)!

## Credits / License
`kirby-pep` is based on Taufik Nurrohman's `parsedown-extra-plugin` library (an extension to [ParsedownExtra](https://github.com/erusev/parsedown-extra)). It is licensed under the [MIT License](LICENSE), but **using Kirby in production** requires you to [buy a license](https://getkirby.com/buy). Are you ready for the [next step](https://getkirby.com/next)?

## Special Thanks
I'd like to thank everybody that's making great software - you people are awesome. Also I'm always thankful for feedback and bug reports :)
