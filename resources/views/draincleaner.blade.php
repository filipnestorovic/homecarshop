<!DOCTYPE html>
<html>
<head>
    @include('components.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}product_files/draincleaner/styles.css">
    <link rel="shortcut icon" href="{{ asset('/') }}product_files/draincleaner/favicon.ico" type="image/x-icon">
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
            <p class="subtitle">DRAIN CLEANER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}product_files/draincleaner/bg-bottom.jpg" alt="">
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
            <li>Zapušeni odvodi će postati prošlost</li>
            <li>Sipajte prašak u odvod, ostavite nekoliko minuta da deluje i zalijte vrućom vodom</li>
            <li>Vaš odvod će biti pročišćen i bukvalno će usisavati vodu</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">REŠITE SE ZAČEPLJENIH ODVODA BEZ NAPORA</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>Efikasno uklanja sve vrste začepljenja</li>
            <li>Brzo deluje - vidljivi rezultati u roku od nekoliko minuta</li>
            <li>Bezbedan za sve vrste cevi i sudopera</li>
            <li>Moćna formula razgrađuje i najtvrdokornije začepljenje</li>
            <li>Odličan za čišćenje wc šolje i podnih odvoda</li>
            <li>Razgrađuje dlake i naslage od sapuna</li>
            <li>Ne oštećuje površine</li>
            <li>Ekološki prihvatljiv i bezbedan za okolinu</li>
            <li>Neka vaši odvodi "prodišu"</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">DRAIN CLEANER</h2>
        <img class="gif_image" src="{{ asset('/') }}product_files/draincleaner/sli-5.jpg" alt="">
        <p class="text">
            Ne dozvolite da začepljeni odvodi zagorčavaju vaš život! Naš čistič u prahu brzo i efikasno rastvara sve vrste začepljenja, uključujući masnoće, kosu, ostatke hrane i sapun.
            Samo sipajte prah u začepljeni odvod, dodajte vodu i gledajte kako začepljenje nestaje za samo nekoliko minuta!
            <br/><br/>
            Naša formula je posebno dizajnirana da bude bezbedna za okolinu i ne sadrži štetne hemikalije. Možete biti sigurni da koristite proizvod koji je bezbedan za vas, vašu porodicu i našu planetu.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">DRAIN CLEANER</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/11.jpg" alt="">
                <div class="text_block">
                    <p>Otkrijte moć našeg revolucionarnog čističa odvoda i sudopera u prahu koji će u trenu rešiti sve vaše probleme sa začepljenim cevima!</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/12.jpg" alt="">
                <div class="text_block">
                    <p>Isprobajte naš čistič odvoda i sudopera u prahu već danas i pridružite se hiljadama zadovoljnih korisnika koji su otkrili neverovatne rezultate našeg proizvoda!</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/draincleaner/13.jpg" alt="">
                <div class="text_block">
                    <p>Trenutno najprodavaniji proizvod na našem tržištu!</p>
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
                <img class="photo" src="{{ asset('/') }}product_files/draincleaner/rew(1).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Jelena Radovanović</div>
                    <p>"Neverovatno efikasan proizvod! Naš odvod u kuhinji je bio začepljen već nekoliko dana, ali ovaj čistič u prahu je rešio problem za svega nekoliko minuta. Toplo preporučujem!"</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}product_files/draincleaner/rew(2).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Julija Ponoš</div>
                    <p>"Konačno sam pronašla ekološki prihvatljiv proizvod koji stvarno radi. Naša kupatilska sudopera je bila začepljena i ništa nije pomoglo, ali ovaj čistič u prahu je učinio čuda. Svaka preporuka!"</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}product_files/draincleaner/rew(3).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Ana Jovanović</div>
                    <p>"Oduševljena sam ovim čističem odvoda u prahu! Naša kada je bila začepljena kosom, ali ovaj proizvod je rešio problem za nekoliko minuta. Od sada ću ga redovno koristiti."</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Drain Cleaner?</h2>
        <div class="order_steps_list1 clearfix">
            <div class="step_item">
                <h4>PORUČIVANJE</h4>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <h4>POTVRĐIVANJE</h4>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
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
            <p class="subtitle">DRAIN CLEANER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}product_files/draincleaner/bg-bottom.jpg" alt="">
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
<script src="{{ asset('/') }}product_files/draincleaner/scripts.js"></script>
@include('components.footer')
</body>
</html>
