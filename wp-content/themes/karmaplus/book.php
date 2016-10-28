<?php 
   /*Template Name: book*/
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


<div class="headRazdel">
<div class="toptopic" style="background-image: url(<?=$root;?>/img/302-img1.jpg)">
<img src="<?=$root;?>/img/name1.gif" alt="Фонд Фёдорова" width="390" height="63" border="0">
<p><b><font face="Arial"><font color="#006069"><big><i>Своей миссией Фонд «Первопечатника Ивана Фёдорова» считает сохранение, распространение и развитие русского языка, традиций книгоиздания и просвещения.</i></big></font></font></b></p>
</div>
</div>
<div class="centerbox">
<div class="content">
<div class="h"><div>Документы фонда</div><br class="brclear"></div>

<div class="textpadder">
<p></p>
<?php wp_reset_postdata(); $posts = get_posts ("post_type=post&category=8&order=desc"); ?>
<?php if ($posts) { ?>
<?php foreach ($posts as $post) { setup_postdata ($post);?>
   <!-- anons -->
      <div class="anons">
         <div class="date fright"><?php the_time; ?><?php the_time( get_option( 'date_format' ) ); ?></div>
         <div class="preview"><?php the_post_thumbnail(); ?></div>
         <h1><?php the_title(); ?></h1>
         <div class="comment2"></div>
         <em><p><i><?php echo get_extended($post->post_content)['main']; ?></i>
         </p></em>
         <div class="more2"><a href="<?php the_permalink(); ?>">подробнее</a></div>
         <br class="brclear"><br class="brclear">
         <hr size="1" noshade="">
      </div>
   <!-- end of anons -->
<?php 
  } wp_reset_postdata(); }
?>
</div>

</div>
<br class="brclear">
</div> <!-- end .centerbox -->
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