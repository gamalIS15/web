<?php
use \modules\controllers\MainController;

class GuruController extends MainController {
   public function index() {

        $this->model('guru');

        $data = $this->guru->get();

        $this->template('guru', array('guru' => $data, 'title' => 'Guru'));
    }

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $this->model('guru');

        $data = $this->guru->getWhere(
            array(
                'id_guru'  => $id
            )
        );

        $this->template('detailGuru', array('guru' => $data[0]));

    }
   
   public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('guru');

        $data = $this->guru->getWhere(array(
            'id_guru'  => $id
        ));

        $delete = $this->guru->delete(array('id_guru' => $id));


        if($delete && $data[0]->images) {
            unlink('../public/images/guru/' . $data[0]->images);
          $this->back();
        }

    }
   
   public function insert() {

        $this->model('guru');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $nip            = isset($_POST["nip"])            ? $_POST["nip"]            : "";
            $nama           = isset($_POST["nama_lengkap"])   ? $_POST["nama_lengkap"]   : "";
            $jenisKelamin   = isset($_POST["jenis_kelamin"])  ? $_POST["jenis_kelamin"]  : "";
            $golongan       = isset($_POST["golongan"])       ? $_POST["golongan"]       : "";
            $noHP           = isset($_POST["no_hp"])          ? $_POST["no_hp"]          : "";
            $tempatLahir    = isset($_POST["tempat_lahir"])   ? $_POST["tempat_lahir"]   : "";
            $tanggalLahir   = isset($_POST["tanggal_lahir"])  ? $_POST["tanggal_lahir"]  : "";
            $mataPelajaran  = isset($_POST["mata_pelajaran"]) ? $_POST["mata_pelajaran"] : "";
            $alamat         = isset($_POST["alamat"])         ? $_POST["alamat"]         : "";
            $status         = isset($_POST["status"])         ? $_POST["status"]         : "";
            $foto           = isset($_FILES["images"])        ? $_FILES["images"]        : "";


            if(empty($nip) || $nip == "") {

                array_push($error, "NIS harus di isi.");
            }
            if(empty($nama) || $nama == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(empty($golongan) || $golongan == "") {

                array_push($error, "Golongan harus di isi.");
            }
            if(empty($tempatLahir) || $tempatLahir == "") {

                array_push($error, "Tempat lahir harus di isi.");
            }
            if(empty($tanggalLahir) || $tanggalLahir == "") {

                array_push($error, "Tanggal lahir harus di isi.");
            }
            if(empty($mataPelajaran) || $mataPelajaran == "") {

                array_push($error, "Mata pelajaran harus di isi.");
            }

            if(!empty($foto["name"]) && $foto["type"] != 'image/jpg' && $foto["type"] != 'image/jpeg' && $foto["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }

            if(count($error) == 0) {

                $imageName = $foto["name"];

                if($foto["name"]) {

                    $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nama) . '.jpg';

                    move_uploaded_file($foto["tmp_name"], '../public/images/guru/' . $imageName);
                }

                $insert = $this->guru->insert(

                    array(
                        'nip'               => $nip,
                        'nama_lengkap'      => $nama,
                        'jenis_kelamin'     => $jenisKelamin,
                        'golongan'          => $golongan,
                        'no_hp'             => $noHP,
                        'tempat_lahir'      => $tempatLahir,
                        'tanggal_lahir'     => date("Y-m-d", strtotime($tanggalLahir)),
                        'mata_pelajaran'    => $mataPelajaran,
                        'alamat'            => $alamat,
                        'status'            => $status,
                        'images'            => $imageName
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }


        }

        $this->template('frmGuru', array('error' => $error, 'success' => $success, 'title' => 'Tambah Guru'));

    }
   
   

}
?>
