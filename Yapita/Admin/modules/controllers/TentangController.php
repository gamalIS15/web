<?php


use \modules\controllers\MainController;

class TentangController extends MainController {

    public function index() {

        $this->model('tentang');

        $data = $this->tentang->get();

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $isi        = isset($_POST["isi"]) ? $_POST["isi"] : "";

            if(empty($isi) || $isi == "") {

                array_push($error, "Tentang sekolah harus di isi.");
            }

            if(count($error) == 0) {

                $update = $this->tentang->update(

                    array(
                        'tentang'   => $isi
                    )
                );

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }



        }

        $this->template('tentang', array('tentang' => $data[0],'error' => $error, 'success' => $success));
    }
}
?>