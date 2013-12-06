<?php

class Album extends Controller {

	function Album()
	{
		parent::Controller();	

		$this->load->model('sources');
		
		$this->load->helper(array( 
			'replacer', 
			'cmp', 
			'create_ul', 
			'url_tag', 
			'create_ul_custom')
		);
	}
	
	function index( ) {
	
		//Loaded XML data source
		$data['agents'] = $this->sources->get_agents('assets/data/agents.xml');
			//var_dump($data['agents']);
			
		$data['offers'] = $this->sources->get_offers('assets/data/offers.xml');
			//var_dump($data['offers']);	
			
		$data['properties'] = $this->sources->get_properties('assets/data/properties.xml', 'supplier');
			//var_dump($data['properties']);
			
		$data['suppliers'] = $this->sources->get_suppliers('assets/data/suppliers.xml');
			//var_dump($data['suppliers']);	
			
		//Get branding info from session.  If no session, redirect to home.
		$branding = $this->session->userdata('branding');
		if ( !empty($branding) ) {
			$data['branding'] = $this->session->userdata('branding');
		} else {
			redirect('/', 'location');
		}
	
		if ( isset($_SERVER['SERVER_NAME']) ) {
			if ( strpos(strtolower($_SERVER['SERVER_NAME']), "travimp") !== FALSE ) {
				$this->load->view('album', $data);
			} else {
				$this->load->view('album', $data);	//if on a different host than travimp
			}
		} else {
			$this->load->view('album', $data);	//default template
		}			
	}	
	
}

/* End of file album.php */
/* Location: ./system/application/controllers/album.php */