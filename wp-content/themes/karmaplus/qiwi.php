<?php 
   /*Template Name: qiwi*/
    get_header();
?>

<section class="universal">
    <div class="wraper">
        <div class="title"><div class="wraper">Страница покупки</div></div>
        <h1>Вы приобретаете</h1>
        <p><span class="light">Россыпь 50гр (Предзаказ)</span></p>
        <p>Стоимость <span class="light black-bg">12500 руб.</span></p>
        <p>Для приобретения выбранного товара, оплатите <span class="light color-red">12500 рублей</span> на QIWI кошелек:</p>
        <p><span class="light" id="button">
        <a id="pur" onclick="showP('<? echo the_field( "pur", get_the_ID() );?>'); return false;">
        Получить QIWI кошелек</a></span></p>
        <p>Комментарий к платежу <span class="light">66813</span></p>
        <p>Внимание! Обязательно укажите этот комментарий при оплате, иначе оплата не будет засчитана в автоматическом режиме.</p>
        <p><span class="light">Заказ №10</span></p>
        <p>Это номер вашего заказа, запомните его. По номеру заказа и комментарию вы сможете узнать статус заказа (получить адрес) в любой момент и с любого устройства на странице <a href="/index.php/buy/check">проверка заказа</a></p>
        <br>

        <div class="check-area">
            <div id="info">
                После оплаты нажмите кнопку, чтобы получить адрес
            </div>

            <input class="button" onclick="checkPay(10, 66813)" name="yt0" type="button" value="Проверить оплату" id="yt0">        <div>Проверить платеж по чеку можно <a href="https://qiwi.com/support/check.action" target="_blank" class="button">здесь</a></div>
        </div>
    </div>
</section>

<script>
    function showP(pur) {
        $('#pur').text(pur);
    }
</script>

<?php get_footer(); ?>