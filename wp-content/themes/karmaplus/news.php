<?php 
   /*Template Name: news*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
 <?php $root = get_bloginfo('template_url'); ?>
 <title><?php bloginfo('name'); ?> / <?php the_title(); ?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
 <META NAME="description" CONTENT="">
 <META NAME="keywords" CONTENT="Мария Аксенова, Иван Федоров, первопечатник, Фонд Федорова, русский язык">
 <META NAME="title" CONTENT="(none)">
 <link rel="stylesheet" href="<?=$root;?>/css/style.css">
 <link rel="stylesheet" href="<?=$root;?>/css/single.css">
 <?php wp_head(); ?>
</head>

<body>
<div id="sizer">
<div id="expander">

<div id="wrapper1">
<div id="wrapper2">
<div class="outer">
<div class="float-wrap">

<div class="center">

<div class="headRazdel2">
 <img src="<?=$root;?>/img/bg_head_razdel2.gif" alt="Фонд Фёдорова"
     width="462" height="49" border="0">
</div>
<div class="centerbox">
 <div class="content">
  <div class="h"><div>Все новости</div><br class="brclear"></div>

  <div class="textpadder">
  <?php wp_reset_postdata(); $posts = get_posts ("post_type=post&order=desc&posts_per_page=-1&numberposts=-1"); ?>
<?php if ($posts) { ?>
<?php foreach ($posts as $post) { setup_postdata ($post); ?>
   <!-- anons -->
    <div class="anons">
        <div class="date fright"><?php the_time; ?><?php the_time( get_option( 'date_format' ) ); ?></div>
		<h1><a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a></h1>
		<p><a href="<?php the_permalink(); ?>" class="black"><p><?php echo get_extended($post->post_content)['main']; ?><p></a></p>
		<div class="comment fleft"><? $categories = get_the_category();
										if ( ! empty( $categories ) ) {
										    echo esc_html( $categories[0]->name );   
										} ?>
		</div>
		<div class="more2 fright"><a href="<?php the_permalink(); ?>">подробнее</a></div>
		<br class="brclear">
		<hr size="1" noshade>
	</div>
	<!-- end of anons -->
<?php 
  } wp_reset_postdata(); }
?>
  </div>
 </div>
 <br class="brclear">
</div>
</div> <!-- end .center -->

<div class="left">

<div class="header">
 <a href="/search/" class="search"><img src="<?=$root;?>/img/dot.gif" alt="" width="46" height="57" border="0"></a>
 <a href="/sitemap.html" class="map"><img src="<?=$root;?>/img/dot.gif" alt="" width="46" height="57" border="0"></a>
 <a href="mailto:<?=get_option( 'admin_email' );?>" class="mail"><img src="<?=$root;?>/img/dot.gif" alt="" width="46" height="57" border="0"></a>
 <a href="/" class="home"><img src="<?=$root;?>/img/dot.gif" alt="" width="46" height="57" border="0"></a>
<!-- counters -->

<!-- end counters -->

 <br class="brclear">
<div class="menu">

<div><a href=<?=get_page_link(5);?>><?=get_the_title(5);?></a></div>
<div><a href=<?=get_page_link(7);?>><?=get_the_title(7);?></a></div>

<div><a href=<?=get_page_link(20);?>><?=get_the_title(20);?></a></div>
<div><a href=<?=get_page_link(11);?>><?=get_the_title(11);?></a></div>
<div><a href=<?=get_page_link(14);?>><?=get_the_title(14);?></a></div>
<div><a href=<?=get_page_link(16);?>><?=get_the_title(16);?></a></div>
<div><a href=<?=get_page_link(18);?>><?=get_the_title(18);?></a></div>

</div>


</div>


<!-- br class="brclear" -->
<div class="container-left">
<br>


</div> <!-- end .container-left -->
</div> <!-- end .left -->

<?php get_footer(); ?>