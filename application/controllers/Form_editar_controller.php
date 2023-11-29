<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_editar_controller extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model("auto_model");
    }

    public function editar($id){
        $datos["marca"] = $this->input->post("marca");
        $datos["modelo"] = $this->input->post("modelo");
        $datos["patente"] = $this->input->post("patente");
        $this->auto_model->editar($id, $datos);
        redirect("Inicio_controller/main");
    }

}