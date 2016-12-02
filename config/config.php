<?php
/**
 * Pico configuration
 *
 * This is the configuration file for {@link Pico}. It comes loaded with the
 * default values, which can be found in {@link Pico::getConfig()} (see
 * {@path "lib/Pico.php"}).
 *
 * To override any of the default settings below, copy this file to
 * {@path "config/config.php"}, uncomment the line, then make and
 * save your changes.
 *
 * @author  Gilbert Pellegrom
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */

/*
 * BASIC
 */
$config['site_title'] = 'Brian Dudley';              // Site title
// $config['base_url'] = '';                    // Override base URL (e.g. http://example.com)
// $config['rewrite_url'] = null;               // A boolean indicating forced URL rewriting

/*
 * THEME
 */
 $config['theme'] = 'bd2-template';                // Set the theme (defaults to "default")
 $config['twig_config'] = array(              // Twig settings
     'cache' => false,                        // To enable Twig caching change this to a path to a writable directory
     'autoescape' => false,                   // Auto-escape Twig vars
     'debug' => false                         // Enable Twig debug
 );

/*
 * CONTENT
 */
 //$config['date_format'] = '%D %T';            // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
 $config['pages_order_by'] = 'alpha';         // Order pages by "alpha" or "date"
 $config['pages_order'] = 'asc';              // Order pages "asc" or "desc"
 $config['content_dir'] = 'content/';  // Content directory
 $config['content_ext'] = '.md';              // File extension of content files to serve

/*
 * TIMEZONE
 */
 $config['timezone'] = 'UTC';                 // Timezone may be required by your php install

/*
 * PLUGINS
 */
// $config['DummyPlugin.enabled'] = false;      // Force DummyPlugin to be disabled
	$config['Pagination.enabled'] = true;		// pagination plugin

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';         // Can be accessed by {{ config.custom_setting }} in a theme


/*
 *	PAGINATION PLUGIN CONFIG SETTINGS
 */
$config['pagination_limit'] = 5;				// Sets the how many items display on each page.

$config['pagination_next_text'] = 'next page >';		// Sets the text for the next link.

$config['pagination_prev_text'] = '< previous page';	//Sets the text for the previous links.

$config['pagination_flip_links'] = false;	// true or false 	// Reverses the order the links are ouput. This is to aid in providing links in the format of older/newer as opposed to previous/next.

$config['pagination_filter_date'] = true;	// true or false 	//Sets whether the posts returned should be filtered to only those with dates or not.	

$config['pagination_page_indicator'] = 'blog';	// Sets the word used in the URL that will indicate paged results. (i.e. http://yousite.com/page/2)
	
$config['pagination_output_format'] = 'link';	// options: links or list //Sets whether {{ pagination_links }} will output two <a> tags or an unordered list.

$config['pagination_sub_page'] = true;		// Options: true, false 	//Sets whether there is a sub page for the pagination (i.e. not the root of the site). When this is set to true, you must create a subfolder in content with the same name as the "pagination_page_indicator" variable. See below for further information.








