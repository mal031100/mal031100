<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function dangnhap()
	{
		$this->load->view('login_view');
		// lấy dữ liệu từ trang đăng nhập về
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		if ($Username == ""||$Password == "") {
			echo '<script type="text/javascript">';
			echo 'alert("Bạn không thể để trống Tài Khoản và Mật Khẩu")';
			echo '</script>';
		}
		 else {
		$this->load->model('login_model');
		$dem = $this->login_model->getMember($Username, $Password);
		if ($dem == '1') {
			
			//Tạo session cho người dùng ngay khi đăng nhập
			$this->session->set_userdata('member1', $Username);
			redirect('login/trangchu','refresh');
			
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Sai tài khoản hoặc mật khẩu")';
			echo '</script>';
		}
		}
	}
	public function dangki()
	{
		// Lấy dữ liệu từ view
		$this->load->view('register_view');
		$Username = $this->input->post('Username');
		$Date = $this->input->post('Date');
		$Gender = $this->input->post('Gender');
		$Password = $this->input->post('Password');
		$Repassword = $this->input->post('Repassword');

		if ($Username && $Date && $Gender && $Password && $Repassword) {
			// gửi dữ liệu sang model
		$this->load->model('login_model');
		$this->login_model->addMember($Username, $Date, $Gender, $Password, $Repassword);
		}
		
	}
	public function trangchu()
	{
		//Trang đăng nhập mới xem được
		//Kiểm tra xem session có tồn tại k mới chuyển trang
		if($this->session->userdata('member1')){
			$this->load->view('trangchu');
		}else {
			redirect('login/dangnhap','refresh');
		}
		
		// XUất hiện tên người dùng

	}
	public function logout()
	{
		//Trang logout
		//Kiểm tra sự tồn tại của session đồng thời chuyển trang
		if ($this->session->userdata('member1')){
			//Hủy session
			$this->session->unset_userdata('member1');
			// chuyển trang ngay sau đó
			redirect('login/dangnhap','refresh');
		}
	}

	//-----Quản lí đội bóng-----

	public function doibong()
	{
		//Trang quản lí đội bóng
		//Lấy dữ liệu từ model
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getCauthu()->result_array();

		$this->load->view('doibong', $result);
	}
	public function addCauthu()
	{
		//Trang thêm cầu thủ
		$this->load->view('themmoi');

		$tencauthu = $this->input->post('tencauthu');
		$madoi = $this->input->post('madoi');

		if ($tencauthu && $madoi) {
			// gửi dữ liệu sang model
		$this->load->model('login_model');
		$this->login_model->themCauthu($tencauthu, $madoi );
		redirect('login/doibong','refresh');
		}
	}
	public function deleteCauthu($id)
	{
		$this->load->model('login_model');
		$this->login_model->deleteCauthu($id);
	}
	public function suaCauthu($id)
	{
		//Lấy dữ liệu theo id
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getIDCauthu($id)->result_array();

		$this->load->view('editCauthu', $result);
	}
	public function updateCauthu()
	{
		$id = $this->input->post('id');
		$tencauthu = $this->input->post('tencauthu');
		$madoi = $this->input->post('madoi');

		if ($tencauthu && $madoi) {
			$this->load->model('login_model');
			$this->login_model->updateCauthu($id, $tencauthu, $madoi);
			redirect('login/doibong','refresh');
		}
	}

	//-----Quản lí trọng tài------
	public function trongtai()
	{
		//Trang quản lí trọng tài
		//Lấy dữ liệu từ model
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getTrongtai()->result_array();

		$this->load->view('trongtai', $result);
	}
	public function addTrongtai()
	{
		//Trang thêm Trọng tài
		$this->load->view('themTrongtai');

		$tentrongtai = $this->input->post('tentrongtai');

		if ($tentrongtai) {
			// gửi dữ liệu sang model
		$this->load->model('login_model');
		$this->login_model->themTrongtai($tentrongtai);
		redirect('login/trongtai','refresh');
		}
	}
	public function deleteTrongtai($id)
	{
		$this->load->model('login_model');
		$this->login_model->deleteTrongtai($id);
	}
	public function suaTrongtai($id)
	{
		//Lấy dữ liệu theo id
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getIDTrongtai($id)->result_array();

		$this->load->view('editTrongtai', $result);
	}
	public function updateTrongtai()
	{
		$id = $this->input->post('id');
		$tentrongtai = $this->input->post('tentrongtai');

		if ($tentrongtai) {
			$this->load->model('login_model');
			$this->login_model->updateTrongtai($id, $tentrongtai);
			redirect('login/trongtai','refresh');
		}
	}

	//-----Quản lí lịch thi đấu------
	public function lichthidau()
	{
		//Trang quản lí lịch thi đấu
		//Lấy dữ liệu từ model
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getLichthidau()->result_array();

		$this->load->view('lichthidau', $result);
	}
	public function addLichthidau()
	{
		//Trang thêm lịch thi đấu
		$this->load->view('themLichthidau');

		$doiA = $this->input->post('doiA');
		$ngaythidau = $this->input->post('ngaythidau');
		$doiB = $this->input->post('doiB');

		if ($doiA && $ngaythidau && $doiB) {
			// gửi dữ liệu sang model
		$this->load->model('login_model');
		$this->login_model->themLichthidau($doiA, $ngaythidau, $doiB);
		redirect('login/lichthidau','refresh');
		}
	}
	public function deleteLichthidau($id)
	{
		$this->load->model('login_model');
		$this->login_model->deleteLichthidau($id);
	}
	public function suaLichthidau($id)
	{
		//Lấy dữ liệu theo id
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getIDLichthidau($id)->result_array();

		$this->load->view('editLichthidau', $result);
	}
	public function updateLichthidau()
	{
		$id = $this->input->post('id');
		$doiA = $this->input->post('doiA');
		$ngaythidau = $this->input->post('ngaythidau');
		$doiB = $this->input->post('doiB');

		if ($doiA && $ngaythidau && $doiB) {
			$this->load->model('login_model');
			$this->login_model->updateLichthidau($id, $doiA, $ngaythidau, $doiB);
			redirect('login/lichthidau','refresh');
		}
	}


	//-----Quản lí Nhà tài trợ-----

	public function nhataitro()
	{
		//Trang quản lí nhà tài trợ
		//Lấy dữ liệu từ model
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getNhataitro()->result_array();

		$this->load->view('nhataitro', $result);
	}
	public function addNhataitro()
	{
		//Trang thêm Nhà tài trợ
		$this->load->view('themNhataitro');

		$tennhataitro = $this->input->post('tennhataitro');
		$thongtin = $this->input->post('thongtin');

		if ($tennhataitro && $thongtin) {
			// gửi dữ liệu sang model
		$this->load->model('login_model');
		$this->login_model->themNhataitro($tennhataitro, $thongtin );
		redirect('login/Nhataitro','refresh');
		}
	}
	public function deleteNhataitro($id)
	{
		$this->load->model('login_model');
		$this->login_model->deleteNhataitro($id);
	}
	public function suaNhataitro($id)
	{
		//Lấy dữ liệu theo id
		$this->load->model('login_model');
		$result['info'] = $this->login_model->getIDNhataitro($id)->result_array();

		$this->load->view('editNhataitro', $result);
	}
	public function updateNhataitro()
	{
		$id = $this->input->post('id');
		$tennhataitro = $this->input->post('tennhataitro');
		$thongtin = $this->input->post('thongtin');

		if ($tennhataitro && $thongtin) {
			$this->load->model('login_model');
			$this->login_model->updateNhataitro($id, $tennhataitro, $thongtin);
			redirect('login/nhataitro','refresh');
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */