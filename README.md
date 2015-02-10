
CONTENTS OF THIS FILE
---------------------
 * Introduction
 * Requirements
 * Installation
 * Features
 * Configuration




INTRODUCTION
------------
HTML5 is clean, simple and light theme that brings semantic HTML5 markup to the Drupal site.


REQUIREMENTS
------------
This theme requires Drupal 7.x


INSTALLATION
------------
By default, the HTML5 theme is hidden and intended to be used as base theme for other custom themes.
To eneable HTML5 theme, define it in your theme's .info file as a base theme(e.g., 'base theme = html5').


FEATURES
------------
- HTML5 markup
- Normalize CSS
- HTML5 Shiv
- Sass templates


CONFIGURATION
------------
Sass-templates folder contains .scss files for quick addition of the typography styles.
In order to add the typography styles, import .scss files into main stylesheet.
Make sure the order of files is next: variables, mixins, typography.
The variables have to be defined properly.
To use font-face mixin, 'fonts' folder should be put in theme directory. Font name should be the same
for all font formats. The path to the fonts folder can be easily changed in mixins stylesheet.