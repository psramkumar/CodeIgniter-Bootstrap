<?php if (!defined('BASEPATH')) die();
/**
 * Created by JetBrains PhpStorm.
 * User: psramkumar
 * Date: 9/14/13
 * Time: 1:10 PM
 * To change this template use File | Settings | File Templates.
 */

class gallery  extends Main_Controller{
    public function index(){

        $min =  isProduction() ? '.min.' : '.';

        $overcss['css'][0]= base_url('assets/css/photobox.css');
        $overcss['css'][1]= base_url('assets/css/styles.css');

        $overcss['css9'][0]= base_url('assets/css/photobox.ie.css');

        $this->writePageHeader("J&R Gallery","Gallery","keyx","Reggie", $overcss);
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

        $this->load->view('galleryview', $data);
        $data["overjs"][1] =  base_url("assets/js/photobox.js");
        $data["overjs"][2] = base_url("assets/js/main.js");
        $data["overjsie9"][2] = "http://html5shim.googlecode.com/svn/trunk/html5.js";
        $this->writePageFooter($data);
    }


}

/* End of file gallerycontroller.php */
/* Location: ./application/controllers/gallerycontroller.php */
