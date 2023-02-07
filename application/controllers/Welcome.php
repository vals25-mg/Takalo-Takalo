<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function accueil()
	{
		$this->load->view('Accueil');
	}
	public function processing(){
	// echo $_SESSION['prenom'];

		if($this->session->has_userdata('prenom')){
				$this->load->view('client/Accueil');
		}
		else{
			$this->index();
		}
}

public function connection(){
	$this->load->model('news_model');
	$table = "users";
	$data = $this->news_model->getin_table($table);
	for($i = 0; $i<count($data); $i++){
			if($this->input->post('email') == $data[$i]['email'] && $this->input->post('password') == $data[$i]['pwd']){
					$this->session->set_userdata('prenom', $data[$i]['prenom']);
					break;
			}
	}
	// redirect(base_url('index.php/welcome/processing'));
	// echo $_SESSION['prenom'];

		$this->processing();

}

	public function deconnect(){
		$this->session->unset_userdata('prenom');
		$this->index();
	}

  public function singin(){
      $this->load->model('news_model');
      $table = "users";
      $nom = $this->input->post('nom');
      $prenom  = $this->input->post('prenom');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $tel = $this->input->post('tel');
      $img = $this->input->post('prenom').".jpg";
      $est_admin = 0;
      date_default_timezone_set('Asia/Qatar');
      $date = date('Y-m-d H:i:s');
      $date_inscription = $date;
      $this->news_model->inscription($table,$nom,$prenom,$email,$password,$tel,$img,$est_admin,$date_inscription);
	  $this->session->set_userdata('prenom', $prenom);
	  $this->load->view('client/Accueil');  
	}

}
