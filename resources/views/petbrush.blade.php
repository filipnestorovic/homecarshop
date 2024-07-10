<!DOCTYPE html>
<html>
<head>
    @include('components.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}product_files/petbrush/styles.css">
    <link rel="shortcut icon" href="{{ asset('/') }}product_files/petbrush/favicon.ico" type="image/x-icon">
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
            <p class="subtitle">PET BRUSH</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}product_files/petbrush/bg-bottom.jpg" alt="">
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
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['price'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <ul>
            <li>Održavajte i negujte svog ljubimca - Pet Brush</li>
            <li>Revolucionarna četka za kućne ljubimce koja kombinuje praktičnost i inovaciju!</li>
            <li>Ova punjiva četka ispušta blagu paru, osvežavajući i hidrirajući dlaku za zdraviji i sjajniji izgled</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">PET BRUSH - ULTIMATIVNO REŠENJE ZA NEGU LJUBIMACA</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>Inovativna četka sa USB punjenjem</li>
            <li>Ugrađeni spremnik za vodu koji stvara paru</li>
            <li>Blaga i efikasna para za osvežavanje dlake</li>
            <li>Lagana i jednostavna za upotrebu</li>
            <li>Odlična za sve tipove dlake, od kratke do duge</li>
            <li>Nežno uklanja čvorove i prljavštinu</li>
            <li>Poboljšava zdravlje i sjaj dlake</li>
            <li>Idealna za svakodnevnu upotrebu</li>
            <li>Preko 2000 zadovoljnih korisnika</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">PET BRUSH</h2>
        <img class="gif_image" src="{{ asset('/') }}product_files/petbrush/sli-5.jpg" alt="">
        <p class="text">
            Obožavaćete ovu četku, zajedno sa svojim kućnim ljubimcem!
            <br/><br/>
            Pet Brush transformiše rutinu nege vašeg ljubimca u prijatno i efikasno iskustvo.
            Naša napredna tehnologija osigurava ne samo čišćenje, već i hidrataciju dlake, čineći je zdravijom i sjajnijom.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">PET BRUSH</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/11.jpg" alt="">
                <div class="text_block">
                    <p>Hidratacija i osvežavanje: Para iz četke dubinski hidrira dlaku, ostavljajući je mekom i sjajnom.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/12.jpg" alt="">
                <div class="text_block">
                    <p>Jednostavnost korišćenja: Lako se puni preko USB-a i jednostavna je za upotrebu, čineći negu brzom i efikasnom.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}product_files/petbrush/13.jpg" alt="">
                <div class="text_block">
                    <p>Nežno čišćenje: Nežno uklanja zamršene dlake i prljavštinu, pružajući vašem ljubimcu ugodno četkanje.</p>
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
                <img class="photo" src="{{ asset('/') }}product_files/petbrush/rew(1).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Milan Vasić</div>
                    <p>"Ova četka je promenila način na koji brinem o Rikijevoj dlaci. Dlaka je mekana kao kada je bio štene."</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}product_files/petbrush/rew(2).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Natalija Đorić</div>
                    <p>"Moja mačka obožava četkanje sada, iako ranije nisam mogla da je stignem. Četka je lagana i nežna, a para čini čuda."</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}product_files/petbrush/rew(3).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Ivan Ristić</div>
                    <p>"Moj pas obožava četkanje sa Pet Brush-om. Para je zaista "game changer", mnogo više dlaka pokupim četkanjem."</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Pet Brush?</h2>
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
            <p class="subtitle">PET BRUSH</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}product_files/petbrush/bg-bottom.jpg" alt="">
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
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['price'] }}
                    {{ $prices[1]['currency'] }}
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
<script src="{{ asset('/') }}product_files/petbrush/scripts.js"></script>
@include('components.footer')
</body>
</html>
