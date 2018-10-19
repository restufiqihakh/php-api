<?php  
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'akhdiyat';

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
	die("Koneksi Error");
}
// echo "Koneksi Berhasil"
?>