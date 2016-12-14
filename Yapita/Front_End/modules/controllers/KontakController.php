<?php


use \modules\controllers\MainController;

class KontakController extends MainController {

    public function index() {

        $error      = array();
        $success    = null;

        $this->model('kontak');

        if($_SERVER["REQUEST_METHOD"] == 'POST') {

            $name       = isset($_POST["name"])     ? $this->validate($_POST["name"])    : "";
            $email      = isset($_POST["email"])    ? $this->validate($_POST["email"])   : "";
            $website    = isset($_POST["website"])  ? $this->validate($_POST["website"]) : "";
            $comment    = isset($_POST["comment"])  ? $this->validate($_POST["comment"]) : "";

            if(empty($name) || $name == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                array_push($error, "Format e-mail salah.");
            }
            if(empty($comment) || $comment == "") {

                array_push($error, "Komentar harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->kontak->insert(
                    array(
                        'nama_lengkap'  => $name,
                        'email'         => $email,
                        'website'       => $website,
                        'isi'           => $comment
                    )
                );

                $success = "Data Berhasil di simpan";
            }
        }

        $this->template('kontak', array('error' => $error, 'success' => $success));
    }
}
?>