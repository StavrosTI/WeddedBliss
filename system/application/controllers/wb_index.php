<?php

class WB_Index extends Controller {

	function WB_Index()
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
	
	function index( $agency_url = FALSE ) {
		
		//Loaded XML data source
		$data['agents'] = $this->sources->get_agents('assets/data/agents.xml');
			//var_dump($data['agents']);
			
		$data['offers'] = $this->sources->get_offers('assets/data/offers.xml');
			//var_dump($data['offers']);	
			
		$data['properties'] = $this->sources->get_properties('assets/data/properties.xml');
			//var_dump($data['properties']);
			
		$data['suppliers'] = $this->sources->get_suppliers('assets/data/suppliers.xml');
			//var_dump($data['suppliers']);		
		
		//echo "Agency Name: <br>";
		//echo $agency_url;

		//white label branding
		$white_label['branding'] = array(
			'url' => 'travimp',
			'brand' => 'ti',
			'logoimage' => 'travimp_logo.jpg',
			'agency' => 'Travel Impressions',
			'agent' => 'Agent Name',
			'address' => 'Agency Address',
			'website' => 'AgencyWebsite.com',
			'phone' => '000-000-0000',
			'email' => 'agency_email@agency_domain.com',
			'valueprop' => 'Founded in 1974, Travel Impressions is one of the nation\'s largest leisure tour operators. The company offers FIT vacations to over 200 destinations in the Caribbean, Mexico, Central and South America, China, Europe, the Eastern Mediterranean, Dubai, South Africa, Australia, New Zealand, Fiji, the Islands of Tahiti, Canada, Hawaii, Alaska and the Continental U.S., and features more than 2,400 resorts, hotels and 1,350 luxury villas. Travel Impressions has received multiple industry awards for outstanding customer service, best overall operations, best technology, most knowledgeable reservations staff and leading marketing materials – all dedicated to better serving travel agents and their clients.'
		);
		
		$branding = $this->session->userdata('branding');

		//site branding
		if ( $agency_url !== FALSE  ) {
			
			//Pull existing branding from session			
			if ( strtolower(trim($agency_url)) == 'debrand' ) {
				//debranding...
				$this->session->set_userdata($white_label);
				$data['branding'] = $this->session->userdata('branding');
			
			} else {

				//possible valid agency.  check for match.				
				$found_valid_agency = FALSE;
				
				//write as while loop
				foreach ( $data['agents'] as $agent ) {
					//match agency url				
					if ( strtolower(trim($agency_url)) == strtolower(trim($agent['url'])) ) {

						$agent['branding'] = $agent;
						$this->session->set_userdata($agent);
						$data['branding'] = $this->session->userdata('branding');
					
						$found_valid_agency = TRUE;
					}
				}
				
				//no matching agency.  apply white label
				if ( !$found_valid_agency && ($branding['url'] !== '' && $branding['url'] == 'travimp') ) {
				
					$this->session->set_userdata($white_label);
					$data['branding'] = $this->session->userdata('branding');
				}
				if ( !empty($branding) ) {
					$data['branding'] = $this->session->userdata('branding');
				} else {
					echo "Branding Error!";
				}
			}
			
		} elseif ( !empty($branding) )  {
			//Get branding info from session
			$data['branding'] = $this->session->userdata('branding');
		} else {
			//no branding or existing white labling
			$this->session->set_userdata($white_label);
			$data['branding'] = $this->session->userdata('branding');
		}
	
	
		if ( isset($_SERVER['SERVER_NAME']) ) {
			if ( strpos(strtolower($_SERVER['SERVER_NAME']), "travimp") !== FALSE ) {
				$this->load->view('landingpage', $data);
			} else {
				$this->load->view('landingpage', $data);	//if on a different host than travimp
			}
		} else {
			$this->load->view('landingpage', $data);	//default template
		}			
	}
	
}

/* End of file WB_index.php */
/* Location: ./system/application/controllers/WB_index.php */