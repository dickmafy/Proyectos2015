<?php
class OfertasC extends CI_Controller 
{
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("Ofertas");
        $this->load->library("pagination");
         $this->load->library('session');
        $this->load->database();
        $this->load->library('grocery_CRUD');
    
    }

       public function index() {
           echo "<a href='http://localhost/wordpress/index.php/OfertasC/example1'>http://localhost/wordpress/index.php/OfertasC/example1</a>";
       }
           
   public function example1() {
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] ="</ul>";
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
$config['next_tag_open'] = "<li>";
$config['next_tagl_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['prev_tagl_close'] = "</li>";
$config['first_tag_open'] = "<li>";
$config['first_tagl_close'] = "</li>";
$config['last_tag_open'] = "<li>";
$config['last_tagl_close'] = "</li>";


    $config["base_url"] = site_url(). "/OfertasC/example1";
    $config["total_rows"] = $this->Ofertas->record_count();
    $config["per_page"] = 20;
    $config["uri_segment"] = 3;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
    
    $data["page"]=$page;
    $data["results"] = $this->Ofertas->fetch_countries($config["per_page"], $page);
    $data["links"] = $this->pagination->create_links();

    $this->load->view("example1", $data);
}
}