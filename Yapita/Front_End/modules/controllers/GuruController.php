<?php
use \modules\controllers\MainController;

class GuruController extends MainController {
   
   public function index() {
      $this->model('guru');
      
      $data = $this->guru->get();
      
      $this->template('guru', array('guru' => $data));
   }
}
?>
