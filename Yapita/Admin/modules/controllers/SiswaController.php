<?php
use \modules\controllers\MainController;
class SiswaController extends MainController {
    
    public function index() {
        
        $this->model('siswa');
        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'status' => "Siswa"
            )
        );
        $this->template('siswa', array('siswa' => $data,
            'title' => 'Siswa'));
    }
    
    public function delete() {
        
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        $this->model('siswa');
        $data = $this->siswa->getWhere(array(
            'id_siswa' => $id
        ));
        
        $delete = $this->siswa->delete(array('id_siswa' => $id));
        
        if($delete && $data[0]->images) {
            unlink('../public/images/siswa/' . $data[0]->images);
            $this->back();
        }
    }
}
?>
