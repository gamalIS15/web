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
        
        $this->template('siswa', array('siswa' => $data));
    }
    
    //untuk halaman detail siswa
    public function detail() {
        
        $id = isset($_GET["id"]) ? $_GET["id"] : "0";
        
        $this->model('siswa');
        
        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'id_siswa' => $id
        );
        
        $this->template('detailsiswa', array('siswa' => $data));
    }
}
?>
