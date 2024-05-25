<?php
// include "config/Function.php";








// Fungsi untuk menghasilkan nilai acak unik


// // Menghasilkan nilai acak unik


// echo "skin :" . $skinselect . "<br>";
// echo "UCP: $ucp<br>";
// echo "Email: $email<br>";
// echo "Username: $usernamecreate<br>";
// echo "Tanggal Lahir: $tanggalLahir<br>";
// echo "Gender: $gender<br>";
// echo "Registration Date: $reg_date<br>";
// echo "Money: $money<br>";
// echo "Random Bank Rekening: $randomrekuse<br>";
// echo "Default Position X: $DEFAULT_POS_X<br>";
// echo "Default Position Y: $DEFAULT_POS_Y<br>";
// echo "Default Position Z: $DEFAULT_POS_Z<br>";
// echo "Default Position A: $DEFAULT_POS_A<br>";
// echo "Kepala: $kepala<br>";
// echo "Perut: $perut<br>";
// echo "Lengan Kiri: $lengankiri<br>";
// echo "Lengan Kanan: $lengankanan<br>";
// echo "Kaki Kiri: $kakikiri<br>";
// echo "Kaki Kanan: $kakikanan<br>";
// // echo "age".$tanggalLahir."<br>";
// // echo "age".$tanggalLahir."<br>";


// // echo $gender . "<br>";

function sha256($data)
{
    return hash("sha256", $data);
}

$pSalt = [];

// Generate salt
for ($i = 0; $i < 16; $i++) {
    $pSalt[$i] = chr(rand(0, 94) + 33);// Menghasilkan karakter acak antara ASCII 33 sampai 126
}
// Ubah array menjadi string
$pSaltString = implode("", $pSalt);

$password = "123123"; // Ganti dengan password yang ingin di-hash

$dataToHash1 = $password . $pSaltString;

// Lakukan hashing menggunakan SHA256 enkripsi
$pHashedSalt1 = hash("sha256", $dataToHash1);

// $encrypted = base64_encode($pSaltString);
$pSaltString = substr($pSaltString, 0, 16);
$pHashedSalt1 = strtoupper($pHashedSalt1);

echo "pSaltString Salt: " . $pSaltString;
echo "<br>";
echo " password: " . $password;
echo "<br>";

echo "echo hasing1db  $pHashedSalt1 <br>";
echo "<br>";
// Contoh penggunaan
$plaintext = "Ini adalah data yang akan dienkripsi";
$key = "kuncirahasia"; // Ganti dengan kunci yang lebih kuat dalam aplikasi produksi

// Proses enkripsi
$encrypted = encrypt($plaintext, $key);
echo "Data terenkripsi: " . $encrypted . "\n";

// Proses dekripsi
$decrypted = decrypt($encrypted, $key);
echo "Data terdekripsi: " . $decrypted . "\n";

?>