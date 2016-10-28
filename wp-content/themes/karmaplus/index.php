<?php
/*Template Name: home*/
session_start();
get_header();
?>
<?php $root = get_bloginfo('template_url'); ?>
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
      </ul>
   </div>
   
   <!-- / Продукты -->
</section>
<?php get_footer(); ?>