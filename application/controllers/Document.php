<?php
class Document extends CI_Controller {
public function index()
	{
		$this->load->view("front/header");
		$this->load->view("front/document");
		$this->load->view("front/footer");
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