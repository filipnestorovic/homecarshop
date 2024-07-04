<!DOCTYPE html>
<html>
<head>
    @include('components.head')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}product_files/ostracnozeva/quality.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}product_files/ostracnozeva/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}product_files/ostracnozeva/styles.css">
    <style>
        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Italic.ttf') format('truetype');
            font-weight: 400;
            font-style: italic
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.ttf') format('truetype');
            font-weight: 600;
            font-style: italic
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <b>{{$errors->first()}}</b>
        </div>
        <script>
            window.scrollTo(0, 0);
        </script>
    @endif
    <header class="offer_section">
        <div class="title_block">
            <p style="font-size: 21px; font-weight: 700;">
                UNIVERZALNI OŠTRAČ ZA KUHINJSKE NOŽEVE
            </p>
            <p class="subtitle"><b><i>NEOPHODAN U SVAKOJ KUHINJI</i></b></p>
        </div>
        <div class="image_block">
            <img class="image" src="{{ asset('/') }}product_files/ostracnozeva/offer_top.jpg">
            <div class="discount">Popust <b>-40%</b></div>
        </div>
        <div class="benefits_list1 clearfix">
            <div class="benefit_item1">100% garancija kvaliteta</div>
            <div class="benefit_item1">Plaćanje po pouzeću</div>
            <div class="benefit_item1">Najbolja <br/>cena</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Regularna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa 40% popusta:</span></div>
                <div class="value">
                    {{ $prices[1]['price'] }}
                    RSD
                </div>
            </div>
        </div>
        <ul class="benefits_list">
            <li>Oštrači od hirurškog čelika</li>
            <li>Vakumska podloga protiv klizanja</li>
            <li>Oštar nož u 2 poteza</li>
            <li>Oštri, ispravlja i polira sečivo</li>
            <li>Jednostavna i laka upotreba</li>
        </ul>
        <div class="order_block">
            <br>
            <form class="order_form" action="/order" method="post" >
                {{csrf_field()}}
                <input type="hidden" name="quantity" value="1"/>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input class="input" name="name" type="text" placeholder="Ime i prezime" required="">
                <input class="input" name="phone" type="tel" placeholder="Telefon" required="">
                <input class="input" name="shipping_address" type="text" placeholder="Adresa">
                <input class="input" name="shipping_city" type="text" placeholder="Grad">
                <div class="button_block">
                    <button class="button" type="submit">Poručite sada</button>
                </div>
            </form>
            <div class="products_count">Količina proizvoda na akciji je <span>ograničena</span></div>
        </div>
    </header>
    <section class="description_section brd">
        <h2 style="margin: 30px 0 30px;">
            <small style="font-size: 24px;">ODLIČAN ZA </small>
            <b style="font-size: 24px;">EFIKASNO I LAKO OŠTRENJE</b>
            <small style="font-size: 24px;">RAZNIH KUHINJSKIH NOŽEVA</small>
        </h2>
        <div class="text_block">
            <p style="text-align:left;">
                Sa ručnim oštračem, problem tupih noževa ne samo da potpuno nestaje, nego dobijate vrhunski oštre noževe.
                Dizajn oštrača je takav da nož možete da naoštrite jednim potezom ruke. Ima silikonsku vakumsku podlogu, te ga to
                čini potpuno bezbednim jer je klizanje onemogućeno. <b>Oštrači su napravljeni od hirurškog čelika, ne mogu se nikada
                    pokvariti ili istupiti.</b>
                <br/><br/>
                Ovo je trenutno hit u svetu i u 2023 godini je najprodavaniji kuhinjski proizvod. U Srbiji se tek pojavio i prodaje se velikom brzinom.
                <b>Ne gubite vreme i poručite dok je još na zalihama!</b>
            </p>
        </div>
    </section>
    <section class="description_section brd">
        <h2 style="margin: 30px 0 30px;">
            <small style="font-size: 24px;">SA OVIM OŠTRAČEM </small>
            <b style="font-size: 24px;">VAŠI NOŽEVI ĆE BITI HIRURŠKI OŠTRI</b>
            <br>
        </h2>
        <div class="image_block">
            <img class="image" src="{{ asset('/') }}product_files/ostracnozeva/item-2.png">
        </div>
        <div class="text_block">
            <p style="text-align:left;">
                Oštrite noževe brzo i lako pomoću ovog kompaktnog i laganom oštrača.
                <br/><br/>
                <b>Korak 1</b> - Stavite oštrač na ravnu površinu, povucite polugu i fiksirajte ga.
                <br/><br/>
                <b>Korak 2</b> - Pređite nožem u nekoliko puta u pravcu koji je naznačen.
                <br/><br/>
                <b>Korak 3</b> - Očistite nož vodom ili mokrom krpom i uživajte u sečenju
            </p>
        </div>
    </section>
    <section class="description_section2" style="background: url({{ asset('/') }}product_files/ostracnozeva/bg-lightl-894.jpg)">
        <h2><b>KARAKTERISTIKE OŠTRAČA</b></h2>
        <img class="image" src="{{ asset('/') }}product_files/ostracnozeva/item-3.png">
        <header class="offer_section">
            <ul class="benefits_list">
                <li>Kvalitetna izrada</li>
                <li>Hirurški oštri noževe</li>
                <li>Vakumska podloga</li>
                <li>Može da ga koristi svako</li>
                <li>Bezbedan za upotrebu</li>
            </ul>
        </header>
        <div class="button_block1">
            <a href="#order_form" class="button">Poručite sada</a>
        </div>
    </section>
    <section class="order_info1_section">
        <h2><b style="color: #ffffff;">PREDNOSTI NAŠEG OŠTRAČA ZA NOŽEVE</b></h2>
        <div class="order_info1_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}product_files/ostracnozeva/perfectlook.jpg">
                </div>
                <div class="text_block">
                    <h4 style="color: #ffd800;">GARANCIJA KVALITETA</h4>
                    <p style="color: #ffffff;">Naša prodavnica je zvanični predstavnik ovog proizvoda u Srbiji. Garantujemo kvalitet i zadovoljstvo korišćenja.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}product_files/ostracnozeva/quality.jpg">
                </div>
                <div class="text_block">
                    <h4 style="color: #ffd800;">UNAPREĐEN DIZAJN</h4>
                    <p style="color: #ffffff;">Oštrite noževe brzo i lako pomoću ovog kompaktnog i laganog oštrača. Ovaj uređaj će vašim noževima vratiti njihovu nekadašnju oštrinu.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}product_files/ostracnozeva/lowprice.jpg">
                </div>
                <div class="text_block">
                    <h4 style="color: #ffd800;">VISOKA EFIKASNOST</h4>
                    <p style="color: #ffffff;">Korejsko mehaničko oštrenje je jednostavno za upotrebu i ne zahteva posebne veštine za rad.
                        Može se postaviti na različite površine, a silikonsko vakumska podloga na dnu uređaja sprečava klizanje.</p>
                </div>
            </div>
        </div>
        <div class="button_block1">
            <a href="#order_form" class="button">Poručite sada</a>
        </div>
    </section>
    <section class="reviews_section">
        <h2><b style="color: #44036F;">RECENZIJE KUPACA</b></h2>
        <p style="color:#000; text-align: center;">
            "Sve preporuke za ovaj proizvod!
            Imam svoj restoran za dostavu hrane, i mogu vam reći da je ovaj oštrač u rangu sa profesionalnim oštračima koje sam koristio ranije.
            Pritom je praktičniji jer je uvek dostupan kada ga zalepim na radnu površinu."
            <br/><br/>
            <b>Marko Ilić, 38 godina</b>
        </p>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}product_files/ostracnozeva/otziv1.png">
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}product_files/ostracnozeva/otziv2.jpg">
            </div>
        </div>
    </section>
    <section class="order_info1_section" style="background: url({{ asset('/') }}product_files/ostracnozeva/bg-lightl-894.jpg)">
        <h2><b>KAKO PORUČITI?</b></h2>
        <div class="order_info1_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}product_files/ostracnozeva/delivery1_image1.jpg">
                </div>
                <div class="text_block">
                    <h4>Porudžbina</h4>
                    <p>Ostavite svoje podatke na našem sajtu.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}product_files/ostracnozeva/delivery1_image2.jpg">
                </div>
                <div class="text_block">
                    <h4>SLANJE</h4>
                    <p>Pošiljku šaljemo brzom poštom u roku od 1-2 radna dana</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}product_files/ostracnozeva/delivery1_image3.jpg">
                </div>
                <div class="text_block">
                    <h4>PLAĆANJE</h4>
                    <p>Paket plaćate kuriru po prijemu</p>
                </div>
            </div>
        </div>
    </section>
    <section class="offer_section">
        <div class="title_block">
            <p style="font-size: 21px; font-weight: 700;">
                UNIVERZALNI OŠTRAČ ZA KUHINJSKE NOŽEVE
            </p>
            <p class="subtitle"><b><i>NEOPHODAN U SVAKOJ KUHINJI</i></b></p>
        </div>
        <div class="image_block">
            <img class="image" src="{{ asset('/') }}product_files/ostracnozeva/offer_top1.jpg">
            <div class="discount">Popust <b>-40%</b></div>
        </div>
        <div class="benefits_list1 clearfix">
            <div class="benefit_item1">100% garancija kvaliteta</div>
            <div class="benefit_item1">Plaćanje po pouzeću</div>
            <div class="benefit_item1">Najbolja <br/>cena</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Regularna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa 40% popusta:</span></div>
                <div class="value">
                    {{ $prices[1]['price'] }}
                    RSD
                </div>
            </div>
        </div>
        <div class="order_block">
            <br>
            <form class="order_form" id="order_form" action="/order" method="post" >
                {{csrf_field()}}
                <input type="hidden" name="quantity" value="1"/>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input class="input" name="name" type="text" placeholder="Ime i prezime" required="">
                <input class="input" name="phone" type="tel" placeholder="Telefon" required="">
                <input class="input" name="shipping_address" type="text" placeholder="Adresa">
                <input class="input" name="shipping_city" type="text" placeholder="Grad">
                <div class="button_block">
                    <button class="button" type="submit">Poručite sada</button>
                </div>
            </form>
            <div class="products_count">Količina proizvoda na akciji je <span>ograničena</span></div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}product_files/ostracnozeva/scripts.js"></script>
@include('components.footer')
</body>
</html>
