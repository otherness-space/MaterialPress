
Theme Check is maintained by [Otto42](https://profiles.wordpress.org/otto42/) and [Pross](https://profiles.wordpress.org/pross/)

MaterialPress using Guidelines Version: 20151211 Plugin revision: 1

- [ ] REQUIRED:
	- [ ] ```.sticky``` css class is needed in your theme css.

	- [ ] ```.screen-reader-text``` css class is needed in your theme css. See See: [the Codex](http://codex.wordpress.org/CSS#WordPress_Generated_Classes) for an example implementation.

	- [ ] ```.gallery-caption``` css class is needed in your theme css.

	- [ ] ```.bypostauthor``` css class is needed in your theme css.

	- [ ] The theme doesn't have post pagination code in it. Use ```posts_nav_link()``` or ```paginate_links()``` or ```the_posts_pagination()``` or ```the_posts_navigation()``` or ```next_posts_link()``` and ```previous_posts_link()``` to add post pagination.

	- [ ] The theme doesn't have comment pagination code in it. Use ```paginate_comments_links()``` or ```the_comments_navigation``` or ```next_comments_link()``` and ```previous_comments_link()``` to add comment pagination.

	- [ ] The ```<title>``` tags can only contain a call to ```wp_title()```. Use the ```wp_title``` filter to modify the output.

	- [ ] Found a Customizer setting that did not have a sanitization callback function. Every call to the ```add_setting()``` method needs to have a sanitization callback function passed.

	- [ ] Could not find the comment-reply script enqueued. See:
	[Migrating Plugins and Themes to 2.7/Enhanced Comment Display](https://codex.wordpress.org/Migrating_Plugins_and_Themes_to_2.7/Enhanced_Comment_Display)

	```php
  	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  ```

	- [ ] Could not find ```wp_link_pages```. See: [wp_link_pages](https://codex.wordpress.org/Function_Reference/wp_link_pages)

	```php
  <?php wp_link_pages( $args ); ?>
  ```

	- [ ] Could not find ```comments_template```. See: [comments_template](https://codex.wordpress.org/Template_Tags/comments_template)

	```php
  <?php comments_template( $file, $separate_comments ); ?>
  ```

	- [ ] Could not find ```add_theme_support( 'automatic-feed-links' )```. See: [add_theme_support](https://codex.wordpress.org/Function_Reference/add_theme_support)

	```php
  <?php add_theme_support( $feature ); ?>
  ```

	- [ ] ```add_theme_support(``` post-formats was found in the file functions.php. However ```get_post_format``` and/or ```has_post_format``` were not found, and no use of formats in the CSS was detected.

- [ ] RECOMMENDED:
	- [ ] Screenshot size should be 1200x900, to account for HiDPI displays. Any 4:3 image size is acceptable, but 1200x900 is preferred.
	- [ ] Screenshot dimensions are wrong! Ratio of width to height should be 4:3.
	- [ ] No reference to ```the_post_thumbnail()``` was found in the theme. It is recommended that the theme implement this functionality instead of using custom fields for thumbnails.
	- [ ] No reference to ```add_theme_support( "title-tag" )``` was found in the theme. It is recommended that the theme implement this functionality for WordPress 4.1 and above.
	- [ ] No reference to ```add_theme_support( "custom-header", $args )``` was found in the theme. It is recommended that the theme implement this functionality if using an image for the header.
	- [ ] No reference to ```add_editor_style()``` was found in the theme. It is recommended that the theme implement editor styling, so as to make the editor content match the resulting post output in the theme, for a better user experience.
	- [ ] Could not find the file readme.txt in the theme. Please see [Theme_Documentation](https://codex.wordpress.org/Theme_Review#Theme_Documentation) for more information.
	- [ ] ```Tags:``` is either empty or missing in style.css header.

- [ ] INFO:
	- [ ] Possible hard-coded links were found in the file page-components.php.

		Line 529: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 543: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 561: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 575: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 530: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 544: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 562: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 576: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 531: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 545: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 563: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 577: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 529: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 543: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 561: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 575: ```<li><a href'=sass.html'>```Sass```</a></li>```

		Line 530: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 544: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 562: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 576: ```<li><a href'=components.html'>```Components```</a></li>```

		Line 531: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 545: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 563: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

		Line 577: ```<li><a href'=javascript.html'>```JavaScript```</a></li>```

	- [ ] INFO: Only one text-domain is being used in this theme. Make sure it matches the theme's slug correctly so that the theme will be compatible with WordPress.org language packs. The domain found is materialpress

	- [ ] INFO: Non-printable characters were found in the page-components.php file. You may want to check this file for errors.

		Line 614: ```<p class'=caption'>```Cards are a convenient means of displaying content composed of different types of objects. They���re also well-suited for presenting similar objects whose size or support

	- [ ] INFO: Non-printable characters were found in the footer.php file. You may want to check this file for errors.

		Line 23: ```<span class'=white-text'>�� <?php echo date('Y'); ?>``` Copyright ```<?php echo get_bloginfo( name ); ?></```
