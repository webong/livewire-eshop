<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LiveWire Shop') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,600|Playfair+Display:700">
    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
    @livewireStyles

</head>
<body>
    <div>
        <div class="wrapper">
            <nav>
                @include('layouts.partials.nav')
            </nav>
            <main class="capsule">
                @include('inc.masthead')
                <div class="contain">
                    @yield('content')
                </div>
            </main>
    
            <div class="clear"></div>
            <div class="push"></div>
        </div>
        @include('layouts.partials.footer')
    </div>

    @livewireScripts
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        var cartTotal;
        window.onload = function () {
            window.livewire.on('setTotalAmount', total => {
                cartTotal = Number(total);  
            });
        }
        function payWithPaystack(){
            var handler = PaystackPop.setup({
                key: 'pk_test_019f989c38db78b17c68b4eae893db05646a077c',
                email: 'customer@email.com',
                amount: cartTotal,
                currency: "NGN",
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                callback: function(response){
                    window.livewire.emit('destroyCart')
                    // alert('success. transaction ref is ' + response.reference);
                },
                onClose: function(){
                    alert('window closed');
                }
            });
            handler.openIframe();
        }
      </script>
</body>
</html>
