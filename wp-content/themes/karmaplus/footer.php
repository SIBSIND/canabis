<?php $root = get_bloginfo('template_url'); ?>
<br class="brclear">

</div> <!-- end .float-wrap -->
<br class="brclear">
</div><!-- end .outer -->
</div><!-- end #wrapper2 -->
</div><!-- end #wrapper1 -->

<img src="<?=$root;?>/img/bg_bottom.gif" width="900" height="6" border="0"><br>

<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='http://counter.yadro.ru/hit?t25.2;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: Ї®Є § ­® зЁб«® Ї®бҐвЁвҐ«Ґ© § "+
" бҐЈ®¤­п' "+
"border=0 width=88 height=15><\/a>")//--></script><!--/LiveInternet-->

<br>
<div class="footer">
<div class="copy">&copy; <?php echo $_SERVER['HTTP_HOST']; ?> 2016</div>
  <div class="submenu">
<div><a href=<?=get_page_link(5);?>><?=get_the_title(5);?></a></div>
<div><a href=<?=get_page_link(7);?>><?=get_the_title(7);?></a></div>

<div><a href=<?=get_page_link(20);?>><?=get_the_title(20);?></a></div>
<div><a href=<?=get_page_link(11);?>><?=get_the_title(11);?></a></div>
<div><a href=<?=get_page_link(14);?>><?=get_the_title(14);?></a></div>
<div><a href=<?=get_page_link(16);?>><?=get_the_title(16);?></a></div>
<div><a href=<?=get_page_link(18);?>><?=get_the_title(18);?></a></div>
  <br class="brclear">
  </div>

</div>
</div><!-- end #expander -->
</div><!-- end #sizer -->
	
	<!--<script src='<?=$root;?>/js/jquery-1.8.3.min.js'></script>
	<script src='<?=$root;?>/js/script.js'></script>-->
	
<?php wp_footer(); ?>
</body>
</html>