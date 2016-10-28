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
  <div class="h"><div><?php the_category() ?></div><br class="brclear"></div>
  <div class="textpadder">
  <?php the_post(); ?>
   <div class="date fright"><?php the_date(); ?></div>
   <h1><?php the_title(); ?></h1>
   <div class="comment"></div>
   <br class="brclear">
   <hr size="1" noshade>
   <p>


<table border="0" cellpadding="0" cellspacing="0" align="right"
	width="100" class="img">
<tr><td>
<span id="sadasdasd"><?php the_post_thumbnail(); ?></span><br>
<div class="comment2"></div>
</td></tr>
</table>

   <p><?php the_content(); ?></p>
<!--
   <hr size="1" noshade>
   <div class="more1"><a href="/s/m.cgi?doc_id=382" onclick='window.open("/s/m.cgi?doc_id=382", "_blank", "width=614, height=440, toolbar=no,directories=no,scrollbars=yes,menubar=no,status=yes,resizable=yes"); return false'>Высказать свое мнение</a></div>
-->
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