<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class NameRecipe extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		//$this -> load -> model("recipe_model");
		
		//** menu bar *//
		$this -> load -> model("header_model");
	}

	public function index() {
		$data['menu'] = $this -> header_model -> get_type();
		$this -> view -> page_view('menu', $data);
		$this -> view -> page_view('namerecipe_view');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */