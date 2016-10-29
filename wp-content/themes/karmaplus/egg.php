<?php 
   /*Template Name: egg*/
	get_header();
?>

<section class="universal">
    <div class="wraper">
	    <div class="title"><div class="wraper">Страница покупки</div></div>
	    <h1>Вы приобретаете</h1>
        <p><span class="light">Россыпь 50гр (Предзаказ)</span></p>
        <p>Стоимость <span class="light black-bg">12500 руб.</span></p>
        <p>Для приобретения выбранного товара, оплатите <span class="light color-red">12500 рублей</span> с помощью Qiwi ваучера.</p>

        <p><span class="light">Заказ №9</span></p>
        <p>Это номер вашего заказа, запомните его. По номеру заказа и коду ваучера вы сможете узнать статус заказа (получить адрес) в любой момент и с любого устройства на странице <a href="/index.php/buy/check">проверка заказа</a></p>
        <br>

        <form>
            <ul>
                <li><h2>Код ваучера</h2></li>
                <li><input type="text" class="input" id="Egg"></li>
            </ul>
        </form>
        <br>

        <div class="check-area">
            <div id="info">
                После оплаты нажмите кнопку, чтобы получить адрес
            </div>

            <input class="button" onclick="activateEgg(9)" type="button" value="Проверить оплату" id="yt0">
        </div>
    </div>
</section>

<?php get_footer(); ?>