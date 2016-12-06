<?php
class SiswaModel extends Model {
    
    protected $tableName = "siswa";
    
    public function rows() {
        return $this->db->getAll($this->tableName)->numRows();
    }
}
?>
