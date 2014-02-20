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
			'create_ul_custom',
			'string')
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
			'logoimage' => 'travimp_logo.png',
			'agency' => 'Travel Impressions',
			'agent' => 'Agent Name',
			'address' => 'Agency Address',
			'website' => 'AgencyWebsite.com',
			'phone' => '000-000-0000',
			'email' => 'agency_email@agency_domain.com',
			'valueprop' => 'Perhaps you met by fate—or maybe it was just luck. However your story began, you don’t want to leave your special day to chance. Instead, leave it to us. Book your destination wedding or honeymoon with a trusted, experienced travel agency, and know that your dream is in capable, caring hands.</p>
			<p>As specialists in destination weddings and honeymoons, we know what it takes to create the experience of a lifetime from top to bottom. We can guide you to the property that’s the right fit for you or your group, help you select the packages that best meet your needs, and guide you through every step of the way, from answering your questions from an insider perspective to handling the unexpected. We’ll make sure that the details are taken care of before you’ve even had to think about them, from arranging transfers to securing the VIP treatment you deserve.</p>
			<p>Your wedding and honeymoon are the first steps toward a beautiful new life together. Let us help you take those steps with confidence.',
			'testimonials' => ''
		);
		
		//var_dump($this->session->all_userdata());
		
		$branding = $this->session->userdata('branding');

		//site branding
		if ( $agency_url !== FALSE  ) {
			//echo "agency_url: " . $agency_url . "<br>";
			
			//Pull existing branding from session			
			if ( strtolower(trim($agency_url)) == 'debrand' ) {
				//echo "debranding..." . "<br>";
				
				$this->session->set_userdata($white_label);
				$data['branding'] = $this->session->userdata('branding');
			
			} else {
				//echo "no debrand" . "<br>";

				//possible valid agency.  check for match.				
				$found_valid_agency = FALSE;
				
				//write as while loop
				foreach ( $data['agents'] as $agent ) {
					//match agency url				
					if ( strtolower(trim($agency_url)) == strtolower(trim($agent['url'])) ) {
					
							//echo $agent['testimonials'];
						$agent['notes'] = replacer($agent['notes']);
						$agent['testimonials'] = replacer($agent['testimonials']);
							//echo "<br>" . $agent['testimonials'];
						
						$branding = $agent;
						$to_session['branding'] = $agent;
						$this->session->set_userdata($to_session);
						$data['branding'] = $this->session->userdata('branding');
					
						$found_valid_agency = TRUE;
					}
				}
				
				//var_dump( $found_valid_agency );
				
				//no matching agency.  apply white label
				if ( $found_valid_agency === FALSE && ($branding['url'] !== '' && $branding['url'] == 'travimp') ) {
				
					$this->session->set_userdata($white_label);
					$data['branding'] = $this->session->userdata('branding');
				}
				/*
				echo "branding: <br>"; 
				var_dump($branding);
				echo "branding (session) <br>";
				var_dump($this->session->userdata('branding'));
				*/
				
				if ( $branding ) {
					$data['branding'] = $this->session->userdata('branding');
				} else {
					echo "Branding Error!";
				}
			}
			
		} elseif ( !empty($branding) )  {
			//echo "Get branding info from session";
			$data['branding'] = $this->session->userdata('branding');
		} else {
			//echo "no branding or existing white labling";
			$this->session->set_userdata($white_label);
			$data['branding'] = $this->session->userdata('branding');
		}
		
		
		//var_dump($this->session->all_userdata());
	
	
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