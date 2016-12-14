<?php


use \modules\controllers\MainController;

class PsbController extends MainController {

    public function index() {

        $this->model('psb');

        $data = $this->psb->get();

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $isi        = isset($_POST["isi"]) ? $_POST["isi"] : "";

            if(empty($isi) || $isi == "") {

                array_push($error, "Isikan psb disini.");
            }

            if(count($error) == 0) {

                $update = $this->psb->update(

                    array(
                        'psb'   => $isi
                    )
                );

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }



        }

          $this->template('psb', array('psb' => $data[0],'error' => $error, 'success' => $success));
    }
}
?>