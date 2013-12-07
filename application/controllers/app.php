<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function index(){
		$this->load->model('User_model');
		$vdata['users'] = $this->User_model->get_users();
        $vdata['page'] = 'home';
		$this->load->view('welcome_message', $vdata);
	}

	public function config(){
        $this->load->model('User_model');
        $vdata['users'] = $this->User_model->get_users();
        $vdata['page'] = 'config';
        $this->load->view('config', $vdata);
	}

    public function camera(){
        $vdata['page'] = 'camera';
        $this->load->view('camera', $vdata);
    }

    public function edit_users(){
        $this->load->model('User_model');
        $post_data = $this->input->post();
        foreach ( $post_data['id'] as $index => $id ){
            $user_data['name'] = $post_data['name'][$index];
            $user_data['addr'] = $post_data['addr'][$index];
            $user_data['color'] = $post_data['color'][$index];
            $user_data['mail'] = $post_data['mail'][$index];
            $user_data['recv_mail'] = $post_data['recv_mail'][$index];
            // TODO we should probably do some server side validation...
            $this->User_model->update_user($user_data, $id);
        }
        redirect('/app/config', 'location');
    }

    public function add_user(){
        $this->load->model('User_model');
        $post_data = $this->input->post();

        $user_data['name'] = $post_data['name'];
        $user_data['addr'] = $post_data['addr'];
        $user_data['color'] = $post_data['color'];
        $user_data['mail'] = $post_data['mail'];
        $user_data['recv_mail'] = $post_data['recv_mail'];
        // TODO we should probably do some server side validation...

        $this->User_model->add_user($user_data);

        redirect('/app/config', 'location');
    }
}