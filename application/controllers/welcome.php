<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
        

         //controller function for render a view 
        
        public function display($pagename) {
            
            return $this->load->view($pagename);
            
        }
        
        
        /**a testing page controller function*/
        public function testingpage() {
           /** insert the page name to test on
            * @param :pagename (eg $pagename= foldername/page-name)
            */
            $this->display($pagename="welcome_message");
        }
       
        
}
