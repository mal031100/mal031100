<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<style>
		tr, th, td {
			border: 0px solid black;
			padding: 10px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="img/4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
</head>
<body >
	<table>
		<tr>
			<td><h6>Xin chào <span style="color: red"><?= $this->session->userdata('member1') ?></span></h6></td>
			<td><h6><u><a href="logout"> Đăng xuất</a></u></h6></td>
		</tr>
	</table>
	<!-- Giao diện trang -->
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
			</div>
		</div>
	</div>
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
				  <br>
				  <h1 align="center" style="color: red">TIN TỨC MỚI</h1><br>
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<div class="col-sm-9">
					<h1>Công bố danh sách 29 cầu thủ Đội tuyển Việt Nam thi đấu Vòng loại World Cup tại UAE</h1>
					
					<ul type="square">
						<a href=""><li>HAGL bất ngờ chia tay cầu thủ xuất sắc cùng lứa Công Phượng</li></a>
						<a href=""><li>Tuấn Anh báo tin vui cho người hâm mộ Việt Nam</li></a>
						<a href=""><li>Đỗ Hùng Dũng: 'Con đường trở lại ĐTQG của tôi rất dài !'</li></a>
					</ul>
					<hr>
					<div class="col-sm-12">- Sáng 25/5, HLV trưởng Park Hang Seo đã chính thức công bố danh sách 29 cầu thủ Đội tuyển Việt Nam sẽ tham gia thi đấu ba trận còn lại trong khuôn khổ bảng G, vòng loại thứ hai World Cup 2022 khu vực châu Á.</div>

					<br>
					<img src="https://images.baodantoc.vn/uploads/2021/Th%C3%A1ng%205/Ng%C3%A0y_25/DTVN_2021-1621919487403.jpg" alt="">
					<h6 align="center">Thầy Park đã có quyết định về đội hình tham dự World Cup 2022</h6>
					</div>
					<br>
					<div class="col-sm-9">- Trong tổng số 29 cầu thủ được HLV Park Hang Seo lựa chọn, có 27 cầu thủ nằm trong lực lượng 37 cầu thủ đang tập huấn tại Trung tâm Đào tạo bóng đá trẻ Việt Nam. Hai cầu thủ còn lại là tiền vệ trẻ Nguyễn Hai Long từ Đội tuyển U22 Việt Nam và thủ môn Đặng Văn Lâm, đang thi đấu cho CLB Cezero Osaka (Nhật Bản) và chỉ có thể hội quân cùng đội tuyển trong thời gian FIFA days (Lịch thi đấu các trận quốc tế của FIFA, giai đoạn các CLB có nghĩa vụ phải trả cầu thủ về thi đấu cho các đội tuyển quốc gia).</div>
					<br>
					<div class="col-sm-9">- Giai đoạn FIFA days sắp tới sẽ bắt đầu vào ngày 31/5, nên về nguyên tắc, đây sẽ thời điểm thủ môn Đặng Văn Lâm có mặt tại Đội tuyển Việt Nam. Tuy nhiên, theo đề nghị từ Liên đoàn Bóng đá (LĐBĐ) Việt Nam, CLB Cezero Osaka đã đồng ý hỗ trợ và tạo điều kiện để Đặng Văn Lâm có thể gia nhập Đội tuyển sớm hơn. Theo đó, thủ thành này sẽ di chuyển từ Nhật Bản sang UAE vào ngày 27/5, trùng với thời gian Đội tuyển Việt Nam đặt chân tới UAE.</div>
					<br>
					<div class="col-sm-9">- Chiều mai, 26/5, ĐT Việt Nam sẽ lên đường sang UAE trên chuyến chuyên cơ của hãng hàng không Bamboo Airways - Nhà tài trợ vận chuyển các Đội tuyển quốc gia Việt Nam. Chuyến bay cất cánh lúc 16 giờ 10 tại sân bay Nội Bài (Hà Nội) và dự kiến sẽ tới Dubai (UAE) vào 19 giờ 40 giờ địa phương (22 giờ 40 phút theo giờ Việt Nam).</div>
					<br>
					<div class="col-sm-9">- Do Đội tuyển Việt Nam đến sớm hơn 7 ngày so lịch hoạt động chính thức của LĐBĐ châu Á, nên thầy trò HLV Park Hang Seo sẽ đóng quân tại một khách sạn tiêu chuẩn 5 sao, do Liên đoàn Bóng đá Việt Nam bố trí. Đội cũng sẽ bước vào tập luyện theo kế hoạch riêng đã được bộ phận tiền trạm của Liên đoàn Bóng đá Việt Nam làm việc và thống nhất với Liên đoàn Bóng đá UAE, căn cứ từ đề xuất của HLV trưởng. Đến ngày 3/6, Đội tuyển sẽ chuyển sang khách sạn do Liên đoàn Bóng đá châu Á sắp xếp cho các đội tuyển tham dự các trận đấu Vòng loại thứ hai World Cup 2022 khu vực châu Á tại UAE.</div>
					<br>
					<div class="col-sm-9">- Cũng do ảnh hưởng của dịch Covid-19, Liên đoàn Bóng đá châu Á đã điều chỉnh quy định về đăng ký danh sách cầu thủ. Theo đó, các đội tuyển sẽ chốt danh sách 23 cầu thủ từ danh sách đăng ký ban đầu với thời hạn cuối là 90 phút trước mỗi trận đấu. Như vậy, toàn bộ 29 cầu thủ Đội tuyển Việt Nam có mặt tại UAE đều có cơ hội ra sân tùy thuộc vào chiến thuật về sử dụng nhân sự của Ban Huấn luyện cho từng trận đấu.</div>
					<br>
					<div class="col-sm-9">- 10 cầu thủ không nằm trong danh sách ĐT Việt Nam sang UAE thi đấu Vòng loại World Cup 2022 gồm: Tiền đạo Nguyễn Anh Đức, hậu vệ Trần Văn Kiên, tiền vệ Tô Văn Vũ, tiền vệ Phan Văn Long, tiền vệ Đỗ Thanh Thịnh, hậu vệ Nguyễn Minh Tùng, thủ môn Nguyễn Văn Hoàng, hậu vệ Phạm Xuân Mạnh, tiền vệ Cao Văn Triền và thủ môn Phạm Văn Phong.</div >
					<br>
					<h5 class="col-sm-9">Danh sách 29 cầu thủ ĐT Việt Nam thi đấu vòng loại World Cup 2022 tại UAE.</h5>

						<img class="col-sm-9" src="https://images.baodantoc.vn/uploads/2021/Th%C3%A1ng%205/Ng%C3%A0y_25/danh_sach_dt_u22_Sheet1-1621919436083.jpg" alt="">
	
				</div>
				
			</div>
		</div>
	</div>	
</html>