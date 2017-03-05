<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpc_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public $rules_s = array(
		'search' => array(
			'field' => 'search', 
			'label' => 'Szukaj', 
			'rules' => 'trim|required|xss_clean|alpha_numeric'
		)
	);	

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
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst1' => array(
			'field' => 'tekst1', 
			'rules' => 'trim|xss_clean|max_length[20]'
		),
		'tekst2' => array(
			'field' => 'tekst2', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst3' => array(
			'field' => 'tekst3', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst4' => array(
			'field' => 'tekst4', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst5' => array(
			'field' => 'tekst5', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst6' => array(
			'field' => 'tekst6', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst7' => array(
			'field' => 'tekst7', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst8' => array(
			'field' => 'tekst8', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst9' => array(
			'field' => 'tekst9', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst10' => array(
			'field' => 'tekst10', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst11' => array(
			'field' => 'tekst11', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst12' => array(
			'field' => 'tekst12', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst13' => array(
			'field' => 'tekst13', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst14' => array(
			'field' => 'tekst14', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst15' => array(
			'field' => 'tekst15', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst16' => array(
			'field' => 'tekst16', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst17' => array(
			'field' => 'tekst17', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst18' => array(
			'field' => 'tekst18',
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst19' => array(
			'field' => 'tekst19', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst20' => array(
			'field' => 'tekst20', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst21' => array(
			'field' => 'tekst21', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst22' => array(
			'field' => 'tekst22', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst23' => array(
			'field' => 'tekst23', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst24' => array(
			'field' => 'tekst24', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst25' => array(
			'field' => 'tekst25', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst26' => array(
			'field' => 'tekst26', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst27' => array(
			'field' => 'tekst27', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst28' => array(
			'field' => 'tekst28', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst29' => array(
			'field' => 'tekst29', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst30' => array(
			'field' => 'tekst30', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst31' => array(
			'field' => 'tekst31', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst32' => array(
			'field' => 'tekst32', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst33' => array(
			'field' => 'tekst33', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst34' => array(
			'field' => 'tekst34', 
			'rules' => 'trim|xss_clean|max_length[20]'
		), 
		'tekst35' => array(
			'field' => 'tekst35', 
			'rules' => 'trim|xss_clean|max_length[20]'
		),  
	);

	public function prepare()
	{
		$config = array(
			'upload_path' => 'assets/music/',
			'allowed_types' => 'mp3|ogg|aac|wav',
			'max_size' => 5000,
			'file_name' => do_hash(random_string('alpha', 16)),
		);
		$this->load->library('upload', $config);
		$data = array();
		$tmp = array();
		$data['uhash'] = $this->generate_key();
		for($i=0; $i<36; $i++)
		{	
			if(!empty($_POST['tekst' . $i]))
			{//dump($_FILES);
				if(!empty($_FILES['mFile']['name'][$i]))
				{
					$tmp = $this->do_upload($i);
					if($tmp['status'])
					{
						$data['tekst' . $i] = $this->input->post('tekst' . $i);
						$data['mFile' . $i] = $tmp['upload_data']['file_name'];
					}
					else
					{
						$this->session->set_userdata('message', $tmp['error']);
						//redirect(site_url('mpc/create_new'));
						var_dump($tmp['error']);
					}	
				}
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
			'upload_path' => 'assets/music/',
			'allowed_types' => 'mp3|ogg|aac|wav',
			'max_size' => 5000,
			'file_name' => do_hash(random_string('alpha', 16)),
		);

		$_FILES['mFil']['name'] = $_FILES['mFile']['name'][$i];
      	$_FILES['mFil']['type'] = $_FILES['mFile']['type'][$i];
      	$_FILES['mFil']['tmp_name'] = $_FILES['mFile']['tmp_name'][$i];
      	$_FILES['mFil']['error'] = $_FILES['mFile']['error'][$i];
      	$_FILES['mFil']['size'] = $_FILES['mFile']['size'][$i];


		$this->upload->initialize($config);
		if($this->upload->do_upload('mFil'))
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

	public function get($hash)
	{
		$query = $this->db->query("SELECT * FROM mpc_list where uhash = '$hash'");
		if(count($query->row()))
		{
			return $query->row();
		}
		else
			return false;
	}

	public function add_view($id)
	{
		$this->db->query("UPDATE mpc_list SET views = views +1");
	}

	public function add_vote($id)
	{
		$this->db->query("UPDATE mpc_list SET vote = vote +1");
	}

	public function get_all()
	{
		$query = $this->db->query("SELECT * FROM mpc_list");
		return $query->result();
	}

	public function get_newest()
	{
		$query = $this->db->query("SELECT * FROM mpc_list ORDER BY created_time DESC");
		return $query->result();
	}

	public function get_best()
	{
		$query = $this->db->query("SELECT * FROM mpc_list ORDER BY vote DESC");
		return $query->result();
	}

	public function get_top_views()
	{
		$query = $this->db->query("SELECT * FROM mpc_list ORDER BY views DESC");
		return $query->result();
	}

	public function search($quest)
	{
		$query = $this->db->query("SELECT * FROM mpc_list WHERE title LIKE '%$quest%' OR tags LIKE '%$quest%'");
		return $query->result();
	}

}

/* End of file Mpc_m.php */
/* Location: ./application/models/Mpc_m.php */
