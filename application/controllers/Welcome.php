<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent :: __construct();
		$this->load->database();
	}
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
		if(!$this->session->has_userdata('admin_id')) 
			redirect(site_url('Welcome/login'));
		$this->load->view('index');

		// 	redirect(site_url('welcome/comments'));
	}
	function test(){
		$this->load->view('test');
	}
	function register() {
    $this->load->library('upload'); // Load the upload library

    $post = $this->input->post();

    if ($post) {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $data['error'] = $error;
        } else {
            $data = array(
                'name' => $post['name'],
                'email' => $post['email'],
                'password' => $post['password'],
                'image' => $this->upload->data('file_name') // Get the uploaded file name
            );

            $this->db->insert('login', $data);
            // Redirect to the login page or any other page as desired
            redirect('welcome/login');
        }
    }

    $this->load->view('register');
}






		function login(){
			$post = $this->input->post();
// print_r($post);
			if($post){
				$get = $this->login_model->login($post['name'],$post['password']);
				// echo $get->num_rows();
				// exit;
				if($get->num_rows()){
					$data = array(
					'admin_id'=>$get->row()->id,
					'admin_login'=>TRUE
					);
					$this->session->set_userdata($data);
					$this->load->view('index');
				}
				else{
					redirect(site_url('Welcome/login'));
				}
				// echo $get;
			}
			else
				$this->load->view('login');

		}


		function profile(){
			// $post = $this->input->post();
			$this->load->view('profile');
		}
		
    public function EditProfile($id) {
        $edit = $this->db->where('id', $id)->get('login');

        if ($edit->num_rows() > 0) {
            $data['key'] = $edit->row();
            $this->load->view('EditProfile', $data);
        } else {
            echo "No data found";
        }
    }

    public function updateProfile($id) {
        $post = $this->input->post();

        if ($post) {
            $data = array(
                'name' => $post['name'],
                'email' => $post['email'],
                'password' => $post['password'],
                'image' => $post['image']
            );

            $this->db->where('id', $id)->update('login', $data);
            redirect('welcome/profile'); // Redirect to profile page after successful update
        }
    }

	function delete_profile($id = 0){
		$this->db->where('id',$id)->delete('login');
		redirect(site_url('welcome/index'));
	}
	function logout(){
		$this->session->sess_destroy();

        // Redirect to the login page or any other desired page
        redirect('welcome/login');
	}

}


