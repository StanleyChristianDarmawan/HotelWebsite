@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" href="css/table/table.css">

    <table>
        <thead>
            <tr>
                <td>Nama Fasilitas</td>
                <td>Keterangan</td>
                <td>Image</td>
                <td>Option</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kolam Renang</td>
                <td>Berada di lantai 1 dengan luas 60m persegi</td>
                <td>kolam_renang.png</td>
                <td>
                    <a href="delete.php">DELETE</a> |
                    <a href="edit.php">EDIT</a>
                </td>
            </tr>
            <tr>
                <td>Kolam Renang</td>
                <td>Berada di lantai 1 dengan luas 60m persegi</td>
                <td>kolam_renang.png</td>
                <td>
                    <a href="delete.php">DELETE</a> |
                    <a href="edit.php">EDIT</a>
                </td>
            </tr>
            <tr>
                <td>Kolam Renang</td>
                <td>Berada di lantai 1 dengan luas 60m persegi</td>
                <td>kolam_renang.png</td>
                <td>
                    <a href="delete.php">DELETE</a> |
                    <a href="edit.php">EDIT</a>
                </td>
            </tr>
        </tbody>
    </table>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 30px; margin-left: 90%; margin-top: 25px; border: 3px solid black; border-radius: 50%; background-color: #CCCCCC;">
        <a href="edit.php"><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></a>
    </svg>
@endsection