<?php
class auto_model extends CI_Model{
    protected $tabla="autos";
    protected $pk="id";

    public function agregar($datos=array()){
        $this->db->insert($this->tabla,$datos);
        if ($this->db->affected_rows()){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function borrar($id=null){
        if(!is_null($id)){
            $this->db->where($this->pk,$id);
            $this->db->limit(1);
            $this->db->delete($this->tabla);
            if($this->db->affected_rows()){
                return true;
            }
        }
        return false;
    }

    public function editar($id=null, $datos=array()){
        $this->db->where($this->pk, $id);
        $this->db->update($this->tabla, $datos);
        return $this->db->affected_rows();
    }

    public function listar(){
        $rec = $this->db->get($this->tabla);
        return $rec->result_array();
    }
    public function listar_auto($id=null){
        $this->db->where($this->pk,$id);
        $this->db->limit(1);
        $rec = $this->db->get($this->tabla);
        return $rec->row_array();
    }
}

?> 