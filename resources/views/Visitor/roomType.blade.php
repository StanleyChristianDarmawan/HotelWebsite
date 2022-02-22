@extends('layouts.visitor')

@section('content')
    <link rel="stylesheet" href="css/visitor/room_style.css">
        <table>
            <tr>
                <td><h2 class="contentTitle">Tipe Superior</h2></td>
            </tr>
            <tr>
                <td>Fasilitas:</td>
            </tr>
            <tr>
                <td>Kamar berukuran 32 m2</td>
            </tr>
            <tr>
                <td>Kamar mandi shower</td>
            </tr>
            <tr>
                <td>Coffee Maker</td>
            </tr>
            <tr>
                <td>AC</td>
            </tr>
            <tr>
                <td>LED TV 32 inch</td>
            </tr>
        </table>
    <div class="roomType">
        <img class="superior" src="Assets/superior-room.jpg" alt="">
        <img class="superior" src="Assets/coffee-maker2.jpg" alt="">
        <img class="superior" src="Assets/superior-bathroom2.jpg" alt="">
    </div>
    
        <table>
            <tr>
                <td><h2 class="contentTitle">Tipe Deluxe</h2></td>
            </tr>
            <tr>
                <td>Fasilitas:</td>
            </tr>
            <tr>
                <td>Kamar berukuran 45 m2</td>
            </tr>
            <tr>
                <td>Kamar mandi shower dan Bath</td>
            </tr>
            <tr>
                <td>Coffee Maker</td>
            </tr>
            <tr>
                <td>Sofa</td>
            </tr>
            <tr>
                <td>LED TV 40 inch</td>
            </tr>
            <tr>
                <td>AC</td>
            </tr>
        </table>
    <div class="roomType">
        <img class="deluxe" src="Assets/deluxe-room.jpg" alt="">
        <img class="deluxe" src="Assets/coffee-maker2.jpg" alt="">
        <img class="deluxe" src="Assets/deluxe-bathroom2.jpg" alt="">
    </div>
@endsection