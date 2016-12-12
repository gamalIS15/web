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
}
?>
