<?php
use \modules\controllers\MainControllers;
class PsbController extends MainController {
    public function index() {
        $this->model('psb');
        $data = $this->psb->get();
        if(Count($data)){
            $data = $data[0];
        }
        $this->template('psb', array('psb' => $data));
    }
}
?>
