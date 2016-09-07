Salient WordPress Theme
===

This is a WordPress Theme based from the `_s starter theme`([http://underscores.me](http://underscores.me)).
 
Pattern Lab has been worked in to the theme to provide a useful style guide and establish a modular system to be the codebase for all Salient websites.

To use Pattern Lab:
----
1. `cd` into the `patternlab` directory in your terminal
2. Run `php core/builder.php -g` to generate the `public` folder.
3. You'll need to be running on php to fully use Pattern Lab
4. Open `public/index.html` in your browser
5. Watch and run livereload in Pattern Lab with `php core/builder.php -w -r`

More info on using patterns can be found in [their documentation](http://patternlab.io/docs/index.html)


Compiling Sass & More
---
###Commands:

Run these commands from the root of your theme folder.

`gulp`: default — compiles Sass with sourcemaps, autoprefixer and cssnano, concatenates scripts

`gulp watch`: watches for changes in Sass files or javaScript files and recompiles

`gulp watch-sync`: Same as `gulp watch`, but also launches browsersync.

**Notes:**  
- If you save with an error in your Sass, you'll have to rereun `gulp`
- If you make a new Sass file, `gulp watch` won't recognize that change without rerunning the command.

