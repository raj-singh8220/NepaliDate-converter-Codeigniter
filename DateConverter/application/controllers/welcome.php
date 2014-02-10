<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	   if(isset($_POST['submit_ad'])){
	       $date = $_POST['english_date'];
           $exp = explode('-',$date);
           $year = $exp[0];
           $month = $exp[1];
           $day = $exp[2];
           
           $this->load->library("nepali_calendar");
           $array = $this->nepali_calendar->AD_to_BS($year,$month,$day);
           $this->data['result'] = $array;
	   }
        $this->data['app_name'] = "Date Converter";
		$this->load->view('welcome_message',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */