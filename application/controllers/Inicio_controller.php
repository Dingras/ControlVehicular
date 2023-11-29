<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_controller extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model("auto_model");
        $this->load->library('form_validation');
    }

	public function index(){
		redirect('Inicio_controller/main');
	}

    public function main(){
        $datos["autos"] = $this->auto_model->listar();
        $this->load->view('inicio',$datos);
    }

    public function borrar($id=""){ //url: localhost/index.php/controlador/metodo/{num}
        //$id = $this->input->get('id'); url: localhost/index.php/controlador/metodo?id={num}
        $this->auto_model->borrar($id);
        redirect("Inicio_controller/main");
    }
    public function editar($id){
        // pagina principal
        $datos["autos"] = $this->auto_model->listar();
        $this->load->view('inicio',$datos);
        // Formulario de edicion
        $datos["auto"] = $this->auto_model->listar_auto($id);
        $this->load->view('form_editar',$datos);
    }

    public function guardar(){
        // reglas de validacion
        $this->form_validation->set_rules("marca","Marca","required");
        $this->form_validation->set_rules("modelo","Modelo","required");
        $this->form_validation->set_rules("patente","Patente","required|min_length[6]|max_length[10]");
        // si todo sale bien, hace el agregar
        if ($this->form_validation->run() == TRUE){
            $datos["marca"] = $this->input->post("marca");
            $datos["modelo"] = $this->input->post("modelo");
            $datos["patente"] = $this->input->post("patente");
            $this->auto_model->agregar($datos);
        }
        redirect("Inicio_controller/main");
    }
}