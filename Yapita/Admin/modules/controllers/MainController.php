<?php
namespace modules\controllers;
use modules\controllers;

class MainController extends Controller{
    
    protected function template($viewName, $data = array()){
        $this->model('artikel');
        $artikel = $this->artikel->get(
          array(
              'limit' => '0,5'
          )      
        );
        
        $this->model('kategori');
        $kategori = $this->kategori->get(
          array(
              'limit' => '0,5'
          )        
        );
         $view = $this->view('template');
         $view->bind('viewName', $viewName);
         $view->bind('data', array_merge($data, array('main_artikel' => $artikel,
             'main_kategori' => $kategori )));
    }
}

?>

