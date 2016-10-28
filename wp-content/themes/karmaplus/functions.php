<?php 

/**
* download styles && scripts
**/

/* function load_style_script() {

	vp_enqueue_script('');

} */

/**
* include post image
**/

/**
 * Поиск по категориям
 */

 function search_in_cat_where($where) {
    global $wpdb,$search_in_cat_cats;
    if (is_search() && !empty($search_in_cat_cats)) {
        $cats = join(',',$search_in_cat_cats);
        $where = "AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id IN (" . $cats . ") " . $where;
    }
    return $where;
}

function search_in_cat_join($join) {
    global $wpdb,$search_in_cat_cats;
    if (is_search() && $_GET['c'])
      $join = "INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)";
    return $join;
}

function select_cats($params = '') {
    //Этот код выведет выпадающий список категорий в том месте, где Вы вызвали функцию
   echo '<select name="c" id="searchselect" >';
    foreach (get_categories($params) as $category)
        echo '<option value="'.$category->cat_ID.'">'.$category->name.'</option>';
    echo '</select>';
 /** 
    //Этот код выведет список категорий с чекбоксами в том месте, где Вы вызвали функцию
    foreach (get_categories($params) as $category)
    echo '<input type="checkbox" name="c" class="searchselect" value="'.$category->cat_ID.'" >'.$category->name;*/
}

function search_in_cat_pars() {
    global $search_in_cat_cats;
    preg_match_all('/c=(\d+)/',$_SERVER['QUERY_STRING'],$matches);
    if (!empty($matches)) {
    $search_in_cat_cats = $matches[1];}
}

$search_in_cat_cats = array();
add_filter('posts_where', 'search_in_cat_where');
add_filter('posts_join', 'search_in_cat_join');
add_filter('init', 'search_in_cat_pars');

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

add_filter( 'the_content', 'wpautop');
add_filter( 'the_content', 'shortcode_unautop'  );


add_theme_support('post-thumbnails');
?>
