<!DOCTYPE html>
<html>
<head>
    @include('components.head')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/') }}product_files/arcticair/3010.png" type="image/png"/>
    <link rel="shortcut icon" href="{{ asset('/') }}product_files/arcticair/3010.png" type="image/png"/>
    <!-- OG -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width"/>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}product_files/arcticair/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}product_files/arcticair/style.css"/>
    <style>
        @font-face {
            font-family: 'FontAwesome';
            src: url('{{ asset('/') }}fonts/fontawesome-webfont.eot');
            src: url('{{ asset('/') }}fonts/fontawesome-webfont.eot') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.woff') format('woff'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.svg') format('svg');
            font-weight: normal;
            font-style: normal
        }
        @font-face {
            font-family: 'OfficinaSans';
            src: url('{{ asset('/') }}fonts/subset-OfficinaSansBlackC.txt') format('woff2'),
            url('{{ asset('/') }}fonts/subset-OfficinaSansBlackC-1.txt') format('woff'),
            url('{{ asset('/') }}fonts/subset-OfficinaSansBlackC-2.txt') format('truetype');
            font-weight: 900;
            font-style: normal;
        }

        @font-face {
            font-family: 'OfficinaSans';
            src: url('{{ asset('/') }}fonts/subset-OfficinaSansBoldC.txt') format('woff2'),
            url('{{ asset('/') }}fonts/subset-OfficinaSansBoldC-1.txt') format('woff'),
            url('{{ asset('/') }}fonts/subset-OfficinaSansBoldC-2.txt') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'OfficinaSans';
            src: url('{{ asset('/') }}fonts/subset-OfficinaSansBookC.txt') format('woff2'),
            url('{{ asset('/') }}fonts/subset-OfficinaSansBookC-1.txt') format('woff'),
            url('{{ asset('/') }}fonts/subset-OfficinaSansBookC-2.txt') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <b>{{$errors->first()}}</b>
        </div>
        <script>
            window.scrollTo(0, 0);
        </script>
    @endif
    <section class="top-block-v2">
        <div class="top-img"></div>
        <div class="top-cont">
            <div class="cost-cont clearfix">
                <div class="old-cost">
                    Redovna cena:
                    <strong>
                        <span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr">RSD</span>
                    </strong>
                </div>
                <div class="new-cost">
                    Cena na akciji:
                    <strong>
                        <span class="price_land_s1">{{ $prices[1]['price'] }}</span> <span class="price_land_curr">RSD</span>
                    </strong>
                </div>
            </div>
            <a href="#zakaz" class="button-m">Poručite sada</a>
        </div>
    </section>
    <section class="detail-block">
        <h2 class="lvl-title-v1">SVEŽINA JE UVEK TU!</h2>
        <img src="{{ asset('/') }}product_files/arcticair/main.jpg" style="display: block; margin: auto; width: 70%;" alt=""/>
        <div class="text-cont-v1">
            <p class="just">
                <b>Arctic Air</b> je kompaktni lični mini klima uređaj. Lagan je i ima tih ventilator koji ima 3 nivoa brzine. Uređaj stvara prijatnu hladnu mikroklimu u vašem okruženju.
                Uz to, vi i vaši najmiliji možete uživati u svežini bilo gde: u kuhinji, u dnevnoj sobi, spavaćoj sobi, na selu. Uređaj je potpuno tih i možete ga poneti sa sobom na posao.
            </p>
        </div>
    </section>
    <section class="delivery-block-v4">
        <div class="anon" style="margin-top: -60px;">
            <i class="fa fa-thermometer-quarter icons" aria-hidden="true"></i>
            <h3>HLAĐENJE</h3>
            <p>
                Uređaj ispunjava vazduh oko sebe prijatnom hladnoćom za samo nekoliko minuta. Istovremeno, zahvaljujući inovativnom ekonomičnom sistemu hlađenja, individualni klima uređaj je mnogo
                jeftiniji od velikih stacionarnih klima uređaja.
            </p>
        </div>
    </section>
    <section class="delivery-block-v4">
        <div class="anon" style="margin-top: -60px;">
            <i class="fa fa-microphone-slash icons" aria-hidden="true"></i>
            <h3>RADI APSOLUTNO TIHO</h3>
            <p>
                Ovaj model je opremljen tihim ventilatorom, koji vam omogućava da ga koristite čak i u spavaćoj sobi. Klima uređaj neće ometati vaš san bukom.
            </p>
        </div>
    </section>
    <section class="delivery-block-v4">
        <div class="anon" style="margin-top: -60px;">
            <i class="fa fa-toggle-on icons" aria-hidden="true"></i>
            <h3>JEDNOSTAVNO ZA UPOTREBU</h3>
            <p>
                Puštanje uređaja u funkciju je izuzetno lako. Nisu potrebna komplikovana podešavanja. Samo sipajte vodu u odeljak, prisnite dugme i uživajte u prijatnoj hladnoći. Uključuje se
                u bilo koju utičnicu ili USB port.
            </p>
        </div>
    </section>
    <section class="delivery-block-v4">
        <div class="anon" style="margin-top: -60px;">
            <i class="fa fa-tint icons" aria-hidden="true"></i>
            <h3>OVLAŽIVAČ I PREČISTAČ VAZDUHA</h3>
            <p>
                Arctic Air ne hladi samo vazduh. Dodatno ga vlaži, stvarajući prijatan osećaj laganog povetarca zahvaljujući ugrađenom odeljku za vodu, koji traje do 8 sati bez dopunjivanja.
            </p>
        </div>
    </section>
    <section class="delivery-block-v4">
        <div class="anon" style="margin-top: -60px;">
            <i class="fa fa-cube icons" aria-hidden="true"></i>
            <h3>KOMPAKTNE DIMENZIJE</h3>
            <p>
                Minijaturne dimenzije uređaja i mala težina omogućavaju vam ne samo da ga nosite po kući, već i da ga ponesete na bilo koje putovanje. Njegova težina je manja od 2 kilograma.
            </p>
        </div>
    </section>
    <section class="delivery-block-v4">
        <div class="anon" style="margin-top: -60px;">
            <i class="fa fa-puzzle-piece icons" aria-hidden="true"></i>
            <h3>ODLIČAN DODATAK ENTERIJERU</h3>
            <p>
                Diskretni Hi-Tech dizajn će pomoći da se uređaj uklopi u svaki enterijer. Osim toga, ugrađena funkcija noćnog svetla koje menja boje može stvoriti posebnu atmosferu i ugodnost u spavaćoj sobi.
            </p>
        </div>
    </section>
    <section class="sup-block-v2 gradient-theme">
        <h2 class="lvl-title-v1">UNIKATNA TEHNOLOGIJA</h2>
        <img src="{{ asset('/') }}product_files/arcticair/hot_cold.png" alt="Arctic Air"/>
        <p style="padding: 20px; font-size: 20px;">
            Tajna Arctic Air klima uređaja je u njegovoj tehnologiji hidro-hlađenja, koja koristi poseban isparivač u sklopu vazdušnog filtera. Hladi topao vazduh čineći ga osvežavajućim.
        </p>
    </section>
    <section class="comparison-block">
        <h2 class="lvl-title-v1">POGODNO ZA SVAKO MESTO U KUĆI</h2>
        <div class="rev-block-v3">
            <div class="rev-cont clearfix">
                <div class="rev-item">
                    <img style="border-radius: 0;" src="{{ asset('/') }}product_files/arcticair/photo_4.jpg" alt="Arctic Air"/>
                </div>
                <div class="rev-item">
                    <img style="border-radius: 0;" src="{{ asset('/') }}product_files/arcticair/photo_1.jpg" alt="Arctic Air"/>
                </div>
                <div class="rev-item">
                    <img style="border-radius: 0;" src="{{ asset('/') }}product_files/arcticair/photo_2.jpg" alt="Arctic Air"/>
                </div>
                <div class="rev-item">
                    <img style="border-radius: 0;" src="{{ asset('/') }}product_files/arcticair/photo_3.jpg" alt="Arctic Air"/>
                </div>
            </div>
        </div>
        <table class="t2">
            <thead>
            <tr>
                <td>Arctic Air</td>
            </tr>
            </thead>
        </table>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <td>BIĆE KORISTAN NA SVAKOM MESTU U KUĆI</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>u spavaćoj sobi</td>
            </tr>
            <tr>
                <td>u kuhinji</td>
            </tr>
            <tr>
                <td>u dnevnoj sobi</td>
            </tr>
            <tr>
                <td>na radnom mestu</td>
            </tr>
            <tr>
                <td>u kancelariji</td>
            </tr>
            </tbody>
        </table>
    </section>
    <section class="expert-block-v3">
        <h2 class="lvl-title-v1">SAMO DODAJ VODU</h2>
        <img style="width: 35%; display: block; margin: auto;" src="{{ asset('/') }}product_files/arcticair/water_tap_470.png"
             alt=""/>
        <div class="expert-cont">
            <p class="just">Uređaj radi bez prethodnih podešavanja i drugih instalacija.</p>
            <p class="just">Dovoljno je napuniti vodom i spojiti na izvor napajanja. Nakon punjenja rezervoara, klima će da hladi do 8 sati. Samo voda i izvor napajanja i uživaćete u prelepom svežem vazduhu.</p>
            <p class="just">Uređaj povećava vlažnost u prostoriji, dodatno pročišćava vazduh i blagotvorno utiče na zdravlje cele porodice.</p>
        </div>
    </section>
    <section style="background: none;" class="expert-block-v3">
        <h2 class="lvl-title-v1">MINIMALNA POTROŠNJA ENERGIJE</h2>
        <img style="width: 90%; display: block; margin: auto;" src="{{ asset('/') }}product_files/arcticair/laptop.jpg" alt=""/>
        <div class="expert-cont">
            <p class="just">Zahvaljujući naprednoj tehnologiji hlađenja, ovaj uređaj troši minimalno energije.</p>
            <p class="just">USB priključak vam omogućava da Arctic Air nosite sa sobom gde god želite ne zaviseći od utičnica i produžnih kablova. Može se čak povezati i na laptop.</p>
            <p class="just">Na taj način imate priliku da stvorite prijatnu, svežu i vlažnu mikroklimu čak i tamo gde nemate pristup utičnici.</p>
        </div>
    </section>
    <section class="rev-block-v3">
        <h2 class="lvl-title-v1">ŠTA KUPCI PIŠU O NAMA</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}product_files/arcticair/dmitiry.jpg" alt="Arctic Air"/>
                <h4>DIMITRIJE ĆERANIĆ</h4>
                <p>
                    Kupio sam ga roditeljima, jer ne podnose letnje vrućine. Zaista je jednostavan za upotrebu i prilično pouzdan. Odlično hladi i super izgleda. Sve u svemu, drago mi je što sam pronašao
                    ovaj proizvod. Inače, odličan je poklon za nekoga. Sve preporuke!
                </p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}product_files/arcticair/elena.jpg" alt="Arctic Air"/>
                <h4>ELENA ROSANDIĆ</h4>
                <p>
                    Hvala vam puno na ovom divnom uređaju! :) Svideo se celoj porodici! Prilično sam zadovoljna što mogu da ga koristim kada mi je mali sin u blizini. Stvara prijatnu hladnoću za razliku
                    od običnih klima uređaja koji su opasni i previše hladni. Hvala vam puno zaista!
                </p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}product_files/arcticair/sergey.jpg" alt="Arctic Air"/>
                <h4>SRĐAN MARIĆ</h4>
                <p>
                    U početku sam bio skeptičan za ovaj uređaj, ali sam se brzo razuverio. Arctic Air je pravo čudo. Koristim ga u radionici, a nekada ga nosim sa sobom i na kampovanje pa ga upalim u šatoru.
                    Dovoljno je samo da ga povežem na eksternu bateriju za punjenje mobilnih telefona i to je to. Mali ali efikasan - toplo preporučujem ovaj proizvod!
                </p>
            </div>
        </div>
    </section>
    <section class="top-block-v2">
        <h2 class="lvl-title-v1">UREĐAJ BEZ KONKURENCIJE</h2>
        <img src="{{ asset('/') }}product_files/arcticair/temp.png" alt=""/>
        <div class="top-cont">
            <ul class="list-type-v1" style="background: #61adff;">
                <li>Arctic Air se uključuje u bilo koju zidnu utičnicu ili USB port</li>
                <li>Bukvalno za nekoliko minuta stvara prijatan osećaj svežine</li>
                <li>Parametni uređaja odgovaraju najefikasnijem energetskom razredu A++</li>
                <li>Potročnja električne energije je samo 7.5W</li>
                <li>Ugrađeno pozadinsko svetlo i funkcija noćnog osvetljenja omogućavaju vam da stvorite prijatnu opuštajuću atmosferu</li>
                <li>Hladnjak ne sadrži freon, tako da nema štetna dejstva po zdravlje i životnu okolinu</li>
            </ul>
        </div>
    </section>
    <section class="use-block-v3">
        <h2 class="lvl-title-v1">USLOVI KUPOVINE</h2>
        <ul class="use-cont">
            <li>
                <span><i class="fa fa-handshake-o ico" aria-hidden="true"></i></span>
                <p>PORUČIVANJE</p>
                <p>Ostavite svoje podatke na našem web sajtu</p>
            </li>
            <li>
                <span><i class="fa fa-universal-access ico" aria-hidden="true"></i></span>
                <p>POTVRDA PORUDŽBINE</p>
                <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
            </li>
            <li>
                <span><i class="fa fa-shopping-bag ico" aria-hidden="true"></i></span>
                <p>PLAĆANJE</p>
                <p>Plaćate kuriru brze pošte pri preuzimanju paketa</p>
            </li>
        </ul>
    </section>
    <section class="top-block-v2">
        <div class="top-img"></div>
        <div class="top-cont">
            <div class="cost-cont clearfix">
                <div class="old-cost">
                    Redovna cena:
                    <strong>
                        <span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr">RSD</span>
                    </strong>
                </div>
                <div class="new-cost">
                    Cena na akciji:
                    <strong>
                        <span class="price_land_s1">{{ $prices[1]['price'] }}</span> <span class="price_land_curr">RSD</span>
                    </strong>
                </div>
            </div>
            <form id="zakaz" class="m1-form dark-bg orderformcdn" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="quantity" value="1"/>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <div><input type="text" name="name" placeholder="Ime i prezime" required=""/></div>
                <div><input type="tel" name="phone" placeholder="Telefon" required=""/></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" required=""/></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" required=""/></div>
                <div>
                    <button class="button-m">Poručite sada</button>
                </div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}product_files/arcticair/script.js"></script>
@include('components.footer')
</body>
</html>
