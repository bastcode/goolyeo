<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Page extends MY_Controller 
{

	//생성자 구성
	public function __construct()	
	{
		parent::__construct();		
		$this->load->helper("url");
		
	}	
	public function _remap($method)
	{		
		$this->segs = $this->uri->segment_array();
		// $location = $this->session->userdata('location'); //세션을 검색해서 넣음
		// if(!$location) $location = "kr"; //없으면 kr 기준으로 불러온다
		
		if(!$method || $method == 'index') $method = 'index.php';
		$filepath = APPPATH."views/html/".$method;


		//호스팅 처리
		if($method == 'hosting'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'server'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'member'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'pop'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'domain'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'cloud'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'solution'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'security'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'agreement'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'customer'){
			$method .= '/'.$this->segs[3] ?? null;
		}else if($method == 'mypage'){
			$method .= '/'.$this->segs[3] ?? null;
		}



		//var_dump(strpos($method, 'nts'));
		if(file_exists($filepath)){
			$main_data = array();			
			if( !strpos($method, 'nts')   ){
				$this->_header(); //내부함수 해더 호출
			}
			$this->load->view("/html/$method",$main_data);
			if( !strpos($method, 'nts')  ){
				$this->_footer(); //내부함수 푸터 호출
			}
		}else{
			echo "404 ERROR";
		}
	}
	
	//컨트롤러 시작시에 무조건 참고 한다. 생성자 호출 이후 호출됨	
	
	public function index()
	{
		echo "?";
	}

	public function hosting()
	{
		echo $filepath = APPPATH."views/html/".$method;		
	}

	private function _header()
	{

		$this->load->view('common/head');
	}
	private function _footer()
	{
		$this->load->view('common/foot');
	}

	
}