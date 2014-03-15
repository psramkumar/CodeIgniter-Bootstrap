<?php
class Main_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function writePageHeader($title, $desc, $keywords, $author, $overcss = [])
    {
        $template['title'] = $title;
        $template['description'] = $desc;
        $template['keywords'] = $keywords;
        $template['author'] = $author;
        $template['overcss'] = $overcss;

        $this->load->view('include/header', $template);
    }

    function writePageFooter($data=[]){
        $this->load->view('include/footer', $data);
    }

    function writePageMenu($var = []){
        $main = [];
        $extras = [];
        $inx = 0;
        $iny = 0;
        if (!empty($var)) {

            if (!empty($var['main'])) {
                foreach ($var['main'] as $m):
                    $main[$inx++] = $m;
                endforeach;
            }

            if (!empty($var['extras'])) {
                foreach ($var['extras'] as $x):
                    $extras[$iny++] = $x;
                endforeach;
            }
        }
        //DEFAULT MENU
        $main[$inx++] = $this->populateMenu(0, 'Home', 'glyphicon-home', site_url());
        $main[$inx++] = $this->populateMenu(1, 'About Us', 'glyphicon-check', site_url('Aboutus'), "Aboutus");
        $main[$inx++] = $this->populateMenu(2, 'Gallery', 'glyphicon-picture', site_url('Gallery'), "Gallery");
        $main[$inx++] = $this->populateMenu(3, 'Testimonials', 'glyphicon-certificate', site_url('Testimonial'), "Testimonial");
        $main[$inx++] = $this->populateMenu(4, 'Contact Us', 'glyphicon-envelope', site_url('Contact'), "Contact");

        $extras[$iny++] = $this->populateMenu(5, 'Calendar', 'glyphicon-calendar', site_url('Calendar'), "Calendar");

        $data['main'] =  $main;
        $data['extras'] =  $extras;

        $this->load->view('templates/menubar', $data);
    }

    private function populateMenu($id, $name, $icon, $url, $page=""){
        $menu['id'] = $id;
        $menu['name'] = $name;
        $menu['icon'] = $icon;
        $menu['url'] = $url;
        $menu['active'] = is_active($page) ? 'active' : 'not';
        return $menu;
    }
}
