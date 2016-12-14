<?php


use \modules\controllers\MainController;

class AlumniController extends MainController {

    public function index() {

        $this->model('siswa');

        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'status' => "Alumni"
            )
        );

        $this->template('siswa', array('siswa' => $data, 'title' => 'Alumni'));
    }
}
?>