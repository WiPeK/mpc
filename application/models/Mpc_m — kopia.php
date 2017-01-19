<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpc_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public $rules = array(
		'title' => array(
			'field' => 'title', 
			'label' => 'Nazwa', 
			'rules' => 'trim|required|xss_clean'
		), 
		'describe' => array(
			'field' => 'describe', 
			'label' => 'Opis', 
			'rules' => 'xss_clean'
		),
		'tags' => array(
			'field' => 'tags', 
			'label' => 'Tagi', 
			'rules' => 'trim|xss_clean'
		), 
		'author' => array(
			'field' => 'author', 
			'label' => 'Autor', 
			'rules' => 'trim|xss_clean'
		), 
		'tekst0' => array(
			'field' => 'tekst0', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst1' => array(
			'field' => 'tekst1', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		),
		'tekst2' => array(
			'field' => 'tekst2', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst3' => array(
			'field' => 'tekst3', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst4' => array(
			'field' => 'tekst4', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst5' => array(
			'field' => 'tekst5', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst6' => array(
			'field' => 'tekst6', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst7' => array(
			'field' => 'tekst7', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst8' => array(
			'field' => 'tekst8', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst9' => array(
			'field' => 'tekst9', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst10' => array(
			'field' => 'tekst10', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst11' => array(
			'field' => 'tekst11', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst12' => array(
			'field' => 'tekst12', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst13' => array(
			'field' => 'tekst13', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst14' => array(
			'field' => 'tekst14', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst15' => array(
			'field' => 'tekst15', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst16' => array(
			'field' => 'tekst16', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst17' => array(
			'field' => 'tekst17', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst18' => array(
			'field' => 'tekst18',
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst19' => array(
			'field' => 'tekst19', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst20' => array(
			'field' => 'tekst20', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst21' => array(
			'field' => 'tekst21', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst22' => array(
			'field' => 'tekst22', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst23' => array(
			'field' => 'tekst23', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst24' => array(
			'field' => 'tekst24', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst25' => array(
			'field' => 'tekst25', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst26' => array(
			'field' => 'tekst26', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst27' => array(
			'field' => 'tekst27', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst28' => array(
			'field' => 'tekst28', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst29' => array(
			'field' => 'tekst29', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst30' => array(
			'field' => 'tekst30', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst31' => array(
			'field' => 'tekst31', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst32' => array(
			'field' => 'tekst32', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst33' => array(
			'field' => 'tekst33', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst34' => array(
			'field' => 'tekst34', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		), 
		'tekst35' => array(
			'field' => 'tekst35', 
			'rules' => 'trim|xss_clean|max_length[20]|alpha'
		),  
	);

	public function prepare()
	{
		$data = array();
		$tmp = array();
		$data['uhash'] = $this->generate_key();
		for($i=0; $i<36; $i++)
		{	
			if(!empty($_POST['tekst' . $i]))
			{//dump($_FILES);
				//if(isset($_FILES['mFile' . $i]->name))
				//{
					$tmp = $this->do_upload($i);
					if($tmp['status'])
					{
						$data['tekst' . $i] = $this->input->post('tekst' . $i);
						$data['mFile' . $i] = $tmp['file_name'];
					}
					else
					{
						$this->session->set_userdata('message', $tmp['error']);
						redirect(site_url('mpc/create_new'));
					}	
				//}
			}
		}
		$data['title'] = $this->input->post('title');
		$data['describe'] = $this->input->post('describe');
		$data['tags'] = $this->input->post('tags');
		$data['author'] = $this->input->post('author');
		$data['views'] = 0;
		$data['created_ip'] = $this->input->ip_address();
		$data['created_time'] = date("Y-m-d H:i:s");
		$data['vote'] = 0;

		if($this->save($data))
		{
			return array(
				'status' => true,
				'key' => $data['uhash']
			);
		}
		else
		{
			return array(
				'status' => false
			);
		}
	}

	private function do_upload($i)
	{ 
		$config = array(
			'upload_path' => realpath(APPPATH . '../assets/music/'),
			'allowed_types' => 'mp3|ogg',
			'max_size' => 10000,
			'file_name' => do_hash(random_string('alpha', 16)),
		);

		$this->load->library('upload', $config);
		if($this->upload->do_upload('mFile' . $i))
		{
			return array(
				'status' => true,
				'upload_data' => $this->upload->data()
			);
		}
		else
		{
			return array(
				'status' => false,
				'error' => $this->upload->display_errors()
			);
		}
	}

	private function save($data)
	{
		$this->db->insert('mpc_list', $data);
		if($this->db->affected_rows())
		{
			return true;
		}
		else
			return false;
	}
//$this->session->set_userdata('message', 'Zdjęcie nie zostało dodane!');
	private function generate_key()
	{
	    $capstr = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","w","x","y","z");
	    $word = '';
	    $n = 0;
	    while($n<5)
	    {
	        $word .=$capstr[mt_rand(0, 34)];
	        $n++;
	    }
	    return $word;
	}

}

/* End of file Mpc_m.php */
/* Location: ./application/models/Mpc_m.php */