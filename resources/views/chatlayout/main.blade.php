
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <!-- SEO Meta Tags-->
        <meta name="keywords" content="quicky, chat, messenger, conversation, social, communication" />
        <meta name="description"
            content="Quicky is a Bootstrap based modern and fully responsive Messaging template to help build Messaging or Chat application fast and easy." />
        <meta name="subject" content="communication">
        <meta name="copyright" content="frontendmatters">
        <meta name="revised" content="Tuesday, November 10th, 2020, 08:00 am" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Quicky - HTML Chat Template</title>
        <!-- Favicon and Touch Icons-->
        <link rel="apple-touch-icon" sizes="180x180" href="./../../apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./../../favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./../../favicon-16x16.png">
        <link rel="shortcut icon" href="./../../favicon.ico" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{asset('admin')}}/css/inter.css">
        <link rel="stylesheet" href="{{asset('admin')}}/css/app.min.css">
        <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>

    </head>

    <body class="chats-tab-open">

        <!-- Main Layout Start -->
        <div class="main-layout">
            @include("chatlayout.navbar")

            @include("chatlayout.sidebar")

            @include("chatlayout.start")

            @yield("content")

        </div>
        <!-- Main Layout End -->


        <!-- Javascript Files -->
        <script src="{{asset('admin')}}/js/jquery.min.js"></script>
        <script src="{{asset('admin')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('admin')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('admin')}}/js/svg-inject.min.js"></script>
        <script src="{{asset('admin')}}/js/modal-steps.min.js"></script>
        <script src="{{asset('admin')}}/js/emojionearea.min.js"></script>
        <script src="{{asset('admin')}}/js/app.js"></script>

        <script>
            // Scroll to end of chat
            document.querySelector('.chat-finished').scrollIntoView({
                block: 'end',               // "start" | "center" | "end" | "nearest",
                behavior: 'auto'          //"auto"  | "instant" | "smooth",
            });

        </script>
        <script>
            window.Echo.channel("maulana-channel")
            .listen('.MaulanaMessage', function (e) {
                   console.log(e.message)
                   $("#messages").empty()
                    alert(22)
                })
        </script>
    </body>

</html>