# Asseteer
_A configurable post-install Composer hook, to copy external resources to public HTTP location of your PHP project_

## Why
Your PHP application uses external static resources (js/css/images/fonts) that are publicly available (eg. jQuery, Bootstrap etc.).
You can use Composer to handle the static files as regular dependencies of your project, but you need to place them inside your HTTP root tree, rather than their Composer vendor location.

Asseteer is a dependency for yor project, that you can invoke at "composer install" goal, in order to perform the file-copy operations.

## How
You pilot Asseteer from the `composer.json` file:

- Declare the external files to download, as regular `require` dependencies.
- Optionally define their specifics (URL to download) in the `repositories` section. 
- Then, configure the copy operations in the `extra` section.
- Finally, invoke the `post-install-cmd` hook in `scripts` section.


##### `require` section

First, include `figdice/asseteer` as a dependency of your project, in order to activate the post-install hook.

~~~~javascript

  "require": {
    "figdice/asseteer": "dev-master",
    ...
    "static-assets/jquery": "2.1.3",
    "static-assets/bootstrap-css": "3.3.5",
    "static-assets/bootstrap-js": "3.3.5",
    ...
  }
~~~~

Now, suppose the HTML files in your application use jQuery and Bootstrap: list your static public dependencies, one by one.
`"static-assets"` is used arbitrarily in this example. It is simply the virtual vendor folder name for your asset files, where Composer will download them.



##### `repositories` section

Most of the time, your remote static files (eg. the standard minified jquery) are not available as Packagist/Composer packages. You have to tell Composer to download them explicitly:

~~~~javascript
  "repositories":[
    ...
    {
      "type": "package",
      "package": {
        "name": "static-assets/jquery",
        "version": "2.1.3",
        "dist": {
          "url": "http://code.jquery.com/jquery-2.1.3.min.js",
          "type": "file"
        }
      }
    },
    ...
  ]
~~~~

The above directive will make Composer download the file specified in `url` property, and which will end up in the `vendor/static-assets/jquery` folder of your project.

Repeat the `require` declaration and `repositories` items for each external asset dependency.



##### `extra` section

~~~~javascript
  "extra": {
    "post-install-asseteer": [
      {
        "vendor": "static-assets",
        "target": "app/http/js",
        "filters": [ "\\.js$" ]
      },{
        "vendor": "static-assets",
        "target": "app/http/css",
        "filters": [ "\\.css$" ]
      },
      ...
    ]
  }
~~~~

Specify the `post-install-asseteer` extra section, which is a array of recursive filtered copy directives.
Each item specifies:
- a `vendor` subfolder where Composer downloaded the files, 
- a `target` property which is your public HTTP folder where you want to make the static assets available for browsing, 
- and a `filters` array of reg exp patterns to include in the copy.



##### `scripts` section

This is where you plug Asseteer as a hook in the Composer lifecycle.

~~~~javascript
  "scripts" :{
    "post-install-cmd": [
      "asseteer\\AssetInstaller::postInstall"
    ]
  }
~~~~


## More
Sometimes you need to download several files from the same package (for example, the CSS and various Font files from [Foundation Icon Font 3](http://zurb.com/playground/foundation-icon-fonts-3)).
Currently, Composer does not support to group the files in a single Dist Package.

You can use Asseteer to do the job, with the help of an `extra` property in the package definition in `repositories`:

~~~~javascript
  "repositories": [
    {
      "type": "package",
      "package": {
        "name": "tradonline-assets/foundation-icons",
        "version": "3.0.0",
        "dist": {
          "url": "http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css",
          "type": "file"
        },
        "extra": {
          "asseteer": [
            "http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.woff",
            "http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.ttf"
          ]
        }
      }
    }
  ]
~~~~

Then you need to hook the `post-update-cmd` event in the `scripts` section of `composer.json`:

~~~~javascript
  "scripts" :{
    "post-update-cmd": [
      "asseteer\\AssetInstaller::postUpdate"
    ],
    "post-install-cmd": [
      "asseteer\\AssetInstaller::postInstall"
    ]
  }
~~~~

