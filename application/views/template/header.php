<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.:Daftar Barang:.</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>
	<div class="container">
		<div class="panel-container">
			<div class="logo">
					<div class="panel-logo">
						<div>
							<img src="<?php echo base_url();?>img/person.png" width="100" height="100"/>
							<h1>CV PROPERTY</h1>
						</div>
					</div>
			</div>
			<div class="header">
				<nav class="panel-menu">
					<div class="menu ft-left">
						<a href="<?=base_url().'index.php/Ctrl_app/home'?>"><span>Home</span></a>
					</div>
					<div class="menu ft-left">
						<a href="<?=base_url().'index.php/Ctrl_app/tambah'?>"><span>Input Barang</span></a>
					</div>
					<div class="menu ft-left">
						<a href="<?=base_url().'index.php/Ctrl_app/daftar'?>"><span>Daftar Barang</span></a>
					</div>
					<!-- <div class="menu ft-left dropdown">
						<a href="<?=base_url().'index.php/Ctrl_app/daftar'?>"><span>Drop Down</span></a>
						<ul>
							<li><a href="#"><span>Menu 1</span></a></li>
							<li><a href="#"><span>Menu 2</span></a></li>
							<li><a href="#"><span>Menu 3</span></a></li>
						</ul>
					</div> -->
					<div class="menu ft-right">
						<a href="<?=base_url().'index.php/Ctrl_app/log_out'?>"><span>Log Out</span></a>
					</div>
				</nav>
			</div>