<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">


	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
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

	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}


button {
  background-color: transparent; 
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
button.kecil {
	background-color: 	transparent; 
  border: none;
  color: white;
  padding: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
 border-radius: 12px;}


	</style>
</head>
<body>
	<div id="container">
	<div id="body">
	<center>
	<h1>DATA MAHASISWA</h1>
	  <center><a href="<?php echo base_url('index.php/belajarcrud/input'); ?>">Input Data</a></center>
		<table style="margin:20px auto;" border="1">
			<tr>
	      <th>No</th>
				<th>Nim</th>
				<th>Nama Mahasiswa</th>
				<th>Alamat</th>
				<th>Fakultas</th>
				<th>Jenis Kelamin</th>
				<th>Aksi</th>
			</tr>
			<?php
			$no = 1;
			foreach($mahasiswa as $u){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->nim ?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->alamat ?></td>
				<td><?php echo $u->fakultas ?></td>
				<td><?php echo $u->jk ?></td>
				<td>
			    <?php echo anchor('belajarcrud/edit/'.$u->nim,'Edit'); ?>
				<?php echo anchor('belajarcrud/hapus/'.$u->nim,'Hapus'); ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>
