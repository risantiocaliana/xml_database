<?php
	session_start();
	if(isset($_POST['edit'])){
		$users = simplexml_load_file('files/mahasiswa.xml');
		foreach($users->user as $user){
			if($user->nik == $_POST['nik']){
				$user->nama = $_POST['nama'];
				$user->tempat_lahir = $_POST['tempat_lahir'];
				$user->tanggal_lahir = $_POST['tanggal_lahir'];
				$user->jekel = $_POST['jekel'];
				$user->alamat = $_POST['alamat'];
				$user->agama = $_POST['agama'];
				$user->status_perkawinan = $_POST['status_perkawinan'];
				$user->pekerjaan = $_POST['pekerjaan'];
				$user->kewarganegaraan = $_POST['kewarganegaraan'];
				$user->status_berlaku = $_POST['status_berlaku'];
				break;
			}
		}
 
		file_put_contents('files/mahasiswa.xml', $users->asXML());
		$_SESSION['message'] = 'Mahasiswa telah berhasil di Update';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Pilih terlebih dahulu untuk mengedit data';
		header('location: index.php');
	}
 
?>