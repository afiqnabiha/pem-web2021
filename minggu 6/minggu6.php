<!DOCTYPE html>
<html lang="en">
    <style>
        .th{
                border : 2px solid black;
                font-size: 15px;  
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table rules="rows" border="2" cellpadding="5">
        <tr>
            <th class="th">
               Data Hasil Submit Contact Me
            </th>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $_POST['Email'] ?></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><?php echo $_POST['Pesan'] ?></td>
        </tr>