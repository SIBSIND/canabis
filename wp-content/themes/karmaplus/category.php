<?php
get_header();
?>
<section class="index">
   <ul id="cities">
      <?php
        $categories = get_categories('exclude=18');
        foreach ($categories as $category) {
         $option = '<li><a href="/index.php/category/'.$category->category_nicename.'/">';
         $option .= $category->cat_name;
         $option .= ' ('.$category->category_count.')';
         $option .= '</a></li>';
         echo $option;
        }
       ?>
   </ul>
   <ul id="districts">
      <li class="selected" ><a href="/index.php/home/city/1">Все</a></li>
   </ul>
   <div class="products">
         <ul>
     <?php $category = single_term_title("", false); 
     	   $catid = get_cat_ID( $category ); 
     	   $posts = get_posts ("category=".$catid."&orderby=date"); ?> 
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
 	<li>
        <div class="wraper">
            <div class="name"><?php the_title(); ?></div>
            <div class="price"><?php get_field('price', $post->ID); ?> руб.</div>
            <div class="size">В наличии: <span class="bold"> <?php get_field('count', $post->ID); ?> шт </span></div>
            <div class="buy"><a class="button" href="<?php the_permalink() ?>">Купить</a></div>
        </div>
    </li>

  <div class="block">
     <div class="name"> 
          <a href="<?php the_permalink() ?>" rel="bookmark"></a> 
     </div>
  </div>
 
<?php 
  endforeach;
  wp_reset_postdata();
?>
<?php endif; ?>
</ul>
   </div>
   
   <!-- / Продукты -->
</section>
<?php get_footer(); ?>