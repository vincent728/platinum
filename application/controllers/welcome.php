<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
        

         //controller function for render a view 
        

        
        
        /**a testing page controller function*/
        public function testingpage($view) {
           /** insert the page name to test on
            * @param :pagename (eg $pagename= foldername/page-name)
            */
            $this->load->view('header');
            $this->load->view($view);
            $this->load->view('footer');

        }
       
        
}
