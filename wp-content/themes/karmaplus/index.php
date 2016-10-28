<?php 
   /*Template Name: home*/
   session_start();
   get_header(); 
?>
<?php $root = get_bloginfo('template_url'); ?>
<div><a href=<?=get_page_link(5);?>><?=get_the_title(5);?></a></div>
<div><a href=<?=get_page_link(7);?>><?=get_the_title(7);?></a></div>
<!--<div><a href=<?//=get_page_link(9);?>><?//=get_the_title(9);?></a></div>-->
<div><a href=<?=get_page_link(20);?>><?=get_the_title(20);?></a></div>
<div><a href=<?=get_page_link(11);?>><?=get_the_title(11);?></a></div>
<div><a href=<?=get_page_link(14);?>><?=get_the_title(14);?></a></div>
<div><a href=<?=get_page_link(16);?>><?=get_the_title(16);?></a></div>
<div><a href=<?=get_page_link(18);?>><?=get_the_title(18);?></a></div>
</div>
</div>

<div id="wrapper1">
<div id="wrapper2">
<div class="outer">
<div class="float-wrap">

<div class="center">


<div class="centerbox">

<div class="centerleft">
<div class="h"><div>ОРДЕНСКАЯ КНИГА</div><br class="brclear"></div>

<div class="textpadder">
<?php wp_reset_postdata(); $cnt = 0; $posts = get_posts ("post_type=post&category=3&order=desc"); ?>
<?php if ($posts) { ?>
<?php foreach ($posts as $post) { setup_postdata ($post); $cnt++; if($cnt > 5) break; ?>
   <!-- anons -->
   <div class="anons">
      <div class="preview"><?php the_post_thumbnail(); ?></div>
      <h1><?php the_title(); ?></h1>
      <p><p><?php echo get_extended($post->post_content)['main']; ?><p></p>
      <div class="more2"><a href="<?php the_permalink(); ?>">подробнее</a></div>
      <br class="brclear"><br class="brclear">
      <hr size="1" noshade>
   </div>
   <!-- end of anons -->
<?php 
  } wp_reset_postdata(); }
?>
</div> <!-- end .textpadder -->
</div>
<div class="cr" style="border-top: 2px solid #DFD5BC;">
<div class="centerright">
<div class="h"><div>ПРОЕКТЫ</div><br class="brclear"></div>

<div class="textpadder">
<?php wp_reset_postdata(); $cnt = 0; $posts = get_posts ("post_type=post&category=4&order=desc"); ?>
<?php if ($posts) { ?>
<?php foreach ($posts as $post) { setup_postdata ($post); $cnt++; if($cnt > 7) break; ?>
   <!-- anons -->
   <div class="anons">
      <div class="preview"><?php the_post_thumbnail(); ?></div>
      <h1><?php the_title(); ?></h1>
      <p><p><?php echo get_extended($post->post_content)['main']; ?><p></p>
      <div class="more2"><a href="<?php the_permalink(); ?>">подробнее</a></div>
      <br class="brclear"><br class="brclear">
      <hr size="1" noshade>
   </div>
   <!-- end of anons -->
<?php 
  } wp_reset_postdata(); }
?>
</div> <!-- end .textpadder -->
</div> <!-- end .centerright -->
</div> <!-- end .cr -->

</div> <!-- end .centerbox -->

</div> <!-- end .center -->

<div class="left">

<!-- br class="brclear" -->
<div class="container-left">
<br>

<div class="news">
<div class="h"><div>новости</div><br class="brclear"></div>
<div class="newsblock">
<?php wp_reset_postdata(); $cnt = 0; $posts = get_posts ("post_type=post&category=2&order=desc"); ?>
<?php if ($posts) { ?>
<?php foreach ($posts as $post) { setup_postdata ($post); $cnt++; if($cnt > 5) break; ?>
   <!-- news -->
      <div class="onenews">
         <div class="date"><?php the_date(); ?></div>
         <a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a>
         <div class="more1"><a href="<?php the_permalink(); ?>">подробнее</a></div>
      </div>
   <!-- end of news -->
<?php 
  } wp_reset_postdata(); }
?>
</div>
</div> <!-- end .news -->


</div> <!-- end .container-left -->
</div> <!-- end .left -->

<?php get_footer(); ?>