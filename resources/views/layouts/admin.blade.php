<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/layouts/admin_layout.css">
</head>
<body>
    <div class="div_navbar">
        <h1 class="title">HOTEL HEBAT</h1>

        <ul class="ul_nav">
            <li class="role">Admin</li>
            <li><a href="admin room type">Kamar</a> | </li> 
            <li><a href="admin room facilities">Fasilitas Kamar</a> | </li> 
            <li><a href="admin hotel facilities">Fasilitas Hotel</a></li> 
        </ul>
    </div>
    <div class="clear"></div>


    <div class="banner">
        <img src="Assets/banner-admin2.jpg" alt="">
    </div>

    <div class="yieldContent">
        @yield('content')
    </div>

</body>
</html>