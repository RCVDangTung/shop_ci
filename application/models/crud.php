<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud extends CI_Model {

    /**
     * @var string
     */
    protected $table;

    /**
     * @var string
     */
    protected $cols;

    /**
     * @var string
     */
    protected $created;

    /**
     * @var string
     */
    protected $db_key;

    public function __construct($table = '') {
        parent::__construct();
//        $this->load->library('database');
//        $this->load->database();
        $this->config->load('crud');
        var_dump($table);
//        $this->table = $table;
        
//        $this->cols         = $this->db->list_fields($this->table);
//        
//        var_dump($this->cols);
//        die;
//        $this->created = $this->config->item('crud_db_created');
//        $this->db_key = $this->config->item('crud_db_key');
//        $this->db_encrypt = $this->config->item('crud_db_encrypted');
//
//        unset($this->cols[$this->created]);
    }

    /**
     * set the table for our CRUD model
     * @param  string $table
     * @return [type]
     */
    public function table($table) {
        $this->table = $table;
        return $this;
    }

}

?>