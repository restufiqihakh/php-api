<?php  
$servername = 'localhost';//host database
$username = 'root';//username database
$password = '';//password database
$database = 'akhdiyat';

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
	die("Koneksi Error");
} else{
	echo "Koneksi Berhasil";
}
?>