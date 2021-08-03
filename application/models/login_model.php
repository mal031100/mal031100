<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	//Đăng kí
	public function addMember($Username, $Date, $Gender, $Password, $Repassword)
	{
		// Kiem tra xem Username có tồn tại hay chưa
		$this->db->where('Username', $Username);
		$demUserexit = $this->db->get('register_tt12')->num_rows();

		//Kiếm tra điều kiên có trùng khớp không
		if ($Password != $Repassword) {
			echo '<script type="text/javascript">';
			echo 'alert("Mật khẩu không trùng khớp")';
			echo '</script>';
		} else if($demUserexit == '0') {
			$object = array('Username'=>$Username, 'Date'=>$Date, 'Gender'=>$Gender, 'Password'=>$Password, 'Repassword'=>$Repassword );
			$this->db->insert('register_tt12', $object);
		}else{
			echo '<script type="text/javascript">';
			echo 'alert("Tài khoản đã tồn tại")';
			echo '</script>';
		}

	}
	//Đăng nhập
	public function getMember($Username, $Password)
	{
		// lấy dữ liệu từ database và đưa về dạng mảng
		$this->db->where('Username', $Username);
		$this->db->where('Password', $Password);
		$dem = $this->db->get('register_tt12')->num_rows();
		return $dem;
	}

	//Đội bóng
	public function themCauthu($tencauthu, $madoi)
	{
		// Kiem tra xem Ten cau thu có tồn tại hay chưa
		$this->db->where('tencauthu', $tencauthu);
		$demCauthu = $this->db->get('cauthu')->num_rows();

		//Kiếm tra điều kiên có trùng khớp không
		if($demCauthu == '0') {
			$ob = array('tencauthu'=>$tencauthu, 'madoi'=>$madoi);
			$this->db->insert('cauthu', $ob);
		}else{
			echo 'Cầu thủ đã tồn tại'; 
		}
	}
	public function getCauthu()
	{
		$this->db->order_by('madoi', 'desc');
		return $this->db->get('cauthu');
	}
	public function deleteCauthu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('cauthu');
		redirect('login/doibong','refresh');
	}
	public function getIDCauthu($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('cauthu');
	}
	public function updateCauthu($id, $tencauthu, $madoi)
	{
		$this->db->where('id',$id);
		$object = array('tencauthu'=>$tencauthu, 'madoi'=>$madoi);
		$this->db->update('cauthu', $object);
		redirect('login/doibong','refresh');
	}
	

	//Trọng tài
	public function themTrongtai($tentrongtai)
	{
		// Kiem tra xem Ten cau thu có tồn tại hay chưa
		$this->db->where('tentrongtai', $tentrongtai);
		$demTrongtai = $this->db->get('trongtai')->num_rows();

		//Kiếm tra điều kiên có trùng khớp không
		if($demTrongtai == '0') {
			$ob = array('tentrongtai'=>$tentrongtai);
			$this->db->insert('trongtai', $ob);
		}else{
			echo 'Trọng tài đã tồn tại'; 
		}
	}
	public function getTrongtai()
	{
		$this->db->order_by('tentrongtai', 'desc');
		return $this->db->get('trongtai');
	}
	public function deleteTrongtai($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('trongtai');
		redirect('login/trongtai','refresh');
	}
	public function getIDTrongtai($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('trongtai');
	}
	public function updateTrongtai($id, $tentrongtai)
	{
		$this->db->where('id',$id);
		$object = array('tentrongtai'=>$tentrongtai);
		$this->db->update('trongtai', $object);
		redirect('login/trongtai','refresh');
	}

	//------Lịch thi đấu--------
	public function themLichthidau($doiA, $ngaythidau, $doiB)
	{
		// Kiem tra xem Ten cau thu có tồn tại hay chưa
		// $this->db->where('ngaythidau', $ngaythidau);
		// $demLich = $this->db->get('lichthidau')->num_rows();

		// //Kiếm tra điều kiên có trùng khớp không
		// if($demLich == '0') {
			$ob = array('doiA'=>$doiA, 'ngaythidau'=>$ngaythidau, 'doiB'=>$doiB );
			$this->db->insert('lichthidau', $ob);
		// }else{
		// 	echo 'Lịch đã tồn tại'; 
		// }
	}
	public function getLichthidau()
	{
		$this->db->order_by('ngaythidau', 'desc');
		return $this->db->get('lichthidau');
	}
	public function deleteLichthidau($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('lichthidau');
		redirect('login/lichthidau','refresh');
	}
	public function getIDLichthidau($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('lichthidau');
	}
	public function updateLichthidau($id, $doiA, $ngaythidau, $doiB)
	{
		$this->db->where('id',$id);
		$object = array('doiA'=>$doiA, 'ngaythidau'=>$ngaythidau, 'doiB'=>$doiB);
		$this->db->update('lichthidau', $object);
		redirect('login/lichthidau','refresh');
	}


	//Nhà Tài trợ
	public function themNhataitro($tennhataitro, $thongtin)
	{
		// Kiem tra xem Ten Nhà tài trợ có tồn tại hay chưa
		$this->db->where('tennhataitro', $tennhataitro);
		$demNhataitro = $this->db->get('nhataitro')->num_rows();

		//Kiếm tra điều kiên có trùng khớp không
		if($demNhataitro == '0') {
			$ob = array('tennhataitro'=>$tennhataitro, 'thongtin'=>$thongtin);
			$this->db->insert('nhataitro', $ob);
		}else{
			echo 'Nhà tài trợ đã tồn tại'; 
		}
	}
	public function getNhataitro()
	{
		$this->db->order_by('tennhataitro', 'desc');
		return $this->db->get('nhataitro');
	}
	public function deleteNhataitro($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('nhataitro');
		redirect('login/nhataitro','refresh');
	}
	public function getIDNhataitro($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('nhataitro');
	}
	public function updateNhataitro($id, $tennhataitro, $thongtin)
	{
		$this->db->where('id',$id);
		$object = array('tennhataitro'=>$tennhataitro, 'thongtin'=>$thongtin);
		$this->db->update('nhataitro', $object);
		redirect('login/nhataitro','refresh');
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */