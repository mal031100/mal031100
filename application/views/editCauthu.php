<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa thông tin đội bóng</title>
	<style>
		tr, th, td {
			border: 1px solid black;
			padding: 20px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<!-- <div class="container">
		<div class="row">
			<div class="col-sm-12"> -->
				<li class="navbar-brand">
                      <a href=""><img src="https://upload.wikimedia.org/wikipedia/vi/9/90/Logo_LS_V.League_2_-_2021.png" alt="" width="100" height="80"></a>
				      </li>
				      <a class="navbar-brand" href="trangchu">Trang chủ</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				<a class="navbar-brand" href="doibong">Đội bóng</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <a class="navbar-brand" href="lichthidau">Lịch thi đấu</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <a class="navbar-brand" href="trongtai">Trọng Tài</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <a class="navbar-brand" href="nhataitro">Nhà tài trợ</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  </nav>
	
		<div class="container my-md-5 text-center">
		<h2>Sửa thông tin đội bóng</h2>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<u><a href="<?= base_url()?>login/doibong">Return</a></u>
				<?php foreach ($info as $value): ?>
				<form action="<?= base_url()?>login/updateCauthu" method="post">
				<table >
					<tr>
						<td><input type="text" value="<?= $value['id'] ?>" name="id" class="form-control" hidden></td>
					</tr>
					<tr>
						<td>Tên Đội bóng:</td>
						<td><input type="text" placeholder="<?= $value['tencauthu'] ?>" name="tencauthu" class="form-control" required></td>
					</tr>
					<tr>
						<td>Số thành viên:</td>
						<td><input type="text" placeholder="<?= $value['madoi'] ?>" name="madoi" class="form-control" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Sửa" class="btn btn-outline-warning btn-block"></td>
					</tr>
				</table>
				</form>
				<?php endforeach ?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>	
</body>
</html>