<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('admin.php',$output);	
	}
	
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	

        
        function menu_management() {
            $gcrud=new grocery_CRUD();
            $gcrud->set_table('menu');
            $data=$gcrud->render();
            $this->_example_output($data);
        }
	

	
}