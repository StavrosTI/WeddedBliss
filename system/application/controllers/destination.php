<?php

class Destination extends Controller {

	function Destination()
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
	
	function index( $destination_name=FALSE ) {
		
		//Loaded XML data source
		$data['agents'] = $this->sources->get_agents('assets/data/agents.xml');
			//var_dump($data['agents']);
			
		$data['offers'] = $this->sources->get_offers('assets/data/offers.xml');
			//var_dump($data['offers']);	
			
		$data['properties'] = $this->sources->get_properties('assets/data/properties.xml', 'destination');
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
				
		//get destination.  redirect to index if not mexico/carib
		$data['destination'] = strtolower(trim($destination_name)) ;
		
		
	
		if ( isset($_SERVER['SERVER_NAME']) ) {
			if ( strpos(strtolower($_SERVER['SERVER_NAME']), "travimp") !== FALSE ) {
				$this->load->view('destinations', $data);
			} else {
				$this->load->view('destinations', $data);	//if on a different host than travimp
			}
		} else {
			$this->load->view('destinations', $data);	//default template
		}			
	}	
	
}

/* End of file destination.php */
/* Location: ./system/application/controllers/destination.php */