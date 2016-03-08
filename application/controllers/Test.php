<?php
class Test extends CI_Controller {
public function index()
	{
	
	 //$manager = ManagersManagement::get_all_managers();
  
   var_dump(Document_headerManagement::get_document_header_by_location('2'));
   
  }
public function add_document_header()
  {
    $this->load->model('entities/Documents');
    $document = new Documents();
    $document->initialize($this->input->post());
    DocumentsManagment::set_document($document);
    
    $this->send_confirmation();
    redirect(base_url()."Document/add_document_action", "location");
  }
  public function add_document_action()
  {
  		$this->load->view("front/header");
		$this->load->view("front/document_action");
		$this->load->view("front/footer");
  }
}

?>