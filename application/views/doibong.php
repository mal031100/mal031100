<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đội bóng</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

	<h3 align="center">Danh sách các đội bóng</h3>
	<p align="center"><u><a href="addCauthu">Thêm mới</a></u>
	<u><a href="trangchu">Return</a></u>
	</p>
	<div class="container">
		<table align="center" >
			<tr>
				<th> STT </th>
				<th> Tên Đội bóng </th>
				<th> Ma doi bong </th>
				<th> Sửa </th>
				<th> Xóa </th>
			</tr>
			<?php $STT = 1 ?>
			<?php foreach ($info as $value): ?>
				<tr>
				<td><?= $STT++ ?></td>
				<td><?= $value['tencauthu'] ?></td>
				<td><?= $value['madoi'] ?></td>
				<td><a href="suaCauthu/<?= $value['id'] ?>">Sửa</a></td>
				<td><a href="deleteCauthu/<?= $value['id'] ?>">Xóa</a></td>
				<!-- <td class="delete">Xóa</td> -->
			</tr>
			<?php endforeach ?>
		</table>
	</div>
	<!-- <script>
		$(document).ready(function() {
			$('.delete').click(function() {
				if (confirm('Bạn chắc chắn muốn xóa người này')) {
					window.location.href = "<?= base_url() ?>login/deleteCauthu/<?= $value['id'] ?>";
				}
			});
		});
	</script> -->
</body>
</html>