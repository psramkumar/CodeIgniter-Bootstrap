<?php  if (!defined('BASEPATH')) die();
/**
 * Created by JetBrains PhpStorm.
 * User: psramkumar
 * Date: 9/7/13
 * Time: 10:10 PM
 * To change this template use File | Settings | File Templates.
 */

class Article_model extends MY_Model {

    var $CREATE_TABLE = "CREATE TABLE ";

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct() {
        parent::__construct();

    }


    public $table = 'articles';
    public $primary_key = 'articles.id';

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}

/* End of file article_model.php */
/* Location: ./application/models/article_model.php */