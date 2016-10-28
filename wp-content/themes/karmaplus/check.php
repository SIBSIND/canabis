<?php 
   /*Template Name: check*/
	get_header();
?>

	<section class="check">
	    <div class="wraper">
	        <div class="title"><div class="wraper">Проверка заказа</div></div>
	        <form action="javascript: void(0);" method="post" onsubmit="checkOrder()">
	            <ul>
	                <li>Номер заказа</li>
	                <li><input type="text" class="input" id="Num"></li>
	            </ul>
	            <ul>
	                <li>Комментарий к платежу</li>
	                <li><input type="text" class="input" id="Comment"></li>
	            </ul>
	            <br>

	            <div id="info">
	                После оплаты нажмите кнопку, чтобы получить адрес
	            </div>

	            <input class="button" name="yt0" type="submit" value="Проверить оплату" id="yt0">
	            <br>
	            <div>Проверить оплату по чеку можно <a target="_blank" class="button" href="https://qiwi.ru/support/check.action">тут</a></div>
	        </form>
	    </div>
	</section>

<?php get_footer(); ?>