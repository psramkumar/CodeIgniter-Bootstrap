<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index(){
       //Page Title, Page Description, SEO Keywords, Author Name
       $this->writePageHeader("J & R Custom Builders","Descripx","keyx","Authorsx");
       $this->writePageMenu();

       $images[0]['src'] = base_url('assets/img/antennae.jpg');
       $images[0]['cap'] = 'Sample Test Picture 1';
       $images[0]['act'] = 'active';
       $images[1]['src'] = base_url('assets/img/carina.jpg');
       $images[1]['cap'] = 'Sample Test Picture 1';
       $images[1]['act'] = '';
       $images[2]['src'] = base_url('assets/img/echo.jpg');
       $images[2]['cap'] = 'Sample Test Picture 1';
       $images[2]['act'] = '';
       $images[3]['src'] = 'http://wibiti.com/images/hpmain/472/275472.jpg';
       $images[3]['cap'] = 'Sample Test Picture 1';
       $images[3]['act'] = '';
       $data['images'] = $images;


       $this->load->view('frontpage', $data);
       $this->writePageFooter();
	}




}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
