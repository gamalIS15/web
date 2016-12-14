<?php

use \modules\controllers\MainController;

class ArtikelController extends MainController {

    public function index() {

        $this->model('artikel');

        $data = $this->artikel->getJoin('kategori',
            array(
                'artikel.id_kategori' => 'kategori.id_kategori'
            ),
            'JOIN'
        );

        $this->template('artikel', array('artikel' => $data));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('artikel');

        $artikel = $this->artikel->getWhere(array(
            'id_artikel' => $id
        ));

        if(file_exists('../public/images/artikel/' . $artikel[0]->images)) {

            unlink('../public/images/artikel/' . $artikel[0]->images);
        }
        $delete = $this->artikel->delete(array('id_artikel' => $id));

        if($delete) {
            $this->back();
        }

    }

    public function insert() {

        $this->model("kategori");

        $data = $this->kategori->get();

        $this->model('artikel');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $judul      = isset($_POST["judul"])        ? $_POST["judul"] : "";
            $kategori   = isset($_POST["kategori"])     ? $_POST["kategori"] : "";
            $penulis    = isset($_POST["penulis"])      ? $_POST["penulis"] : "";
            $gambar     = isset($_FILES["images"])      ? $_FILES["images"] : "";
            $isi        = isset($_POST["isi"])          ? $_POST["isi"] : "";



            if(empty($judul) || $judul == "") {

                array_push($error, "Judul harus di isi.");
            }
            if(empty($kategori) || $kategori == "") {

                array_push($error, "Kategori harus di isi.");
            }
            if(empty($penulis) || $penulis == "") {

                array_push($error, "Penulis harus di isi.");
            }
            if(empty($isi) || $isi == "") {

                array_push($error, "Isi artikel harus di isi.");
            }
            if(!empty($gambar["name"]) && $gambar["type"] != 'image/jpg' && $gambar["type"] != 'image/jpeg' && $gambar["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }

            if(count($error) == 0) {

                $imageName = $gambar["name"];

                if($gambar["name"]) {

                    $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $judul) . '.jpg';

                    move_uploaded_file($gambar["tmp_name"], '../public/images/artikel/' . $imageName);
                }

                $insert = $this->artikel->insert(

                    array(
                        'id_kategori'   => $kategori,
                        'judul'         => $judul,
                        'penulis'       => $penulis,
                        'isi'           => $isi,
                        'tanggal'       => date('Y-m-d'),
                        'waktu'         => date('h:i:s'),
                        'images'        => $imageName
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }



        }

        $this->template('frmArtikel', array('kategori' => $data,'error' => $error, 'success' => $success, 'title' => 'Tambah Artikel'));

    }

    public function update() {

        $this->model("kategori");

        $data = $this->kategori->get();

        $this->model('artikel');


        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $artikel = $this->artikel->getWhere(array(
            'id_artikel' => $id
        ));

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $judul      = isset($_POST["judul"])        ? $_POST["judul"] : "";
            $kategori   = isset($_POST["kategori"])     ? $_POST["kategori"] : "";
            $penulis    = isset($_POST["penulis"])      ? $_POST["penulis"] : "";
            $gambar     = isset($_FILES["images"])      ? $_FILES["images"] : "";
            $isi        = isset($_POST["isi"])          ? $_POST["isi"] : "";


            if(empty($judul) || $judul == "") {

                array_push($error, "Judul harus di isi.");
            }
            if(empty($kategori) || $kategori == "") {

                array_push($error, "Kategori harus di isi.");
            }
            if(empty($penulis) || $penulis == "") {

                array_push($error, "Penulis harus di isi.");
            }
            if(empty($isi) || $isi == "") {

                array_push($error, "Isi artikel harus di isi.");
            }
            if(!empty($gambar["name"]) && $gambar["type"] != 'image/jpg' && $gambar["type"] != 'image/jpeg' && $gambar["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }

            if(count($error) == 0) {

                $imageName = $gambar["name"];

                $updateArrayData = array(
                    'id_kategori'   => $kategori,
                    'judul'         => $judul,
                    'penulis'       => $penulis,
                    'isi'           => $isi,
                    'tanggal'       => date('Y-m-d'),
                    'waktu'         => date('h:i:s')
                );

                if($gambar["name"]) {

                    $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $judul) . '.jpg';

                    $updateArrayData = array(
                        'id_kategori'   => $kategori,
                        'judul'         => $judul,
                        'penulis'       => $penulis,
                        'isi'           => $isi,
                        'tanggal'       => date('Y-m-d'),
                        'waktu'         => date('h:i:s'),
                        'images'        => $imageName
                    );

                    if(file_exists('../public/images/artikel/' . $artikel[0]->images)) {

                        unlink('../public/images/artikel/' . $artikel[0]->images);
                    }


                    move_uploaded_file($gambar["tmp_name"], '../public/images/artikel/' . $imageName);
                }

                $update = $this->artikel->update($updateArrayData, array('id_artikel' => $id));

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }



        }

        $this->template('frmArtikel', array('kategori' => $data, 'artikel' => $artikel[0], 'error' => $error, 'success' => $success, 'title' => 'Update Artikel'));

    }
}
?>