<script src="{{ asset('/') }}shared_files/jquery-3.7.1.min.js" type="text/javascript"></script>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1016213196582153');
    fbq('track','LanderView');
</script>
<meta property="og:title" content="{{ $product->name }} | Home Car Shop">
<meta property="og:description" content="{{ $product->name }}">
<meta property="og:image" content="{{ asset('/').$product->product_image }}">
<meta property="og:url" content="homecarshop.com/{{ $product->slug }}">
<title>{{ $product->name }} | Home Car Shop</title>
