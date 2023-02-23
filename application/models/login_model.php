<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class login_model extends CI_Model
{
    public function auth_user($post)
    {
        $sql = "SELECT nombre, APaterno, AMaterno FROM user_admin WHERE Correo = '".$post['user']."' AND Contraseña = '".$post['pass']."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function recover_user($post)
    {
        $sql = "SELECT Correo, Contraseña FROM user_admin WHERE Correo = '".$post['user']."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
}
