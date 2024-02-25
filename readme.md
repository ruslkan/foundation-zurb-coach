### Introduction

This is the layout of a landing page for an coach. With adaptation to mobile screens.
Demo: https://ruslkan.github.io/foundation-zurb-coach/ && http://katerinaemelyanchik.by

Based on ZURB Foundation for use with [Foundation for Sites](http://foundation.zurb.com/sites). It has a Gulp-powered build system with these features:

- Handlebars HTML templates with Panini
- Sass compilation and prefixing
- JavaScript module bundling with webpack
- Built-in BrowserSync server
- For production builds:
  - CSS compression
  - JavaScript module bundling with webpack
  - Image compression

### Installation

To use this template, your computer needs:

- [NodeJS](https://nodejs.org/en/) (Version 12 or greater recommended, tested with 14.21.3)
- [Git](https://git-scm.com/)

### Using the CLI

Install the Foundation CLI with this command:

```bash
npm install foundation-cli --global
```

Use this command to set up a blank Foundation for Sites project with this template:

```bash
foundation new --framework sites --template zurb
```

The CLI will prompt you to give your project a name. The template will be downloaded into a folder with this name.

Now `cd` to your project name and to start your project run

```bash
foundation watch
```

### Manual Setup

To manually set up the template, first download it with Git:

```bash
git clone https://github.com/ruslkan/foundation-zurb-coach projectname
```

Then open the folder in your command line, and install the needed dependencies:

```bash
cd projectname
yarn
```

Finally, run `yarn start` to run Gulp. Your finished site will be created in a folder called `dist`, viewable at this URL:

```
http://localhost:8000
```

To create compressed, production-ready assets, run `yarn run build`.

### License

Electric is an open source project that is licensed under MIT.
