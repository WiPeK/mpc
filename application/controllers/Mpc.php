<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpc extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['mpcfb'] = $this->mpc_m->get_all();
		$this->data['page_title'] = 'Wszystkie mpc';
		$this->data['subview'] = 'front/inc/index';
		$this->load->view('front/template', $this->data);
	}

	public function show($hash)
	{
		if($hash)
		{
			$this->data['mpc'] = true;
			$this->data['mpcfb'] = $this->mpc_m->get($hash);
			if($this->data['mpcfb'] != false)
			{
				$this->mpc_m->add_view($this->data['mpcfb']->id);
				$this->data['subview'] = 'front/inc/mpc';
				$this->load->view('front/template', $this->data);
			}
			else
			{
				redirect(site_url('mpc/create_new'));
			}
		}
		else
		{
			redirect(site_url('mpc/create_new'));
		}
	}

	public function create_new()
	{
		$this->data['subview'] = 'front/inc/mpc_new';
		$this->load->view('front/template', $this->data);
	}

	public function save()
	{
		$rules = $this->mpc_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run())
		{//dump($_FILES['mFile']['name'][0]); dump($this->input->post());
			$result = $this->mpc_m->prepare();
			if($result['status'])
			{
				$this->session->set_userdata('message', 'Nowe mpc zostało zapisane.');
				redirect(site_url('mpc/show/' . $result['key']));
			}
			else
			{
				$this->session->set_userdata('message', 'Niestety coś poszło nie tak. Spróbuj ponownie.');
				redirect(site_url('mpc/create_new'));
			}
		}
		else
		{
			$this->session->set_userdata('message', 'Wpisane parametry są nieprawidłowe. Spróbuj ponownie.');
			redirect(site_url('mpc/create_new'));
		}
	}

	public function add_vote($id)
	{
		if($this->input->cookie('mpc' . $id) != 'voted')
		{$this->mpc_m->add_vote($id);
			// if($this->mpc_m->add_vote($id))
			// {
				$cookie = array(
				    'name'   => 'mpc' . $id,
				    'value'  => 'voted',
				    'expire' => '86500',
				    'domain' => '',
				    'path'   => '/',
				    'prefix' => '',
				    'secure' => TRUE
				);

				$this->input->set_cookie($cookie);
			//}	
		}	
	}

	public function newest()
	{
		$this->data['mpcfb'] = $this->mpc_m->get_newest();
		$this->data['page_title'] = 'Najnowsze mpc';
		$this->data['subview'] = 'front/inc/index';
		$this->load->view('front/template', $this->data);
	}

	public function best()
	{
		$this->data['mpcfb'] = $this->mpc_m->get_best();
		$this->data['page_title'] = 'Najlepiej oceniane';
		$this->data['subview'] = 'front/inc/index';
		$this->load->view('front/template', $this->data);
	}

	public function top_views()
	{
		$this->data['mpcfb'] = $this->mpc_m->get_top_views();
		$this->data['page_title'] = 'Najczęściej wyświetlane';
		$this->data['subview'] = 'front/inc/index';
		$this->load->view('front/template', $this->data);
	}

	public function search()
	{
		$rules = $this->mpc_m->rules_s;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run())
		{
			$this->data['mpcfb'] = $this->mpc_m->search($this->input->post('search'));
			$this->data['page_title'] = 'Wyniki dla: ' . $this->input->post('search');
			$this->data['subview'] = 'front/inc/index';
			$this->load->view('front/template', $this->data);
		}
		else
		{
			redirect(site_url('mpc'));
		}
	}

}

/* End of file Mpc.php */
/* Location: ./application/controllers/Mpc.php */
