<?php 

session_start();
class database
{

	public $host="localhost";
	public $user="root";
	public $pass="";
	public $dbname="sinauweb";
	
	function koneksi()
	{
		mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->dbname);
	}
}


class pengguna
{
	
	function login_pengguna($uid,$pass)
	{
		// enskripsi pass ke md4
		//1. mencocokan data username pss pada tabel
		//2. hitung jumlah data yg cocok
		//3. memecah data yg cocok
		//4. jika ada data yg cocok ,username n pss bener, maka login
		//5. jika tidk mka gagal login
		$pass=md5($pass);
		$ambildata=mysql_query("SELECT * FROM pengguna WHERE username='$uid' AND password='$pass'");
		$hitung=mysql_num_rows($ambildata);
		$pecah=mysql_fetch_array($ambildata);
		if ($hitung>0) 
		{
			$_SESSION['id_pengguna']=$pecah['id_pengguna'];
			$_SESSION['username']=$pecah['username'];
			$_SESSION['password']=$pecah['password'];
			$_SESSION['nama']=$pecah['nama'];
			return true;

		}
		else
		{
			return false;
		}

	}
	function logout_pengguna()
	{
		session_destroy();
	}
}

class instansi
{
	
	function tampil_instansi()
	{
		$tampilins=mysql_query("SELECT * FROM instansi");
		if (mysql_num_rows($tampilins) > 0)
		{
			while ($a=mysql_fetch_assoc($tampilins)) 
				$data[]=$a;
			return $data;
		}
		else
		{
			echo"kosong berita";
		}
	}

	function simpan_instansi($nama,$deskripsi)
	{
		mysql_query("INSERT INTO instansi(nama, deskripsi) VALUES('$nama', '$deskripsi')");
	}

	function hapus_instansi($idnya)
	{
		mysql_query("DELETE FROM instansi WHERE id='$idnya'");
	}
	function ambil_instansi($idnya)
	{
		$ambil=mysql_query("SELECT*FROM instansi WHERE id='$idnya'");
		$kat=mysql_fetch_assoc($ambil);
		$data[]=$kat;
		return $data;
	}
	function ubah_instansi($idb,$nama,$deskripsi)
	{
		mysql_query("UPDATE instansi SET nama='$nama',deskripsi='$deskripsi' WHERE id='$idb'");
	}



}

//instance class database
$db = new database();
$db->koneksi();
//instance class database
$ins= new instansi();
$pengguna=new pengguna();

?>