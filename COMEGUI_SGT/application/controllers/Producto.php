<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Producto extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
         $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        echo "<h1>Controlador Producto -> ingresar al crud producto con http://localhost/codeigniter/CodeIgniter-3.0.0/index.php/productoController/producto<h1>";
		//Just an example to ensure that we get into the function
        //die();
		
    }
 
    public function producto()
    {
        $this->grocery_crud->set_table('producto');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);        
    }
     function _example_output($output = null)
 
    {
        $this->load->view('productoView.php',$output);    
    }
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */