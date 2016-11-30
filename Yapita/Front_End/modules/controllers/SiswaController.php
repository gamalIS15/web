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
}
?>
