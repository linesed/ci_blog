<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * �������������������ĸ�����д�����еĿ���������̳���CI_Controller��
 */
class Calculate extends CI_Controller {
        // ���췽��
        function __construct() {
                parent::__construct();
        }
        
        // Ĭ�Ϸ���
        function index() {
                // ����calculate_view��ͼ
                $this->load->view('calculate_view');
        }
}

/* End of file calculate.php */
/* Location: ./application/controllers/calculate.php */