<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['mpcfb_nw'] = $this->mpc_m->get_newest();
		$this->data['mpcfb_bs'] = $this->mpc_m->get_best();
		$this->data['mpcfb_vv'] = $this->mpc_m->get_top_views();
		$this->data['page_title'] = 'Witamy na stronie MPC WiPeK.pl';
		$this->data['subview'] = 'front/inc/home';
		$this->load->view('front/template', $this->data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */