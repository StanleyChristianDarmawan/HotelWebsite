<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/layouts/receptionist_layout.css">
</head>
<body>
    <div class="div_navbar">
        <h1 class="title">HOTEL HEBAT</h1>

        {{-- <ul class="ul_nav">
            <li class="role">Resepsionis</li>
            <li><a href="admin room">Kamar</a> | </li> 
            <li><a href="admin fasilitas kamar">Fasilitas Kamar</a> | </li> 
            <li><a href="admin fasilitas hotel">Fasilitas Hotel</a></li> 
        </ul> --}}
    </div>
    <div class="clear"></div>


    <div class="banner">
        <img src="Assets/banner-receptionist3-crop.jpg" alt="">
    </div>

    <div class="yieldContent">
        @yield('content')
    </div>

</body>
</html>