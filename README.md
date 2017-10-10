# Google Translate Short Code
Google Translate Short Code is a plugin that adds a shortcode to add a google translate dropdown to your wordpress site.

## Features
* Add Google Translate dropdown to page or widget
* Built-in updater

### Updater
This plugin has a built in updater that updates directly from GitHub releases. The updater script is from the tutsplus tutorial [Distributing Your Plugins in GitHub with Automatic Updates](http://code.tutsplus.com/tutorials/distributing-your-plugins-in-github-with-automatic-updates--wp-34817). The script also uses the php parsedown from the erusev [GitHub](https://github.com/erusev/parsedown) repo.

## Installation
1. Download the latest [tagged archive](https://github.com/JustinByrne/Google-Translate-SC/releases) (choose the "zip" option).
2. Unzip the archive, rename the folder to `google-translate-sc`.
3. Copy the folder to your `/wp-content/plugins/` directory.
4. Go to the Plugins screen and click **Activate**.

## Using the Plugin
The Translate button can be added to either a post, page or a widget area using the `[google-translate]` shortcode. There are three different styles that are available;

* **Simple**: `[google-translate]`
* **Horizontal**: `[google-translate style="horizontal"]`
* **Vertical**: `[google-translate style="vertical"]`

### Prevent Translation
Sections of your WordPress site can be excluded from being translated by adding the `notranslate` class to any html element.

```
<div class="notranslate">
	<p>This paragraph will not be translated.</p>
</div>
```

## License
Google Translate SC is licensed under [GNU General Public License v2 (or later)](https://github.com/JustinByrne/Google-Translate-SC/blob/master/LICENSE).
