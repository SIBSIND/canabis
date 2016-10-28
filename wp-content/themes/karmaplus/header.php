<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="data:;base64,iVBORw0KGgo=" />
  <?php $root = get_bloginfo('template_url'); ?>
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="https://chem24.bz/template/style_site_chem24.bz/css/bootstrap.min.css?9626035" />
  <link rel="stylesheet" href="https://chem24.bz/template/style_site_chem24.bz/css/chat.css?1251350" />
  <link rel="stylesheet" type="text/css" href="https://chem24.bz/template/style_site_chem24.bz/css/style.css?4998119" />
  <link rel="stylesheet" type="text/css" href="https://chem24.bz/template/style_site_chem24.bz/css/rating.css?4533278" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script>
  /*! http://tinynav.viljamis.com v1.2 by @viljamis */
  (function(a,k,g){a.fn.tinyNav=function(l){var c=a.extend({active:"selected",header:"",indent:"- ",label:""},l);return this.each(function(){g++;var h=a(this),b="tinynav"+g,f=".l_"+b,e=a("<select/>").attr("id",b).addClass("tinynav "+b);if(h.is("ul,ol")){""!==c.header&&e.append(a("<option/>").text(c.header));var d="";h.addClass("l_"+b).find("a").each(function(){d+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)d+=c.indent;d+=a(this).text()+"</option>"});
  e.append(d);c.header||e.find(":eq("+a(f+" li").index(a(f+" li."+c.active))+")").attr("selected",!0);e.change(function(){k.location.href=a(this).val()});a(f).after(e);c.label&&e.before(a("<label/>").attr("for",b).addClass("tinynav_label "+b+"_label").append(c.label))}})}})(jQuery,this,0);
      function crutch() {
      if ($('div.warning').height() > 0 && $(window).width() > 500) {
      var bg1margin = $('div.warning').height() + 70;
      $('body').css('background-position', 'top ' + $('div.warning').height() + 'px center, top ' + bg1margin + 'px center, top center');
      console.log("crutched!");
      } else {
      $('body').css('background-position', 'top center, top 70px center, top center');
      }
      }
      function longnavi() {
      var counter = 0;
      if ($('nav:not(.mobile)').width() > $('div.inner').width() && $(window).width() > 640) {
      while ($('nav:not(.mobile)').width() > $('div.inner').width() && counter < 100) {
      $('nav li:visible:last').hide();
      counter++;
      }
      $('nav:not(.mobile) li:hidden, nav li:visible:last').wrapAll('<div class="more_nav"></div>');
      $('nav:not(.mobile)').append('<li><a href="#" class="more_btn">Ещё</a></li>');
      $('div.more_nav li:hidden').each(function () {
      $(this).show().css('display', 'inline-block');
      });
      }
      }
      $(window).on("orientationchange resize load", function () {
      //crutch();
      longnavi();
      });
      $(document).ready(function () {
      $(".open-mobile-menu").click(function () {
      $("nav.mobile > ul").slideToggle();
      });
      $(document).on("mouseenter", "a.more_btn", function () {
      $("div.more_nav").slideDown(500);
      });
      $(document).on("mouseleave", "nav, div.more_nav", function () {
      $("div.more_nav").slideUp(500);
      });
      var currentUrl = window.location.href;
      $('nav:not(.mobile) li a').each(function (index, value) {
      if ($(this).prop("href") === currentUrl) {
      $(this).parent().addClass("selected");
      }
      });
      function resizeBackground() {
      jQuery(".background").height(jQuery(window).height()+60);
      }
      jQuery(window).resize(function() {
      resizeBackground();
      });
      resizeBackground();
      });
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="https://chem24.bz/template/style_site_chem24.bz/js/bootstrap.min.js?4560702"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script type="text/javascript">
      $(document).ready(function(){
      global_url = 'https://chem24.bz';
      });
      </script>
      <script src="https://chem24.bz/template/ajax/site.js?11567696"></script>
      <?php wp_head(); ?>
  </head>
  <body>
    <div class="background"></div>
    <div class="warning">
        <div class="wraper">
            ВНИМАНИЕ!!! Теперь у нас есть ТЕЛЕГРАММ БОТ:@chem24bzbot
        Всем удачного дня и приятных покупок!    </div>
    </div>
    <div class="logo"><div class="inner"><a href="/">CHEM24.biz</a></div></div>
    <div class="inner">
      <nav class="mobile">
          <button class="button open-mobile-menu">Меню</button>
          <ul>
              <li><a href="/">Товары</a></li>
              <li><a href="/index.php/check">Проверка заказа</a></li>
              <li><a href="/index.php/reviews">Отзывы</a></li>
              <li><a href="/index.php/problems">РЕШЕНИЕ ПРОБЛЕМ!!!</a></li>
              <li><a href="/index.php/works">Вакансии</a></li>
              <li><a href="/index.php/how">Как оформить заказ</a></li>
              <li><a href="/index.php/telbot">Наш Телеграмм Бот</a></li>
          </ul>
      </nav>
      <nav>
        <li><a href="/">Товары</a></li>
        <li><a href="/index.php/check">Проверка заказа</a></li>
        <li><a href="/index.php/reviews">Отзывы</a></li>
        <li><a href="/index.php/problems">РЕШЕНИЕ ПРОБЛЕМ!!!</a></li>
        <li><a href="/index.php/works">Вакансии</a></li>
        <li><a href="/index.php/how">Как оформить заказ</a></li>
        <li><a href="/index.php/telbot">Наш Телеграмм Бот</a></li>
      </nav><style type="text/css">
      a:hover {
      color: black;
      text-decoration: none;
      }
      </style>