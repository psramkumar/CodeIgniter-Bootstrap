<?php
/**
 * Created by JetBrains PhpStorm.
 * User: psramkumar
 * Date: 9/26/13
 * Time: 10:24 PM
 * To change this template use File | Settings | File Templates.
 */

class Aboutus extends Main_Controller {

    public function index(){

        $this->writePageHeader("Articles","Descripx","keyx","Authorsx");
        $this->writePageMenu();

        // Load the model as you normally would
        //$this->load->model('article_model');

        // $all_records = $this->article_model->get(33)->result();
        $this->load->view('aboutusView');
        $this->writePageFooter();
    }

}