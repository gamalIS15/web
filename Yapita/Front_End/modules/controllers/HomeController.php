<?php
    use modules\controllers\MainController;
    class HomeController extends MainController{
        public function index(){
            $this->model('artikel');
            $data = $this->artikel->get(array(
                'limit' => '0,5'
            ));
            $this->template('home',array('artikel' => $data));
        }
    }
?>
