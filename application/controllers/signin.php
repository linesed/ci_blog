<?php

class Signin extends CI_Controller {
	
	
	
	public function index()
	{	$this->load->view("templates/header");
		$this->load->view('news/signin');
		$this->load->view('templates/footer');
	}
	
	function regist() {
		$this->load->library('encrypt'); //��ʼ��������
		
        $this->load->model('user_test'); //��������֮ǰ������User_testģ�ͣ�����ĸ���ô�С
		
		$pawd = $this->encrypt->encode($_POST['password']);  //��������м���
        
		$arr = array('uname'=>$_POST['username'],
					 'upawd'=>$pawd,
					 'phone'=>$_POST['phone'],
					 'email'=>$_POST['email'],
					 );
        $this->user_test->u_insert($arr); //����user_test��u_insert������������
		echo'
			<script language="javascript"> 
				alert("Regist success!");
				window.location.href="http://localhost/CI_blog/index.php/signin/"; 
			</script> ';
    }
	
	// ������ܲ���
	function pwdtest(){
		$this->load->library('encrypt');//�ڿ�����������ü�����
		
		/*���ܹ���*/
		//��һ�ַ���
		$a = 'My secret message';
		$aa = $this->encrypt->encode($a);
		echo $aa;
		echo "<br />";
		//�ڶ��ַ���
		$b = 'My secret message';
		$b1 = 'super-secret-key';
		$bb = $this->encrypt->encode($b, $b1);
		echo $bb;
		echo "<br />";
		/*���ܹ���*/
		//��һ�ַ���
		$c = $aa;
		$cc = $this->encrypt->decode($c);
		echo $cc;
		echo "<br />";
		//�ڶ��ַ���
		$d = $bb;
		$d2 = 'super-secret-key';
		$dd = $this->encrypt->decode($d, $d2);
		echo $dd;
	}

}