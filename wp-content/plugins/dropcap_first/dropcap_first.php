<?php
/*
Plugin Name: DropCap First Character
Plugin URI: http://www.rc.au.net/blog/2006/07/27/dropcap-first-character-wordpress-plugin/
Description: DropCaps the first character of each post and page automatically.
Version: 1.0.1
Author: Rodney Campbell (Remorhaz)
Author URI: http://www.rc.au.net/
*/
/*  Copyright 2006  Rodney Campbell

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function dropcap_header() {
	echo('<link rel="stylesheet" type="text/css" media="screen" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/dropcap_first/dropcap_style.css" />');
}

add_action('wp_head', 'dropcap_header');

function dropcap_first($content='') { 
	$pos = strpos($content, '<p>');
/* Since stripos is only available in fairly new PHP versions we'll  */
/* live with using the case sensitive version so it won't match <P> */
/* 	$pos = stripos($content, '<p>'); */
	if (($pos !== 0) || ($pos === false)) {
		return '<p class="dropcap-first">' . $content; 
	} else {
		return '<p class="dropcap-first"' . stristr($content, '>'); 
	}
}

add_filter('the_content', 'dropcap_first', 7);

?>
