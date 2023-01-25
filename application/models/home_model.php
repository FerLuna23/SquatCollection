<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Home_model extends CI_Model
    {
        public function getAll(){

            $sql = "SELECT * FROM `user_admin`";
            $query = $this->db->query($sql);
            return $query->result();
        }
    }
