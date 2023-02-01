<?php
// jika salah satu di ceklis 
if (isset($_POST['web'])) {
    $kursus = "Web Programming";
    $harga = $_POST['harga1'];
}
if (isset($_POST['java'])) {
    $kursus = "Java";
    $harga = $_POST['harga2'];
}
if (isset($_POST['mobile'])) {
    $kursus = "Mobile Programing";
    $harga = $_POST['harga3'];
}
if (isset($_POST['phyton'])) {
    $kursus = "Phyton";
    $harga = $_POST['harga4'];
}
// jika web programming di ceklis dan 1 lainnya
if (isset($_POST['web']) and isset($_POST['java'])) {
    $kursus = "Web Programming & Java";
    $harga = $_POST['harga1'] + $_POST['harga2'];
}
if (isset($_POST['web']) and isset($_POST['mobile'])) {
    $kursus = "Web Programing & Mobile Programming";
    $harga = $_POST['harga1'] + $_POST['harga3'];
}
if (isset($_POST['web']) and isset($_POST['phyton'])) {
    $kursus = "Phyton & Web Programming";
    $harga = $_POST['harga1'] + $_POST['harga4'];
}
// jika java programming di ceklis dan 1 lainnya
if (isset($_POST['phyton']) and isset($_POST['java'])) {
    $kursus = "Phyton & Java";
    $harga = $_POST['harga4'] + $_POST['harga2'];
}
if (isset($_POST['java']) and isset($_POST['mobile'])) {
    $kursus = "Java & Mobile Programming";
    $harga = $_POST['harga2'] + $_POST['harga3'];
}
// jika mobile programming di ceklis dan 1 lainnya
if (isset($_POST['mobile']) and isset($_POST['phyton'])) {
    $kursus = "Phyton & Mobile Programming";
    $harga = $_POST['harga3'] + $_POST['harga4'];
}
// jika web programming dan di ceklis 2 lainnya 
if (isset($_POST['web']) and isset($_POST['java']) and isset($_POST['mobile'])) {
    $kursus = "Web Programming, Java, Mobile Programming";
    $harga = $_POST['harga1'] + $_POST['harga2'] + $_POST['harga3'];
}
if (isset($_POST['web']) and isset($_POST['java']) and isset($_POST['phyton'])) {
    $kursus = "Web Programming, Java, Phyton";
    $harga = $_POST['harga1'] + $_POST['harga2'] + $_POST['harga4'];
}
if (isset($_POST['web']) and isset($_POST['mobile']) and isset($_POST['phyton'])) {
    $kursus = "Web Programming, Mobile Programming, Phyton";
    $harga = $_POST['harga1'] + $_POST['harga3'] + $_POST['harga4'];
}
// jika java dan di ceklis 2 lainnya 
if (isset($_POST['java']) and isset($_POST['mobile']) and isset($_POST['phyton'])) {
    $kursus = "Java, Mobile Programming, Phyton";
    $harga = $_POST['harga2'] + $_POST['harga3'] + $_POST['harga4'];
}
// jika semua paket terceklis 
if (isset($_POST['web']) and isset($_POST['java']) and isset($_POST['mobile']) and isset($_POST['phyton'])) {
    $kursus = "Web Programming, Java, Mobile Programming, Phyton";
    $harga = $_POST['harga1'] + $_POST['harga2'] + $_POST['harga3'] + $_POST['harga4'];
}
$nama = $_POST['nama'];
$waktu = $_POST['waktu'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus</title>
</head>

<body>
    <h1>LEMBAGA KURSUS KOMPUTER ANDA PASTI BISA</h1><br>
    ----------------------------------------------------------------- <br>
    nama petugas : << riza>> <br>
        ----------------------------------------------------------------- <br>
        nama peserta : <?php echo $nama ?> <br>
        pilihan paket Kursus : <?php echo $kursus ?><br>
        pilihan waktu kursus : <?php echo $waktu ?> <br>
        ----------------------------------------------------------------- <br>
        total biaya kursus : <?php echo "Rp " . $harga  ?>


</body>

</html>