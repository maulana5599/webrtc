<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Reccicer</title>
    <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>

</head>
<body>
    
    <h1>HALO</h1>
    <script>
        console.log(window.Echo)
        window.Echo.channel('aku-channel')
               .listen('.IniPesan', function (e) {
                   console.log(e.message)
                   alert(e)
                })
    </script>
</body>
</html>