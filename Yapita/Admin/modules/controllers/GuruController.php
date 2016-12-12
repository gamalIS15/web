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

}
?>
