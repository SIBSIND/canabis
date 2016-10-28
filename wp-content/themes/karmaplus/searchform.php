<?php 
   /*Template Name: searchform*/
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
 <img src="<?=$root;?>/img/bg_head_razdel2.gif" alt="Фонд Фёдорова" width="462" height="49" border="0">
</div>
<div class="centerbox">
<div class="content">
<div class="h"><div>Поиск</div><br class="brclear"></div>

<div class="textpadder">
 <table border="0" cellpadding="5" cellspacing="0">
<form action="<?php bloginfo( 'url' ); ?>" method="get">
<tbody><tr valign="top">
<td><strong>Искать:</strong></td>
<td><input type="text"  value="<?=$search_value; ?>" maxlength="200" class="text_search" aria-required="true" name="s" id="s" title="поиск по сайту" onfocus="if(this.value=='Поиск по сайту') this.value='';" onblur="if(this.value=='') this.value='Поиск по сайту';"/></td>
</tr>
<tr valign="top">
<td><strong>Раздел:</strong></td>
<td><?php select_cats(); ?></td>
</tr>

<tr valign="top">
<td></td><td><input src="<?=$root;?>/img/button_search.gif" class="search" alt="искать" type="image"></td>
</tr>
</tbody>
</form>
</table>

</div>

</div>








<!-- <form action="<?php bloginfo( 'url' ); ?>" method="get">
<input type="text"  value="<?=$search_value; ?>" maxlength="200" class="text_search" aria-required="true" name="s" id="s" title="поиск по сайту" onfocus="if(this.value=='Поиск по сайту') this.value='&nbsp';" onblur="if(this.value=='') this.value='Поиск по сайту';"/>
<input type="submit" id="searchsubmit" class="submit_search" value="Найти"/>
<?php select_cats(); ?>
</form> -->

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
<div><a href=<?=get_page_link(9);?>><?=get_the_title(9);?></a></div>
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
<div class="news">
<div class="h"><div>Контакты</div><br class="brclear"></div>
<div class="newsblock">
   <?php echo get_post_field('post_content', 30); ?>
</div>
</div>
</div> <!-- end .container-left -->
</div> <!-- end .left -->

<?php get_footer(); ?>