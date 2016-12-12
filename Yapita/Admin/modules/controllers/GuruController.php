<?php
use \modules\controllers\MainController;

class GuruController extends MainController {
   public function index() {

        $this->model('guru');

        $data = $this->guru->get();

        $this->template('guru', array('guru' => $data, 'title' => 'Guru'));
    }

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $this->model('guru');

        $data = $this->guru->getWhere(
            array(
                'id_guru'  => $id
            )
        );

        $this->template('detailGuru', array('guru' => $data[0]));

    }
}
?>
