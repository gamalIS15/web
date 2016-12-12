<?php

class UserController extends MainController {
    public function index() {

        $this->model('user');

        $data = $this->user->get();

        $this->template('user', array('user' => $data));
    }
		
    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $this->model('user');

        $data = $this->user->getWhere(
            array(
                'id_user'  => $id
            )
        );

        $this->template('detailUser', array('user' => $data[0]));

    }
    
    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('user');

        $data = $this->user->getWhere(array(
            'id_user'  => $id
        ));

        $delete = $this->user->delete(array('id_user' => $id));


        if($delete) {
            unlink('../public/images/user/' . $data[0]->images);
          $this->back();
        }

    }
	
	    public function insert() {

        $this->model('user');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $nama           = isset($_POST["nama_lengkap"]) ? $_POST["nama_lengkap"]  : "";
            $email          = isset($_POST["email"])        ? $_POST["email"]         : "";
            $noHP           = isset($_POST["no_hp"])        ? $_POST["no_hp"]         : "";
            $alamat         = isset($_POST["alamat"])       ? $_POST["alamat"]        : "";
            $username       = isset($_POST["username"])     ? $_POST["username"]      : "";
            $password       = isset($_POST["password"])     ? $_POST["password"]      : "";
            $rePassword     = isset($_POST["re_password"])  ? $_POST["re_password"]   : "";

            $foto           = isset($_FILES["images"])      ? $_FILES["images"]       : "";

            if(empty($nama) || $nama == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                array_push($error, "Format e-mail salah.");
            }
            if(empty($username) || $username == "") {

                array_push($error, "Username harus di isi.");
            }
            if(empty($password) || $password == "") {

                array_push($error, "Password harus di isi.");
            }
            if($password != $rePassword) {

                array_push($error, "Password dan Re-Type Password harus sama.");
            }

            if(!empty($foto["name"]) && $foto["type"] != 'image/jpg' && $foto["type"] != 'image/jpeg' && $foto["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }

            if(count($error) == 0) {

                $imageName = $foto["name"];

                if($foto["name"]) {

                    $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nama) . '.jpg';

                    move_uploaded_file($foto["tmp_name"], '../public/images/user/' . $imageName);
                }

                $insert = $this->user->insert(

                    array(
                        'nama_lengkap'  => $nama,
                        'email'         => $email,
                        'no_hp'         => $noHP,
                        'alamat'        => $alamat,
                        'username'      => $username,
                        'password'      => md5($password),
                        'images'        => $imageName
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }


        }

        $this->template('frmUser', array('error' => $error, 'success' => $success, 'title' => 'Tambah User'));

    }		
	
    public function update() {

        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $this->model('user');

        $data = $this->user->getWhere(
            array(
                'id_user'  => $id
            )
        );

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $nama           = isset($_POST["nama_lengkap"]) ? $_POST["nama_lengkap"] : "";
            $email          = isset($_POST["email"])        ? $_POST["email"]        : "";
            $noHP           = isset($_POST["no_hp"])        ? $_POST["no_hp"]        : "";
            $alamat         = isset($_POST["alamat"])       ? $_POST["alamat"]       : "";
            $password       = isset($_POST["password"])     ? $_POST["password"]     : "";
            $rePassword     = isset($_POST["re_password"])  ? $_POST["re_password"]  : "";

            $foto           = isset($_FILES["images"])      ? $_FILES["images"]      : "";

            if(empty($nama) || $nama == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                array_push($error, "Format e-mail salah.");
            }

            if(!empty($foto["name"]) && $foto["type"] != 'image/jpg' && $foto["type"] != 'image/jpeg' && $foto["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }

            if(count($error) == 0) {


                $imageName = $foto["name"];

                $dataUpdate = array(
                    'nama_lengkap'  => $nama,
                    'email'         => $email,
                    'no_hp'         => $noHP,
                    'alamat'        => $alamat
                );

                if($foto["name"]) {

                    $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nama) . '.jpg';

                    unlink('../public/images/user/' . $data[0]->images);
                    move_uploaded_file($foto["tmp_name"], '../public/images/user/' . $imageName);

                    $dataUpdate["images"] = $imageName;
                }

                if(isset($password) && $password != "") {
					
                    if($rePassword == "" || $password != $rePassword) {

                        array_push($error, "Password dan Re-Type Password harus sama.");

                    }else {

                        $dataUpdate["password"] = generateHash($password); 
                    }
                }

                if(count($error) == 0) {

                    $update = $this->user->update($dataUpdate, array('id_user' => $id));

                    if($update) {

                        $success = "Data Berhasil di simpan.";
                    }
                }
            }


        }

        $this->template('frmUser', array('user' => $data[0], 'error' => $error, 'success' => $success, 'title' => 'Update User'));

    }	
}
?>
