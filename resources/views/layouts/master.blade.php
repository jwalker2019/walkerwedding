<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Assistant:200|Spinnaker" rel="stylesheet">







        <title>Walker Wedding</title>

        <script type='text/javascript'>
             window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>

        <div id="app">
            <div class="row no-gutters">
                
                <div class="col-md-7 col-lg-8 order-md-1 order-2 contentWrap">
                    <router-view></router-view>
                </div>
                <div class="col-md-5 col-lg-4 order-md-2 order-1 headerWrap">
                        @include ('layouts.header')
                </div>
                
             </div>
        </div>
        
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    </body>
</html>