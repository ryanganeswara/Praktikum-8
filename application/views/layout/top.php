<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<style type="text/css">
		.active{
			background-color: #ccc !important;
		}
	</style>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="text/css">
	.w3-bar-item{
		text-align: center !important;
	}
	.w3-sidebar{
		top: 0
	}
</style>
<body>
	<div class="w3-sidebar w3-black w3-bar-block" style="width:13%">
	  <h3 class="w3-bar-item"><b>MENU</b></h3>
	  <a href="<?php echo base_url().'index.php/anggota'; ?>" class="w3-bar-item w3-button">Anggota</a>
	  <a href="<?php echo base_url().'index.php/buku'; ?>" class="w3-bar-item w3-button">Buku</a>
	  <a href="<?php echo base_url().'index.php/pinjaman'; ?>" class="w3-bar-item w3-button">Pinjaman</a>
	  <a href="<?php echo base_url().'index.php/logout'; ?>" class="w3-bar-item w3-button">Logout</a>
	</div>
	<div style="margin-left:15%">
	<center>