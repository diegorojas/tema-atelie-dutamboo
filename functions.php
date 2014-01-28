<?php

function exclude_category($query) {

if ( $query->is_home() ) {
$query->set('cat', '-34 -35');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');

// Insere os metaboxes (MetaBrasa) nos Posts
require_once (get_stylesheet_directory() . '/metaboxes-valores.php');


?>