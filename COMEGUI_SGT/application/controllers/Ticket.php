<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ticket extends CI_Controller {

    function __construct() {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
    }

    public function index() {
        echo "<h1>Welcome ticketController to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        //die();
		        echo "<h1>Controlador Producto -> ingresar al crud producto con http://localhost/codeigniter/CodeIgniter-3.0.0/index.php/ticketController/ticket<h1>";
    }

    public function ticket() {

        $crud = new grocery_CRUD();

        $crud->set_table('ticket')
                ->set_subject('Ticket Tabla')
                //columnas reales
                ->columns('id', 'placa', 'id_producto', 'id_empresa', 'id_conductor', 'id_transportista', 'id_usuario')
                //MOSTRAR:nombre de las columnas
                ->display_as('placa', 'Placa')
                //columnas a mostrar 
                ->display_as('id', 'Cod. Ticket')
                ->display_as('id_producto', 'Cod. Producto')
                ->display_as('id_empresa', 'Cod. Empresa')
                ->display_as('id_conductor', 'Cod. Conductor')
                ->display_as('id_transportista', 'Cod. Transportista')
                ->display_as('id_usuario', 'Cod. Usuario');

        
        //codigo de relacion,tabla foranea,texto de tabla foranea
 $crud->set_relation('id_producto','producto','descripcion');
 $crud->set_relation('id_empresa','empresa','descripcion');
 $crud->set_relation('id_conductor','conductor','nombre');
 $crud->set_relation('id_transportista','transportista','descripcion');
 $crud->set_relation('id_usuario','usuario','nickname');
 
        /* quitar opciones
         $crud->unset_add();
    $crud->unset_delete();
*/        
        //CRUD _ Columnas a usar en el Formulario
        $crud->fields('placa', 
                'id_producto',
                'id_empresa',
                'id_conductor',
                'id_transportista',
                'id_usuario'
                );
        //CRUD : campos requeridos para guardar
        $crud->required_fields('placa', 'id_producto');
        $crud->callback_after_insert(array($this, 'after_insert'));
        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null) {
        $this->load->view('productoView.php', $output);
    }

    function after_insert($post_array,$primary_key)
{
        echo 'this es: '  + $this;
    $user_logs_insert = array(
        "usuario" => $primary_key,
        "fecha_update" => date('Y-m-d H:i:s')
        
    );
 
    $this->db->insert('auditoria',$user_logs_insert);
 
    return true;
}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */