<?php

//tampung inputan textfield ke dalam variable
$angka1 = @$_POST['tangka1'];
$angka2 = @$_POST['tangka2'];
$hasil = @$_POST['hasil'];

// //uji jika tobol tambah diklik
// if(isset($_POST['btambah']))
// {
//     $hasil = $angka1 + $angka2;
// }

//Logika Operasi
// Logika operasi
if (isset($_POST['btambah'])) {
    $hasil = $angka1 + $angka2;
} elseif (isset($_POST['bkurang'])) {
    $hasil = $angka1 - $angka2;
} elseif (isset($_POST['bbagi'])) {
    $hasil = $angka1 / $angka2;
} elseif (isset($_POST['bkali'])) {
    $hasil = $angka1 * $angka2;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
   <form method="post">
    <table align="center" border="0">
        <tr>
            <td colspan="3" bgcolor="pink">Kalkulator Sederhana</td>
        </tr>
        <tr>
            <td colspan="3"> <hr> </td>
        </tr>
        <tr>
            <td>Angka 1</td>
            <td>:</td>
            <td>
                <input type="text" name="tangka1" value="<?php echo $angka1; ?>">
            </td>
        </tr>
        <tr>
            <td>Angka 2</td>
            <td>:</td>
            <td>
                <input type="text" name="tangka2" value="<?=$angka2?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="btambah" value="+">
                <input type="submit" name="bkurang" value="-">
                <input type="submit" name="bbagi" value="/">
                <input type="submit" name="bkali" value="*">
            </td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td>
                <input type="text" name="thasil" value="<?=$hasil?>">
            </td>
        </tr>
        <tr>
            <td colspan="3"> <hr> </td>
        </tr>
    </table>
   </form>
</body>
</html>