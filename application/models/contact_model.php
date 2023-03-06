<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class contact_model extends CI_Model
{

    public function insert_contact($post)
    {
        $nombre = $post['nombre'];
        $empresa = $post['empresa'];
        $tel = $post['tel'];
        $mail = $post['mail'];
        $comen = $post['comen'];

        $sql = "INSERT INTO user_contact(Nombre, Empresa, Telefono, correo, mensaje) VALUES ('$nombre', '$empresa', $tel, '$mail', '$comen');";
        return $this->db->query($sql);
    }
    
}
