<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    public function episodes() {
	    $args = array(
	    	'post_type' => 'episode',
	    	//'orderby'	=> 'rand',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
	}

}
