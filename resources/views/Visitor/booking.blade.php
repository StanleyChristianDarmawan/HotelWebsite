@extends('layouts.visitor')

@section('content')
    <link rel="stylesheet" href="css/booking_style.css">
    <div class="bookingForm">
        <form action="" method="POST">
            <table>
                <tr>
                    <td><h2 class="contentTitle">Form Pemesanan</h2></td>
                </tr>
                <tr>
                    <td><label for="pemesan">Nama Pemesan</label></td>
                    <td><input type="text" id="pemesan"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="phone">No Handphone</label></td>
                    <td><input type="text" id="phone"></td>
                </tr>
                <tr>
                    <td><label for="tamu">Nama Tamu</label></td>
                    <td><input type="text" id="tamu"></td>
                </tr>
                <tr>
                    <td><label for="kamar">Tipe Kamar</label></td>
                    <td><select name="kamar" id="kamar">
                            <option value="superior">Superior</option>
                            <option value="Deluxe">Deluxe</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="button">Konformasi Pemesanan</button></td>
                </tr>
            </table>
            
        </form>
    </div>
@endsection