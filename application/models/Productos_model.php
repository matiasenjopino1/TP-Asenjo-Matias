<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Productos_model extends CI_Model {
    public function obtenerTodos() {
        $query = $this->db->get('productos');
        return $query->result();
    }

    public function obtenerPorId($id){
        $this->db->where('id',$id);
        $query = $this->db->get('productos');
        return $query->row();
    }
}