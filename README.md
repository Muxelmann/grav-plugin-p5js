# P5js Plugin

The **P5js** Plugin is an extension for [Grav CMS](https://github.com/getgrav/grav). p5js functionality. It allows embedding p5js canvases.

## Installation

Installing the P5js plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](https://learn.getgrav.org/cli-console/grav-cli-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install p5js

This will install the P5js plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/p5js`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `p5js`. You can find these files on [GitHub](https://github.com/muxelmann/grav-plugin-p5js) or via [GetGrav.org](https://getgrav.org/downloads/plugins).

You should now have all the plugin files under

    /your/site/grav/user/plugins/p5js
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/muxelmann/grav-plugin-p5js/blob/main/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/p5js/p5js.yaml` to `user/config/plugins/p5js.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
active: true
```

Note that if you use the Admin Plugin, a file with your configuration named p5js.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

This Plugin extends [shortcode-core](https://github.com/getgrav/grav-plugin-shortcode-core) and adds a Shortcode `[p5js]` to be used. E.g.:

```
[p5js canvas=c1]
function setup() {
  createCanvas(400, 400, document.getElementById('c1'));
}

function draw() {
  background(220);
}
```

Creates a canvas of a ID `c1` and applies the p5js-code thereto. Multiple p5js-canvases can be added by setting different IDs.

## To Do

- [ ] Avoid having to set a `canvas-ID` (e.g. use random ID?)

