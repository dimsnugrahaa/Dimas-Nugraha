<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		margin: 40px;
		font: 17px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}



	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}


button {
  background-color: lavender;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 border-radius: 12px;

}

input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: grey;
}

	</style>
</head>

<body>
<form action="<?php echo base_url('index.php/belajarcrud/Simpan'); ?>" method="POST">
 
	<h3>Input Data Mahasiswa</h3>
 
	Nama Mahasiswa :<br>
	<input type="text" name="nama">
 
	<br>
	<br>
	Nim<br>
	<input type="text" name="nim">

	<br>
	<br>
	Alamat :<br>
	<input type="text" name="alamat">

	<br>
	<br>
	Fakultas :<br>
	<input type="text" name="fakultas">

	<br>
	<br>
	Jenis Kelamin :<br><br>
	<input type="radio" name="jk" value="Laki-laki">Laki-laki<br><br>
	<input type="radio" name="jk" value="Perempuan">Perempuan
 
	<br><br>
 
	<input type="submit" value="simpan">
 
</form> 
</body>
</html>