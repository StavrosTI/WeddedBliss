<?php

class Supplier extends Controller {

	function Supplier()
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
	
	function index( $supplier_index=FALSE ) {
		
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

		//get supplier_index.  redirect to index if not 1-6 !important
		$data['supplier_index'] = strtolower(trim($supplier_index)) ;
		
		//get supplier
		foreach ( $data['suppliers'] as $key => $val ) { 
			if ( $val['supplierindex'] == $supplier_index ) {
				$data['supplier'] = $val;
			}
		}
		
		//get offers
		foreach ( $data['offers'] as $key => $val ) { 
			if ( $val['supplierindex'] == $supplier_index ) {
				$data['supplier_offers'][] = $val;
			}
		}
		//var_dump( $data['supplier_offers'] );
		
		// get properties
		$data['supplier_properties'] = $data['properties'][$supplier_index];
			//var_dump( $data['supplier_properties'] );
		
		
	
		if ( isset($_SERVER['SERVER_NAME']) ) {
			if ( strpos(strtolower($_SERVER['SERVER_NAME']), "travimp") !== FALSE ) {
				$this->load->view('supplier', $data);
			} else {
				$this->load->view('supplier', $data);	//if on a different host than travimp
			}
		} else {
			$this->load->view('supplier', $data);	//default template
		}			
	}	
	
}

/* End of file supplier.php */
/* Location: ./system/application/controllers/supplier.php */