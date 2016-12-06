<?php
class KategoriModel extends Model{
    protected $tableName = "Kategori";
    public function get($params = "") {
        $data = array();
        $kategori = $this->db->getAll($this->tableName)->toObject();
        
              foreach($kategori as $val) {
                  $total = $this->db->getWhere('artikel', array('id_kategori' => $val->id_kategori))->numRows();
                  $val->total = $total;
                  
                  array_push($data, $val);
              }
              return $data;
        }
}
?>
