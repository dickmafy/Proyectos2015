<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Buscador extends CI_Controller {
 
      function __construct() {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
    }
	
    public function index()
    {
        $this->load->view('buscador_view');
    }
}
/*application/controllers/buscador.php
 *  el controlador
 */