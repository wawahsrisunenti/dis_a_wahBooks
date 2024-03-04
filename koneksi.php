<?php
class database{


    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "wawahBooks";
    var $koneksi = "";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }


    function tampil_data()
    {
        $data = mysqli_query($this->koneksi,"select * from buku");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
	
	function tampil_data_penerbit()
    {
        $data_penerbit = mysqli_query($this->koneksi,"select * from penerbit");
        while($row1 = mysqli_fetch_array($data_penerbit)){
            $hasil_penerbit[] = $row1;
        }
        return $hasil_penerbit;
    }


}
?>
