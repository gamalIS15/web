<?php
use \modules\controllers\MainController;
class SiswaController extends MainController {
    
    public function index() {
        
        $this->model('siswa');
        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'status' => "Siswa"
            )
        );
        $this->template('siswa', array('siswa' => $data,
            'title' => 'Siswa'));
    }
    
    public function detail() {
        $id = isset($_GET["id"]) ? $$_GET["id"] : '0';
        $this->model('siswa');
        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'id_siswa' => $id
            )
        );
        
        $this->template('detailSiswa', array('siswa' => $data[0]));
        
    }
    
    public function delete() {
        
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        $this->model('siswa');
        $data = $this->siswa->getWhere(array(
            'id_siswa' => $id
        ));
        
        $delete = $this->siswa->delete(array('id_siswa' => $id));
        
        if($delete && $data[0]->images) {
            unlink('../public/images/siswa/' . $data[0]->images);
            $this->back();
        }
    }
    
    public function insert() {
        
        $this->model('jurusan');
        $data = $this->jurusan->get();
        $this->model('siswa');
        
        $error      = array();
        $success    = null;
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nis            = isset($_POST["nis"])          ?
            $_POST["nis"]           : "";
            $nama           = isset($_POST["nama_lengkap"]) ?
            $_POST["nama_lengkap"]  : "";
            $jurusan        = isset($_POST["jurusan"])      ?
            $_POST["jurusan"]       : "";
            $noHP           = isset($_POST["no_hp"])        ?
            $_POST["no_hp"]         : "";
            $angkatan       = isset($_POST["angkatan"])     ?
            $_POST["angkatan"]      : "";
            $alamat         = isset($_POST["alamat"])       ?
            $_POST["alamat"]        : "";
            $status         = isset($_POST["status"])       ?
            $_POST["status"]        : "";
            $jenisKelamin   = isset($_POST["jenis_kelamin"])?
            $_POST["jenis_kelamin"] : "";
            $foto           = isset($_FILES["images"])      ?
            $_FILES["images"]       : "";
            
            if(empty($nis) || $nis == "") {
                array_push($error, "NIS harus diisi.");
            }
            if(empty($nama) || $nama == "") {
                array_push($error, "Nama harus diisi.");
            }
            if(empty($jurusan) || $jurusan == "") {
                array_push($error, "Jurusan harus diisi.");
            }
            if(empty($angkatan) || $angkatan == "") {
                array_push($error, "Angkatan harus diisi.");
            }
            if(!empty($foto["name"]) && $foto["type"] != 'image/jpg' && $foto["type"] != 'image/jpeg' 
            && $foto["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            
            if(count($error) == 0) {
                $imageName = $foto["name"];
                
                if($foto["name"]) {
                    $imageName = date("h_i_s_Y_m_d") .
                    str_replace(" ", "_", $nama) . '.jpg';
                    
                    move_uploaded_file($foto["tmp_name"], '../public/images/siswa/' . $imageName);
                }
                
                $insert = $this->siswa->insert(
                    array(
                        'nis'           => $nis,
                        'nama_lengkap'  => $nama,
                        'id_jurusan'    => $jurusan,
                        'jenis_kelamin' => $jenisKelamin,
                        'nomor_hp'      => $noHP,
                        'angkatan'      => $angkatan,
                        'status'        => $status,
                        'alamat'        => $alamat,
                        'images'        => $imageName
                    )
                );
                
                if($insert) {
                    $success = "Data Berhasil Disimpan.";
                }
            }
        }
        
        $this->template('frmSiswa', array('jurusan' => 
            $data, 'error' => $error, 'success' => $success, 
            'title' => "Tambah Siswa / Alumni"));                
    }
}
?>
