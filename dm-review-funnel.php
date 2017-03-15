<?php
/*
Plugin Name: DM Review Funnel
Plugin URI: https://github.com/DesignMissoula/DM-review-funnel
Description: Sends Reviewers To Review Us
Version: 1.1.0
Author: Bradford Knowlton
Author URI: http://bradknowlton.com
Text Domain: dm-review-funnel
Domain Path: /languages
*/

function review_funnel_func( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'up' => '#',
        'down' => '#',
    ), $atts );

    $output = '
<style>

body {
	background: #FFF;
}

img {
	max-width: 95%;
	height: auto;
	display: block;
	margin: 3px auto;
}

table.rating {
	max-width: 432px;
	width: 100%;
	margin: 0px auto;
	text-align: center;
	border-collapse: collapse;
	padding: 0px !important;
}

table.rating td {
	border-collapse: collapse;
	padding: 10px !important;
	border: none;
	margin: 0px !important;
}

table.rating td a {
	display: block;
	width: 100%;
	height: 0px;
	padding-bottom: 100%;
	max-height: 196px;
	max-width: 196px;
	text-decoration: none;
	background-image: url("'.plugins_url( 'img/thumbs-up-down-slices.png', __FILE__ ).'");
	background-repeat: no-repeat;
	background-size: 200% 200%;
}

table.rating td a.thumbs-up {
	background-position: 0px 0px;
}

table.rating td a.thumbs-up:hover {
	background-position: 0px 100%;
}

table.rating td a.thumbs-down {
	background-position: 100% 0px;

}

table.rating td a.thumbs-down:hover {
	background-position: 100% 100%;
}

h4.tagline {
	 font: 18px/24px "Playfair Display",Verdana,Geneva,"DejaVu Sans",sans-serif;
}

</style>

<h4 style="text-align: center;" class="tagline">'.$content.'</h4>
&nbsp;
<p style="text-align: center;">
<table class="rating">
<tr>
<td>
<a href="'.$a['up'].'" target="_BLANK" class="thumbs-up">
&nbsp;
</a>
</td>
<td>
<a href="'.$a['down'].'" target="_BLANK" class="thumbs-down">
&nbsp;
</a>
</td>
</tr>
</table>
</p>';

return $output;
}
add_shortcode( 'review-funnel', 'review_funnel_func' );
