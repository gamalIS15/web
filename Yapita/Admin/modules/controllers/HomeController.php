<?php
use modules\controllers\MainController;

class HomeController extends MainController{
    public function index(){
        $data = $_SESSION["login"];
        $this->model('bukutamu');
        $this->model('artikel');
        $this->model('guru');
        $this->model('kontak');
        $this->template('home', array('userData'=>$data,
            'total' =>array(
                'bukutamu' => $this->bukutamu->rows(),
                'artikel' => $this->artikel->rows(),
                'guru' => $this->guru->rows(),
                'kontak'=> $this->kontak->rows()
            )));
    }
}
?>
