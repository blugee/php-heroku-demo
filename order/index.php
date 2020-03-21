<?php

    require('../configuration.php');
?>

<!DOCTYPE html>
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">








<link type="text/css" href="./index_files/secondPage.css" rel="stylesheet" media="all">

<style>
    .ac_footer {
        position: relative;
        text-align: center;
        overflow: hidden;
        padding: 50px 0;
        color: #A12000;
    }

    .ac_footer a {
        color: #A12000;
    }

    .ac_footer p {
        text-align: center;
    }

    img[height="1"], img[width="1"] {
        display: none !important;
    }

</style>

<title>Power Shape</title>
<meta content="initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


</head>
<body>



<meta content="width=device-width, initial-scale=1" name="viewport">

<div class="hidden-window v2_2_2_2" style="display: block;">
<div class="second-page__wrapper">
<header class="second-page__header">
<div class="second-page__container">
<div class="second-page__header-wrapper">
<div class="second-page__header-inner">
<div class="logo">
<img src="./index_files/logo.png">
</div>
<ul class="stamp-list">
<li>
<img src="./index_files/stamp_1.png"></li>
<li>
<img src="./index_files/stamp_2.png">
</li>
<li>
<img src="./index_files/stamp_3.png">
</li>
</ul>
</div>
</div>
</div>
</header>
<div class="second-page__main">
<div class="second-page__container">
<div class="second-page__main-left">
<div class="bx-wrapper" <!--style="max-width: 100%; margin: 0px auto;"-->><div class="bx-viewport" <!--style="width: 100%; overflow: hidden; position: relative;"-->><ul class="slider-list bx-bx" <!--style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"-->>
<li data-value="1" <!--style="float: none; list-style: none; position: relative; width: 633px;"-->>
<div class="inner-block-wrapper">
<div class="inner-block">
<div class="h-w-check js_changer h-w-ico productCheckbox" data-value="<?=$_SESSION['price']?>"></div>
<div class="hidden-window__item">
<div class="hidden-window__item-sale">Vorteile
                                            <span>50%</span>
</div>
<div class="hidden-window__item-img">
<!-- <div class="hidden-window__item__product-wrapper">
                                                                                                <img src="imagesSec/pack_1.png" class="one_package">
                                                                                            </div> -->
<div class=" h-w-item-prod"></div>
</div>
<div class="hidden-window__item-balance">
<span>1</span> Stück
                                        </div>
</div>
<div class="inner-block__description clearfix">
<h3 class="inner-block__description-title">Die Grundlage wurde gelegt. </h3>
<div class="inner-block__description-tagline">Nehmen Sie ohne Diäten oder Sport
                                            ab!
                                        </div>
<div class="inner-block__description-result">3-4 kg weniger in 10 Tagen
                                        </div>
<div class="clearfix"></div>
<p class="inner-block__description-text">Vollständige Reinigung des Körpers,
                                            Förderung des Stoffwechsels und Appetitzügelung

                                        </p>
<div class="mobile-balance">
<span>1</span> Stück
                                        </div>
<div class="inner-block__description-price">
<div class="inner-block__description-price--new">
<span class="price-text">Preis:</span>
<span><?=$_SESSION['price']?>
                                                        <font>€</font>
</span>
</div>
<s class="inner-block__description-price--old"><?=($_SESSION['price']*3)?>
                                                <font>€</font>
</s>
</div>
<div class="clearfix"></div>
<div class="mobile-confirmation">
<button class="mobile-confirmation__button" data-value="<?=$_SESSION['price']?>"> Diesen Kurs
                                                auswählen
                                            </button>
</div>
</div>
</div>
</div>
</li>
<li class="active" data-value="3" >
<div class="inner-block-wrapper">
<div class="inner-block">
<div class="h-w-check js_changer h-w-ico productCheckbox" data-value="<?=($_SESSION['price']*3)?>"></div>
<div class="hidden-window__item">
<div class="hidden-window__item-sale">Vorteile
                                            <span>65%</span>
</div>
<div class="hidden-window__item__best">
<img src="./index_files/stars.png">
<p>BESTE WAHL
</p>
</div>
<div class="hidden-window__item-img">
<!-- <div class="hidden-window__item__product-wrapper">
                                                                                                <img src="imagesSec/pack_2.png">
                                                                                                <img src="imagesSec/pack_2.png">
                                                                                            </div> -->
<div class=" h-w-item-prod"></div>
<div class="present-block">
<div class="present-block__images">
<img src="./index_files/pack_2.png">
</div>
<div class="present-block__text">GESCHENK</div>
</div>
</div>
<div class="hidden-window__item-balance">
<span>3</span> Stück
                                        </div>
</div>
<div class="inner-block__description clearfix">
<h3 class="inner-block__description-title">Der richtige Ansatz
</h3>
<div class="inner-block__description-tagline">Werden Sie Übergewicht ein für
    alle Mal los!
</div>
<div class="inner-block__description-result">5-10 kg weniger in 30 Tagen
                                        </div>
<div class="clearfix"></div>
<p class="inner-block__description-text">Verbrennt aktiv Fett in der Unterhaut,
                                            stärkt das Immunsystem sowie die Zellerneuerung.

                                        </p>
<div class="mobile-balance">
<span>3</span> Stück
                                        </div>
<div class="inner-block__description-price">
<div class="inner-block__description-price--new">
<span class="price-text">Preis:</span>
<span><?=($_SESSION['price']*3)?>
                                                        <font>€</font>
</span>
</div>
<div class="inner-block__description-price--old">
<s><?=($_SESSION['price']*6)?>
                                                    <font>€</font>
</s>
</div>
</div>
<div class="clearfix"></div>
<div class="mobile-confirmation">
<button class="mobile-confirmation__button active" data-value="<?=($_SESSION['price']*3)?>">Sie haben diesen Kurs gewählt</button>
</div>
</div>
</div>
</div>
</li>
<li data-value="5" >
<div class="inner-block-wrapper">
<div class="inner-block">
<div class="h-w-check js_changer h-w-ico productCheckbox" data-value="<?=($_SESSION['price']*5)?>"></div>
<div class="hidden-window__item">
<div class="hidden-window__item-sale">Vorteile
                                            <span>70%</span>
</div>
<div class="hidden-window__item-img">
<!-- <div class="hidden-window__item__product-wrapper">
                                                                                                <img src="imagesSec/pack_2.png">
                                                                                                <img src="imagesSec/pack_2.png">
                                                                                            </div> -->
<div class=" h-w-item-prod"></div>
<div class="present-block">
<div class="present-block__images">
<img src="./index_files/pack_2.png">
</div>
<div class="present-block__text">GESCHENK</div>
</div>
</div>
<div class="hidden-window__item-balance">
<span>5</span> Stück
                                        </div>
</div>
<div class="inner-block__description clearfix">
<h3 class="inner-block__description-title">Verbessert Resultate</h3>
<div class="inner-block__description-tagline">Starten Sie ein neues Leben!</div>
<div class="inner-block__description-result">10-15 kg weniger in 40 Tagen</div>
<div class="clearfix"></div>
<p class="inner-block__description-text">Gewichtsstabilisierung, Verbesserung der Funktionsweise innerer Organe, Stärkung von Haaren und Nägeln sowie Straffung der Haut.</p>
<div class="mobile-balance">
<span>5</span> Stück
                                        </div>
<div class="inner-block__description-price">
<div class="inner-block__description-price--new">
<span class="price-text">Preis:</span>
<span><?=($_SESSION['price']*5)?>
                                                        <font>€</font>
</span>
</div>
<div class="inner-block__description-price--old">
<s><?=($_SESSION['price']*10)?>
                                                    <font>€</font>
</s>
</div>
</div>
<div class="clearfix"></div>
<div class="mobile-confirmation">
<button class="mobile-confirmation__button" data-value="<?=($_SESSION['price']*5)?>">Diesen Kurs auswählen</button>
</div>
</div>
</div>
</div>
</li>
</ul></div></div>
</div>
<div class="second-page__main-right">
<div class="hidden-window-form h-w-decor-block js_scrollForm">
<form action="../handler_2.php" class="second-page__form" method="post" _lpchecked="1">

<h3>GEBEN SIE IHRE DATEN EIN
                            </h3>
<p class="second-title">um eine Bestellung aufzugeben:

                            </p>
<div class="h-w-select h-w-ico">
<select class="change-package-selector custom-field change-select" id="totalPrice" name="totalPrice">
				<option value="<?=$_SESSION['price']?>"> 1 Packung</option>
                <option value="<?=($_SESSION['price']*3)?>" selected="selected"> 2 Packungen + 1 Geschenk</option>
                <option value="<?=($_SESSION['price']*5)?>"> 3 Packungen + 2 Geschenk</option>
</select>
<input type="text" id="quantity" name="quantity" value="" hidden>

</div>

<div style="display: block;">
<input class="custom-field" name="name" placeholder="Name" type="text" value="<?=((isset($_SESSION['name'])) ? $_SESSION['name'] : '')?>" data-count-length="2+">
<input class="only_number custom-field" name="phone" placeholder="Telefonnummer" value="<?=((isset($_SESSION['phone'])) ? $_SESSION['phone'] : '')?>" type="text">
</div>
  
            <input class="custom-field" name="email" placeholder="Email" type="text">
            <input class="custom-field" name="address" placeholder="Adresse" type="text">
            <input class="custom-field" name="city" placeholder="Stadt" type="text">
            <input class="custom-field" name="postIndex" placeholder="Postleitzahl" type="text">
</div>
<div class="second-page__form--pay-delivery">
<button class="second-page__form-button js_pre_submit" data-but="0"> Zahlung per Nachnahme</button><button class="second-page__form-button js_submit" data-but="0" style="display: none;"></button>
<div class="delivery-price">  LIEFERUNG:

                                    <span>
<font class="js_delivery_price">0</font> €</span>
</div>
</div>
<!--  -->
<div class="second-page__form--mobile-pay">
<!-- <div class="payment-online__timer"><div class="timer__text">Sesiunea de plata se încheie în</div>
<div class="timer__target"><span class="timer__target__item" data-adc-timer="H"><span class="timer__target__number" data-adc-number="H2">0</span><span class="timer__target__number" data-adc-number="H1">0</span></span><span class="timer__target__delimiter">:</span><span class="timer__target__item" data-adc-timer="M"><span class="timer__target__number" data-adc-number="M2">0</span><span class="timer__target__number" data-adc-number="M1">2</span></span><span class="timer__target__delimiter">:</span><span class="timer__target__item" data-adc-timer="S"><span class="timer__target__number" data-adc-number="S2">5</span><span class="timer__target__number" data-adc-number="S1">3</span></span></div></div> -->
<!--<h3>Wählen Sie eine Zahlungsmethode aus</h3>-->
<div class="second-page__form--mobile-pay__wrap">
<div class="pay-delivery">
<button class="mobile-pay__button js_pre_submit" data-but="1">Zahlung per Nachnahme</button><button class="mobile-pay__button js_submit" data-but="1" style="display: none;"></button>
<div class="delivery-price">Lieferung:
                                            <span><font class="js_delivery_price">0</font> €</span>
</div>
</div>
</div>
</div>
<!--  -->
<input type="hidden" name="time_zone" value="3"></form>
</div>
<div class="h-w-guarantee h-w-decor-block">
<h3 class="guarantee-title">WIR GARANTIEREN
                        </h3>
<ul class="guarantee-list">
<li>
<b>100%-ige </b> Qualität
                            </li>
<li>
<b>Überprüfung aller </b> Produkte bei Erhalt
                            </li>
<li>
<b>Sicherheit Ihrer </b> Daten
                            </li>
</ul>
</div>
</div>
<div class="second-page__main-left--bottom-text">
<span>DIE GEWICHTSABNAHME KANN VARIIEREN. </span> Dies ist der Durchschnittswert von 1047 Frauen
                    zwischen 18 und 68 Jahren, die RedBurn Ultimate genutzt haben.
                </div>
<div class="stamp-list__bottom">
<img src="./index_files/stamp_4.png">
<img src="./index_files/stamp_5.png">
<img src="./index_files/stamp_6.png">
</div>
</div>
</div>
</div>
</div>









<div class="ac_footer"><span>© 2019 Copyright. All rights reserved.</span><br>
    <a href="https://de1.redburnultimate.eu/privacy.html" target="_blank">Datenschutzpolitik</a>
    
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
        $(document).ready(function(){
            
           
            
            $('.productCheckbox').on('click', function(){
                newValue = $(this).attr('data-value');
                $('.slider-list.bx-bx li').removeClass('active');
                $(this).closest('li').addClass('active')
                $('#totalPrice').val(newValue);
                $('#totalPrice').trigger('change');
            });
            
            $('.mobile-confirmation__button').on('click', function(){
                var chosenValue = $(this).attr('data-value');
                $('#totalPrice').val(chosenValue);
                $('.mobile-confirmation__button').removeClass('active').html('Diesen Kurs auswählen');
                $(this).addClass('active').html('Sie haben diesen Kurs gewählt');
                $('#totalPrice').trigger('change');
            });
            
            $('#totalPrice').on('change', function(){
                var selectedOption = $(this).find('option[value="'+$(this).val()+'"]');
                $('#quantity').val(selectedOption.attr('data-quantity'));
            });
            $('#totalPrice').trigger('change');
            
            
        });
    </script>
</body>
</html>