<?php
get_header();
?>
<section class="index">
   <ul id="cities">
      <?php $category = single_term_title("", false);
      		$catid = get_cat_ID( $category );
        $categories = get_categories('exclude=18');
        foreach ($categories as $category) {
         $option = '<li id="'.$category->cat_ID.'"><a href="/index.php/category/'.$category->category_nicename.'/">';
         $option .= $category->cat_name;
         $option .= ' ('.$category->category_count.')';
         $option .= '</a></li>';
         echo $option;
        }
       ?>
   </ul>
      
   <ul id="districts">
      <li id="18"><a href="/index.php/category/all">Все</a></li>
      <?php 

	$categories = get_categories('parent='.$catid); 

	foreach ($categories as $category) { ?>
		<li><a href="<?php echo get_category_link($category->term_id); ?>" ><?php echo $category->name; ?></a></li>
	<?php } ?>
   </ul>
   <div class="products">
         <ul>
    <?php $posts = get_posts ("category=".$catid."&orderby=date"); ?> 
	<?php if ($posts) : ?>
	<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
 	<li>
        <div class="wraper">
            <div class="name"><?php the_title(); ?></div>
            <div class="price"><?php the_field('price', $post->ID); ?> руб.</div>
            <div class="size">В наличии: <span class="bold"> <?php the_field('count', $post->ID); ?> шт </span></div>
            <div class="buy"><a class="button" href="http://192.168.1.14/index.php/selbuy/">Купить</a></div>
        </div>
    </li>

<!--   <div class="block">
     <div class="name"> 
          <a href="<?php the_permalink() ?>" rel="bookmark"></a> 
     </div>
  </div> -->
 
<?php 
  endforeach;
  wp_reset_postdata();
?>
<?php endif; ?>
</ul>
   </div>
   
   <!-- / Продукты -->
</section>
<script>
	$('li#<?=$catid;?>').addClass('selected');
</script>
<?php get_footer(); ?>