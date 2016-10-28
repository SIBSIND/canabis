<?php 
   /*Template Name: how*/
	get_header();
?>

<section class="universal">
    <div class="wraper">
	    <div class="title"><div class="wraper">Наш Телеграмм Бот</div></div>
	    <?php setup_postdata( get_the_ID() ); the_content( get_the_ID() ); ?>
	</div>
</section>

<?php get_footer(); ?>