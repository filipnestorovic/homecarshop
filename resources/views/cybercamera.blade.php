<!DOCTYPE html>
<html>
<head>
    @include('components.head')
    <meta charset="UTF-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <link rel="stylesheet" href="{{ asset('/') }}product_files/cybercamera/style.css"/>
</head>
<body>
@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <b>{{$errors->first()}}</b>
    </div>
    <script>
        window.scrollTo(0, 0);
    </script>
@endif
<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__content">
                <div class="header__right">
                    <div class="header__img">
                        <img src="{{ asset('/') }}product_files/cybercamera/header-img.png" alt=""/>
                    </div>
                </div>
                <div class="header__left">
                    <div class="header__text">
                        <div class="header__descr">
                            <h1 class="header__title">CYBER CAMERA</h1>
                            <p class="header__subtitle">BEŽIČNA KAMERA ZA NADZOR</p>
                        </div>
                        <div class="burger">
                            <div class="burger__icon"></div>
                        </div>
                    </div>
                    <nav class="header__menu">
                        <ul class="menu">
                            <li class="menu__item">
                                <a class="menu__link" href="#description">Opis</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#works">Karakteristike</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#reviews">Utisci kupaca</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#order">Poručite odmah</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="form__wrap">
                        <div id="order" class="form form-wrapper">
                  <span class="white">Požurite da poručite sa popustom od
                    <span class="adfh-discount"></span>40%!</span>
                            <span class="white">Količina je ograničena</span>
                            <div class="prices">
                                <div class="new-price">
                                    <span class="adfh-new-price">{{ $prices[1]['price'] }}</span>
                                    <span class="adfh-currency">RSD</span>
                                </div>
                                <div class="old-price">
                                    <span class="adfh-old-price">{{ $prices[1]['originalPrice'] }}</span>
                                    <span class="adfh-currency">RSD</span>
                                </div>
                            </div>
                            <form class="form orderformcdn" action="/order" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="quantity" value="1"/>
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input
                                    type="text"
                                    class="form-name name fio"
                                    name="name"
                                    placeholder="Ime i prezime"
                                    required=""
                                />
                                <input
                                    class="form-phone phone tel"
                                    name="phone"
                                    placeholder="Telefon"
                                    required=""
                                    type="tel"
                                />
                                <input
                                    type="text"
                                    class="address form-text"
                                    name="shipping_address"
                                    placeholder="Adresa"
                                />
                                <input
                                    type="text"
                                    class="address form-text"
                                    name="shipping_city"
                                    placeholder="Grad"
                                />
                                <div class="form__btn">
                                    <button name="button" class="button-m btn" type="submit">
                                        Poručite sada
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="promo">
        <div class="container">
            <div class="promo__wrapper">
                <div id="description" class="promo__row">
                    <div class="promo__img">
                        <img src="{{ asset('/') }}product_files/cybercamera/1.jpg" alt="">
                    </div>
                    <div class="promo__text">
                        <p class="bold mb-10">Bežična mini nadzorna kamera omogućava odličnu kontrolu nad raznim
                            prostorijama, ljudima i vašom imovinom direktno preko telefona.</p>
                        <p>Cyber kamera vam omogućava da u realnom vremenu pratite šta se dešava u vašem domu,
                            kancelariji, skladištu, prodanvnici ili bilo gde drugde.
                            Možete daljinski pratiti događaje koristeći svoj mobilni telefon, gde god se nalazili na
                            zemljinoj kugli.</p>
                    </div>
                </div>
                <div class="promo__row reverse">
                    <div class="promo__text">
                        <p>Postavljanje je lako jer možete da instalirate kameru bilo gde pomoću ugrađenog magneta. U
                            kutiji dolazi sa nosačem koji se lako postavlja.</p>
                    </div>
                    <div class="promo__img">
                        <img src="{{ asset('/') }}product_files/cybercamera/2.jpg" alt="">
                    </div>
                </div>
                <div class="promo__row">
                    <div class="promo__img">
                        <img src="{{ asset('/') }}product_files/cybercamera/3.jpg" alt="">
                    </div>
                    <div class="promo__text">
                        <p>Kameri se može pristupiti preko aplikacije sa bilo kod uređaja. Poseduje noćni režim
                            snimanja, detekciju pokreta i alarm. Ugao od 150 stepeni pruža široku pokrivenost
                            snimanja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="works" class="works">
        <div class="container">
            <div class="works__wrapper">
                <div class="works__col">
                    <div class="works__link">
                        <a class="btn" href="#order">
                            Poručite sada
                        </a>
                    </div>
                    <div class="works__video">
                        <video width="100%" height="auto" autoplay="" loop="" muted="" playsinline="">
                            <source src="{{ asset('/') }}product_files/cybercamera/001.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="works__col">
                    <div class="works__img">
                        <img src="{{ asset('/') }}product_files/cybercamera/4.jpg" alt="">
                    </div>
                    <div class="works__text">
                        <h2>Karakteristike:</h2>
                        <ul>
                            <li><span class="bold">Rezolucija:</span> 720p / 1080p</li>
                            <li><span class="bold">Ugao snimanja:</span> 150°</li>
                            <li><span class="bold">Wi-Fi funkcija:</span> Daljinski prenos slike</li>
                            <li><span class="bold">Režim konverzije:</span> Automatski</li>
                            <li><span class="bold">Vreme neprekidnog snimanja:</span> Više od 1h</li>
                            <li><span class="bold">Veličina proizvoda:</span> 3.5cm x 2.5cm</li>
                            <li><span class="bold">Video režim:</span> SD / HD</li>
                            <li><span class="bold">Format slike:</span> JPG</li>
                            <li><span class="bold">Punjenje:</span> USB</li>
                        </ul>
                    </div>
                    <div class="works__slider slider">
                        <div class="slider__item">
                            <img src="{{ asset('/') }}product_files/cybercamera/5.jpg" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{ asset('/') }}product_files/cybercamera/6.jpg" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{ asset('/') }}product_files/cybercamera/7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="reviews" class="reviews">
        <div class="reviews__head">
            <div class="container">
                <h2 class="reviews__title">Utisci kupaca:</h2>
            </div>
        </div>
        <div class="container">
            <div class="reviews__wrapper">
                <div class="reviews__col">
                    <div class="reviews__block block">
                        <div class="block__header">
                            <div class="block__img">
                                <img src="{{ asset('/') }}product_files/cybercamera/rev1.jpg" alt=""/>
                            </div>
                            <div class="block__text">
                                <p class="bold">Zoran</p>
                                <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                            </div>
                        </div>
                        <p class="feedback">
                            Odlična rezolucija, savršeno izgleda i veoma je kompaktna. Odlično je što se lako povezuje
                            sa telefonom. Toplo preporučujem!
                        </p>
                    </div>
                    <div class="block__footer">
                        <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                    </div>
                    <div class="reviews__block block">
                        <div class="block__header">
                            <div class="block__img">
                                <img src="{{ asset('/') }}product_files/cybercamera/rev2.jpg" alt=""/>
                            </div>
                            <div class="block__text">
                                <p class="bold">Igor</p>
                                <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                            </div>
                        </div>
                        <p class="feedback">
                            Ponekad je koristim i na biciklu jer je magnet zaista jak i veoma se čvrsto fiksira.
                        </p>
                    </div>
                    <div class="block__footer">
                        <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                    </div>
                </div>
                <div class="reviews__col">
                    <div class="reviews__block block">
                        <div class="block__header">
                            <div class="block__img">
                                <img src="{{ asset('/') }}product_files/cybercamera/rev3.jpg" alt=""/>
                            </div>
                            <div class="block__text">
                                <p class="bold">Miloš</p>
                                <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                            </div>
                        </div>
                        <p class="feedback">
                            Super je što uvek mogu da pratim šta se dešava oko moje kuće. Kamera je baš zgodna za sve
                            namere. Moje preporuke!
                        </p>
                    </div>
                    <div class="block__footer">
                        <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                    </div>
                    <div class="reviews__block block">
                        <div class="block__header">
                            <div class="block__img">
                                <img src="{{ asset('/') }}product_files/cybercamera/rev4.jpg" alt=""/>
                            </div>
                            <div class="block__text">
                                <p class="bold">Tomo</p>
                                <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                            </div>
                        </div>
                        <p class="feedback">
                            Ova mala kamerica je neverovatna. Ima funkciju noćnog snimanja i to mi je pravo dobro! Veoma
                            je jednostavna za korišćenje, baš je sve onako kako je opisano.
                        </p>
                    </div>
                    <div class="block__footer">
                        <img src="{{ asset('/') }}product_files/cybercamera/stars.png" alt="">
                    </div>
                    <div class="reviews__link">
                        <a class="btn" href="#order">
                            Poručite sada
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}product_files/cybercamera/init.js"></script>
@include('components.footer')
</body>
</html>
