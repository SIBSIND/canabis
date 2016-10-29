<?php 
   /*Template Name: btc*/
    get_header();
?>

<section class="universal">
    <div class="wraper">
        <div class="title"><div class="wraper">Страница покупки</div></div>
        <h1>Вы приобретаете</h1>
        <p><span class="light">Россыпь 50гр (Предзаказ)</span></p>
        <p>Стоимость <span class="light black-bg">0.2822061 BTC.</span></p>
        <p>Для приобретения выбранного товара, оплатите <span class="light color-red">0.2822061 BTC</span> на Bitcoin кошелек:</p>
        <p><span class="light" style="word-wrap: break-word; text-transform: none;"></span></p><br>
        <p><span class="light">Заказ №10</span></p>
        <p>Комментарий к платежу <span class="light">60303</span></p>
        <p>Это номер вашего заказа, запомните его. По номеру заказа и комментарию вы сможете узнать статус заказа (получить адрес) в любой момент и с любого устройства на странице <a href="/index.php/buy/check">проверка заказа</a></p>

        <p class="text-warning">
            Комментарий служит исключительно для идентификации Вашего заказа.
            Отправлять BTC с комментарием не нужно, достаточно просто на указанный кошелек перевести <span style="color:red">точную сумму, дождаться 3 подтверждений</span> в системе Bitcoin, после чего Вы получите свой адрес.
            <span style="color:red">Оплачивать необходимо одним переводом. Сумма перевода и кошелек должны быть точными, как указано в реквизитах выше, иначе Ваша оплата не засчитается. Будьте внимательны, так как при ошибочном платеже получить адрес или возврат средств будет невозможно!</span>
            Выдача адреса производиться на этой странице автоматически, либо на странице <a href="/index.php/buy/check">проверка заказа</a> по выданному номеру заказа и присвоенному комментарию.
            Если Вы случайно закрыли данную страницу, воспользуйтесь страницей <a href="/index.php/buy/check">проверка заказа</a>.
            Создать свой кошелек <a href="https://bitcoin.org/ru/faq" target="_blank">Bitcoin</a> можно <a href="https://blockchain.info/ru/wallet/new" target="_blank">здесь</a> или <a href="https://bitcoin.org/ru/choose-your-wallet" target="_blank">здесь</a>.
            Купить <a href="https://bitcoin.org/ru/faq" target="_blank">Bitcoin</a> можно через обменники, например: <a href="http://www.bestchange.ru/qiwi-to-bitcoin.html" target="_blank">здесь</a>.
        </p>
        <br>
        <div class="check-area">
            <div id="info">
                После оплаты нажмите кнопку, чтобы получить адрес
            </div>

            <input class="button" onclick="checkBtc(10, 60303)" type="button" value="Проверить оплату" id="yt0">
        </div>
    </div>
</section>

<?php get_footer(); ?>