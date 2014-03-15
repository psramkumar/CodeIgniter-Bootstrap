<?php
/**
 * Created by JetBrains PhpStorm.
 * User: psramkumar
 * Date: 9/8/13
 * Time: 5:26 PM
 * To change this template use File | Settings | File Templates.
 */

class Upload  extends Main_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->writePageHeader("Dynamicx","Descripx","keyx","Authorsx");
        $this->writePageMenu();
        $this->load->view('fileUpload', array('error' => ' ' ));
        $this->load->view('include/footer');
    }

    function do_upload()
    {

        $this->writePageHeader("Dynamicx","Descripx","keyx","Authorsx");
        $this->writePageMenu();

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('fileUpload', $error);

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
        $this->load->view('include/footer');
    }
}
