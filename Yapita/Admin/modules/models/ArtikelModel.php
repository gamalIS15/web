<?php
    class ArtikelModel extends Model{
    protected $tableName = "artikel";
        public function getPrev($id){
            $sql = "select * from ". $this->tableName ." where id_artikel < ". $id . " order by id_artikel desc limit 1";
            $this->db->query($sql);
            return $this->db->execute()->toObject();
        }
        
        public function getNext($id){
            $sql = "select * from ". $this->tableName ." where id_artikel < ". $id . " order by id_artikel asc limit 1";
            $this->db->query($sql);
            return $this->db->execute()->toObject();
        }
    }
?>
