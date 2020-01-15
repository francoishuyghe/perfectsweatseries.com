<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageNews extends Controller
{

    public function news() {
	    $args = array(
	    	'post_type' => 'post',
	    	//'orderby'	=> 'rand',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
	}

}
