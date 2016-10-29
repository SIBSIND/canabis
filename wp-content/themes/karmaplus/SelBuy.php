<?php
/*Template Name: SelBuy*/
    get_header();
?>
<section class="universal">
    <div class="wraper">
        <div class="title"><div class="wraper">Выберите метод оплаты</div></div>
        <style>
        div.paymentMethod {
        margin:0 auto;
        text-align: center;
        }
        div.paymentMethod > div.item {
        vertical-align: top;
        display: inline-block;
        text-align: center;
        margin:10px;
        }
        div.paymentMethod > div.item > a {
        text-decoration: none;
        }
        div.paymentMethod > div.item  img {
        width: 64px;
        height: 64px;
        }
        div.paymentMethod > div.item  span.caption {
        display: block;
        /*color:black;*/
        }
        </style>
        <div class="paymentMethod">
            <div class="item">
                <a href="/index.php/qiwi">
                    <img width="100" height="100" src="https://static.qiwi.com/img/qiwi_com/favicon/favicon-192x192.png">
                    <span class="caption">Qiwi</span>
                </a>
            </div>
            <div class="item">
                <a href="/index.php/btc">
                    <img width="100" height="100" src="https://bitcoin.org/img/icons/opengraph.png">
                    <span class="caption">Bitcoin</span>
                </a>
            </div>
            <div class="item">
                <a href="/index.php/egg">
                    <img width="100" height="100" src="https://static.qiwi.com/img/visa_qiwi_com/ui/eggs/egg-activate-success.png">
                    <span class="caption">Qiwi ваучеры</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>