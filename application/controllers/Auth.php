<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Auth_model");
    }

    public function login()
    {
        $data = new stdClass();

        $data->title       = "Proyecto CI";
        $data->contenido   = "auth/Login";
        $data->panel_title = "Inicio de sesion";
        $data->active      = "Login";
        $this->load->view('frontend', $data);
    }

    public function signin()
    {
        $this->form_validation->set_rules('correo', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->login();
        } else {
            $correo       = $this->input->post('correo');
            $pass         = $this->input->post('pass');
            $pass_encrypt = sha1(md5($pass));

            $user = $this->Auth_model->getUser($correo);

            if (!$user) {
                $this->session->set_flashdata("mensaje_error", "Datos de usuario incorrecto");
                print_r("Email incorrecto");
            } else {
                print_r("Email correcto");
            }
        }
    }

}
