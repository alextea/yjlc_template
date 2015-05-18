# YJLC Template

This repo contains the source files for a Wordpress theme for www.yjlc.uk

## GOV.UK frontend toolkit, GOV.UK template and GOV.UK elements

The theme makes use of [govuk_frontend_toolkit](https://github.com/alphagov/govuk_frontend_toolkit), [govuk_template](https://github.com/alphagov/govuk_template) and [govuk_elements](https://github.com/alphagov/govuk_elements). These have been adapted to work specifically for yjlc.uk

* govuk_frontend_toolkit contains Sass mixins, conditionals and helpers including typographic styles and grid layout
* govuk_template is used for the basic HTML structure
* govuk_elements contains basic styles for forms and typography

Because of the way these repos are used in this project, there is some redundancy and overlap between some of the projects. This could be solved with further iteration and refactoring.

More information about how each of those work can be found in the READMEs for each respective project.

## Sass and Compass

This theme uses [Sass](http://sass-lang.com/). You will need [Compass](http://compass-style.org/) to compile the Sass into CSS that Wordpress and browsers will understand.

Installation instructions for Sass and Compass are available on their respective sites.

Compass is set up using the `config.rb` file in the root directory.

## File structure

The sass files are kept in the `/sass` directory. The main sass file is `/sass/styles.scss`, this file imports partials and helpers from `yjlc_toolkit`, `elements` and `modules`.

`/sass/print.scss` and `/sass/ie.scss` both import `sass/styles.scss` and set conditional flags to true to output the print and IE specific stylesheets. The [documentation for govuk_frontend_toolkit](https://github.com/alphagov/govuk_frontend_toolkit/blob/master/docs/mixins.md#conditionals) contains more information about the conditional mixins. 

`/sass/yjlc_toolkit` is a fork of govuk_frontend_toolkit. It has been adapted to use the fonts and typography, colours and layout for yjlc.uk.

`/sass/elements` is a fork of govuk_elements. This includes styling for form elements, tables, and some typographic rules.

`/sass/modules` contains the custom partials for yjlc.uk. At some point this could be combined with `elements`.

## Development

During development you can run `compass watch`. This will check the sass for any updates and will export the compiled CSS.

Naming your partials and helper files with an underscore prefix will mean they won’t be output as compiled files. This helps to keep the folder structure clean.

## Compiling

Once your code is ready to export you can compile it by running `compass compile -e production`. This will ensure the correct minimisation style is used and that block comments are retained so Wordpress will recognise the theme.

## Uploading and activating

Once you have compiled the CSS you will need to zip up the `yjlc_template` folder and upload it through Wordpress’s admin dashboard.

If you are upgrading an existing installation of the template you will need to first deactivate the existing theme, then upload the new theme and then activate.

If you have access to the file system you can upload your files in the standard way.
