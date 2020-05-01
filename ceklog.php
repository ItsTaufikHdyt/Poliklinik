<?php
session_start();
include("koneksi/config.php");
$username=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);
$cek=mysqli_query($dbconnect,"SELECT * FROM login WHERE username='$username' AND password='$pass'");
$data1=mysqli_num_rows($cek);
$data2=mysqli_fetch_array($cek);

	if($data1==0)
	{
	header("location:index.php");
	}
	else if($data1>0)
	{
		if($data2['typeuser']=="admin")
		{
		$SESSION['username']=$data2['username'];
		$SESSION['password']=$data2['password'];
		$_SESSION['typeuser']="admin";
		header("location:admin/tampilan/home.php");
		}
		else if($data2['typeuser']=="petugas")
		{
		$SESSION['username']=$data2['username'];
		$SESSION['password']=$data2['password'];
		$_SESSION['typeuser']=="petugas";
		header("location:petugas/tampilan/home.php");
		}
		else if($data2['typeuser']=="pasien")
		{
		$SESSION['username']=$data2['username'];
		$SESSION['password']=$data2['password'];
		$_SESSION['typeuser']=="pasien";
		header("location:pasien/tampilan/home.php");
		}
        else{
        echo "Username atau Password salah";}
	}
?>