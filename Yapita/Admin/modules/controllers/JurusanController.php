<?php


use \modules\controllers\MainController;

class JurusanController extends MainController {

    public function index() {

        $this->model('jurusan');

        $data = $this->jurusan->get();

        $this->template('jurusan', array('jurusan' => $data));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('jurusan');

        $delete = $this->jurusan->delete(array('id_jurusan' => $id));

        if($delete) {
            $this->back();
        }

    }

    public function insert() {

        $this->model('jurusan');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $jurusan      = isset($_POST["jurusan"]) ? $_POST["jurusan"] : "";

            if(empty($jurusan) || $jurusan == "") {

                array_push($error, "Jurusan artikel harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->jurusan->insert(

                    array(
                        'nama_jurusan'   => $jurusan
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $this->template('frmJurusan', array('error' => $error, 'success' => $success, 'title' => 'Tambah Jurusan'));

    }

    public function update() {

        $this->model('jurusan');

        $error      = array();
        $success    = null;


        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        $data = $this->jurusan->getWhere(array(

            'id_jurusan' => $id
        ));

        if(count($data) == 0) $this->redirect(PATH . '?page=jurusan');

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $jurusan      = isset($_POST["jurusan"]) ? $_POST["jurusan"] : "";

            if(empty($jurusan) || $jurusan == "") {

                array_push($error, "Jurusan artikel harus di isi.");
            }
            $updateArrayData = array(

                'nama_jurusan' => $jurusan
            );

            if(count($error) == 0) {

                $update = $this->jurusan->update($updateArrayData, array('id_jurusan' => $id));

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $this->template('frmJurusan', array('jurusan' => $data[0],'error' => $error, 'success' => $success, 'title' => 'Update Jurusan'));

    }
}