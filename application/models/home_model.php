<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class home_model extends CI_Model
    {

        public function Agregar($Contenido){

            $this->db->insert('contenttext', $Contenido);
           
        }

        /**function update($id, $nombre, $Texto){
            $this->db->where('id', $id);
            $this->db->set('nombre', $nombre, 'texto', $Texto);
            return $this->db->update('contenttex');
        }*/
        public function getAll(){

            $sql = "SELECT * FROM `user_admin`";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function ReadAll()
        {
            $this->db->Select('nombre, Texto');
            $this->db->from('contenttext');
            return $this->db->get()->result();
        }

        public function texto1()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=1";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto2()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=2";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto3()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=3";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto4()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=6";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto5()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=7";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto6()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=8";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto7()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=9";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto8()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=10";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto9()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=11";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function texto10()
        {
            $sql= "SELECT nombre, Texto FROM contenttext WHERE id=12";
            $query = $this->db->query($sql);
            return $query->result();
        }
        
    }
