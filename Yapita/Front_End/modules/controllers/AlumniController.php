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

        $this->template('alumni', array('alumni' => $data));
    }

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : "0";

        $this->model('siswa');

        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'status'    => "Alumni",
                'id_siswa'  => $id
            )
        );

        $this->template('detailsiswa', array('siswa' => $data));

    }

}
?>