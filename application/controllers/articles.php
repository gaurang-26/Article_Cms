<?php
class Articles extends MY_Controller{
	public function index(){
		//Get Articles
		$data['articles'] = $this->Article_model->get_articles('id','DESC','10');
		
		//Get Menu Items
		$data['menu_items'] = $this->Article_model->get_menu_items();
		
		//Load View
		$this->load->view('home', $data);
	}
	
	public function view($id){
		//Get Menu Items
		$data['menu_items'] = $this->Article_model->get_menu_items();
		
		//Get Article
		$data['article'] = $this->Article_model->get_article($id);
		
		//Load View
		$this->load->view('inner', $data);
	}
}