@extends('layouts.receptionist')

@section('content')
    <link rel="stylesheet" href="css/table/table.css">
    <link rel="stylesheet" href="css/receptionist/receptionist_style.css">


    <input type="date" class="date">
    <input type="text" class="search" placeholder="Search">
    <table>
        <thead>
            <tr>
                <td>Nama Tamu</td>
                <td>Tanggal Cek In</td>
                <td>Tanggal Cek Out</td>
                <td>Option</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sean</td>
                <td>17-08-2021</td>
                <td>20-08-2021</td>
                <td>Cek In</td>
            </tr>
            <tr>
                <td>Sean</td>
                <td>17-08-2021</td>
                <td>20-08-2021</td>
                <td>Cek In</td>
            </tr>
            <tr>
                <td>Sean</td>
                <td>17-08-2021</td>
                <td>20-08-2021</td>
                <td>Cek In</td>
            </tr>
        </tbody>
    </table>
@endsection