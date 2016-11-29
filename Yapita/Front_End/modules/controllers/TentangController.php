<?php
use \modules\controllers\MainControllers;

class TentangController extends MainController {
    public function index() {
        $this->model('tentang');
        $data = $this->tentang->get();
        if(Count($data)){
            $data = $data[0];
        }
        $this->template('tentang', array('tentang' => $data));
    }
}
?>
