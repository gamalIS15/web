<?php


use \modules\controllers\MainController;

class KontakController extends MainController {

    public function index() {

        $this->model('kontak');

        $data = $this->kontak->get();

        $this->template('kontak', array('kontak' => $data));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('kontak');

        $delete = $this->kontak->delete(array('id_kontak' => $id));

        if($delete) {
            $this->back();
        }

    }

}
?>