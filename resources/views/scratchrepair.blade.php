<!DOCTYPE html>
<html>
<head>
    @include('components.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}product_files/scratchrepair/styles.css">
    <link rel="shortcut icon" href="{{ asset('/') }}product_files/scratchrepair/favicon.ico" type="image/x-icon">
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
    <header class="offer_section offer3">
        <div class="title_block">
            <h1 class="main_title"></h1>
            <p class="subtitle">SCRATCH REPAIR</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}product_files/scratchrepair/bg-bottom.jpg" alt="">
            <div class="discount_block">
                <div class="value">40%</div>
                <div class="text">popusta</div>
            </div>
        </div>
        <div class="benefits_list clearfix">
            <div class="benefit_item">100% garancija kvaliteta</div>
            <div class="benefit_item">Ograničene zalihe</div>
            <div class="benefit_item">Plaćanje po preuzimanju</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['price'] }}
                    RSD
                </div>
            </div>
        </div>
        <ul>
            <li>Revolucionarno rešenje za uklanjanje ogrebotina sa vašeg vozila</li>
            <li>Koristeći nanotehnologiju, ovaj proizvod brzo i efikasno uklanja ogrebotine, vraćajući vašem automobilu prvobitni sjaj i izgled</li>
            <li>Idealno za sve ljubitelje automobila koji žele da očuvaju besprekoran izgled svojih vozila</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">SCRATCH REPAIR - ULTIMATIVNO REŠENJE ZA OGREBOTINE</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>Efikasno uklanja sve vrste površinskih ogrebotina</li>
            <li>Koristi naprednu nanotehnologiju za obnovu boje i sjaja</li>
            <li>Jednostavna primena za brze i vidljive rezultate</li>
            <li>Siguran za sve vrste automobilskih boja</li>
            <li>Povratak originalnog izgleda bez potrebe za skupim popravkama</li>
            <li>Kompaktan i lako prenosiv za korišćenje u svakoj prilici</li>
            <li>Preko 1000 zadovoljnih kupaca</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">SCRATCH REPAIR</h2>
        <img class="gif_image" src="{{ asset('/') }}product_files/scratchrepair/sli-5.jpg" alt="">
        <p class="text">
            Sa Scratch Repair sprejem, ne morate više brinuti o ogrebotinama koje narušavaju izgled vašeg automobila.
            <br/><br/>
            Ova formula ne samo da uklanja oštećenja, već i štiti vaš automobil od budućih ogrebotina, čineći ga otpornijim na svakodnevna oštećenja.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">SCRATCH REPAIR</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/11.jpg" alt="">
                <div class="text_block">
                    <p>Vratite svom automobilu sjaj i izgled bez dugotrajnih i skupih popravki</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/12.jpg" alt="">
                <div class="text_block">
                    <p>Scratch Repair je dizajniran da bude siguran za sve karoserije</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/scratchrepair/13.jpg" alt="">
                <div class="text_block">
                    <p>Prijatelj svakog gradskog automobila zbog svoje kompaktnosti i lakog korišćenja</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </section>
    <section class="reviews4_section">
        <h2 class="title">Utisci naših kupaca</h2>
        <div class="reviews_stats_block">
            <p><b>98%</b> kupaca preporučuje ovaj proizvod</p>
            <div class="line"></div>
        </div>
        <div class="reviews_list4 owl-carousel">
            <div class="review_item">
{{--                <img class="photo" src="{{ asset('/') }}product_files/scratchrepair/rew(1).jpg" alt="">--}}
                <div class="text_block">
                    <div class="author_info">Marko Tomić</div>
                    <p>"Oduševljen sam rezultatima! Sprej je uspeo da otkloni sve sitne ogrebotine koje sam imao godinama."</p>
                </div>
            </div>
            <div class="review_item">
{{--                <img class="photo" src="{{ asset('/') }}product_files/scratchrepair/rew(2).jpg" alt="">--}}
                <div class="text_block">
                    <div class="author_info">Ana Đorđević</div>
                    <p>"Primena je bila neverovatno jednostavna, zbog toga sam i htela da ga kupim. Više nema tragova parkiranja :)"</p>
                </div>
            </div>
            <div class="review_item">
{{--                <img class="photo" src="{{ asset('/') }}product_files/scratchrepair/rew(3).jpg" alt="">--}}
                <div class="text_block">
                    <div class="author_info">Igor Pavlović</div>
                    <p>"Impresioniran sam kako ovaj proizvod radi. Ogromna ušteda vremena i novca u odnosu na odlazak kod majstora."</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Scratch Repair?</h2>
        <div class="order_steps_list1 clearfix">
            <div class="step_item">
                <h4>PORUČIVANJE</h4>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <h4>POTVRĐIVANJE</h4>
                <p>Kontaktiraćemo Vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <h4>SLANJE</h4>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <h4>PLAĆANJE</h4>
                <p>Plaćate po pouzeću kuriru brze pošte</p>
            </div>
        </div>
    </section>
    <section class="offer_section offer3">
        <div class="title_block">
            <h3 class="main_title"></h3>
            <p class="subtitle">SCRATCH REPAIR</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}product_files/scratchrepair/bg-bottom.jpg" alt="">
            <div class="discount_block">
                <div class="value">40%</div>
                <div class="text">popusta</div>
            </div>
        </div>
        <div class="benefits_list clearfix">
            <div class="benefit_item">100% garancija kvaliteta</div>
            <div class="benefit_item">Ograničene zalihe</div>
            <div class="benefit_item">Plaćanje po preuzimanju</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['price'] }}
                    RSD
                </div>
            </div>
        </div>
        <form id="order_form" class="order_form" action="/order" method="post">
            {{csrf_field()}}
            <input type="hidden" name="quantity" value="1"/>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <input class="field" type="text" name="shipping_address" placeholder="Adresa">
            <input class="field" type="text" name="shipping_city" placeholder="Grad">
            <button class="button" type="submit">Poručite sada</button>
        </form>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}product_files/scratchrepair/scripts.js"></script>
@include('components.footer')
</body>
</html>
