<?php
/**
 * @Author  : David Naista<davidnaista83@gmail.com>
 * @Date    : 12/28/15 - 3:54 PM
 */

use \modules\controllers\MainController;

class ArtikelController extends MainController{

    public function index() {

        $this->model('artikel');

        $data = $this->artikel->get();

        $this->template('artikel', array('artikel' => $data));
    }

    // untuk menampilkan detail artikel

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : "0";

        $this->model('artikel');

        $artikel = $this->artikel->getWhere(array('id_artikel' => $id));

        $prev    = $this->artikel->getPrev($id);
        $next    = $this->artikel->getNext($id);

        $this->template('detailartikel', array('artikel' => $artikel, 'prev' => $prev, 'next' => $next));

    }

}
?>