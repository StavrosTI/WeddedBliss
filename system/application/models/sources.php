<?php  if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Sources extends Model {

    function __construct()
    {
        parent::__construct();
		
		//Initialize the XMLParser class. PHP4...
		$this->load->library('XmlParser4');
		
		$this->load->helper('cmp');
    }
	
	function get_agents($source, $sorted=TRUE){
		$xml = read_file($source);
		
		//parse agents xml
		$this->xmlparser4->XMLParser4($xml);
		$this->xmlparser4->Parse();
		$agents_xml_object = $this->xmlparser4->document;
			
		//agents xml to array
		foreach ($agents_xml_object->element as $agent) {
			$top_level = $agent->url[0]->tagData;
		
			foreach( $agent->tagChildren as $child ) {
				$agents[$top_level][$child->tagName] = $child->tagData;	
			}
		}
		
		if ( $sorted ) ksort($agents);
			
		return $agents;
	}
	
	function get_suppliers($source, $sorted=TRUE){
		$xml = read_file($source);
		
		//parse suppliers xml
		$this->xmlparser4->XMLParser4($xml);
		$this->xmlparser4->Parse();
		$suppliers_xml_object = $this->xmlparser4->document;

		//suppliers xml to array	
		foreach ($suppliers_xml_object->element as $supplier) {
			$top_level = $supplier->supplierindex[0]->tagData;
				
			foreach( $supplier->tagChildren as $child ) {
				$suppliers[$top_level][$child->tagName] = $child->tagData;	
			}
		}
		
		if ( $sorted ) ksort($suppliers);
		
		return $suppliers;
	}
	
	function get_properties($source, $sorted=FALSE){
		$xml = read_file($source);
		
		//parse properties xml
		$this->xmlparser4->XMLParser4($xml);
		$this->xmlparser4->Parse();
		$properties_xml_object = $this->xmlparser4->document;
			
		//properties xml to array	
		if ( $sorted == 'destination' ) {
			foreach ($properties_xml_object->element as $property) {
				$first_level = $property->destination[0]->tagData;
				$second_level = $property->subregion[0]->tagData;
			
				$i = ( isset($properties[$first_level][$second_level]) ) ? count($properties[$first_level][$second_level]) : 0;
					
				foreach( $property->tagChildren as $child ) {
					$properties[$first_level][$second_level][$i][$child->tagName] = $child->tagData;	
				}
			}
		} elseif ( $sorted == 'supplier' ) {
			foreach ($properties_xml_object->element as $property) {
				$first_level = $property->supplierindex[0]->tagData;
			
				$i = ( isset($properties[$first_level]) ) ? count($properties[$first_level]) : 0;
					
				foreach( $property->tagChildren as $child ) {
					$properties[$first_level][$i][$child->tagName] = $child->tagData;	
				}
			}
		} else {
			foreach ($properties_xml_object->element as $property) {
				$first_level = $property->destination[0]->tagData;
			
				$i = ( isset($properties[$first_level]) ) ? count($properties[$first_level]) : 0;
					
				foreach( $property->tagChildren as $child ) {
					$properties[$first_level][$i][$child->tagName] = $child->tagData;	
				}
			}
		}
		unset($i);
		
/*		
			foreach ($properties as $key => $val) {
				//var_dump( $val );
				uasort($val, 'cmp');
				//var_dump( $val );
				$propertiesSorted[$key] = $val;
				ksort($propertiesSorted);
			}
			$properties = $propertiesSorted;
*/
		
		return $properties;
	}
	
	function get_offers($source, $sorted=TRUE){
		$xml = read_file($source);
		
		//parse offers xml
		$this->xmlparser4->XMLParser4($xml);
		$this->xmlparser4->Parse();
		$offers_xml_object = $this->xmlparser4->document;

		//agents xml to array
		$i = 0;
		foreach ($offers_xml_object->element as $offer) {
		
			foreach( $offer->tagChildren as $child ) {
				$offers[$i][$child->tagName] = $child->tagData;	
			}
			$i++;
		}
		unset($i);				
		
		if ( $sorted ) ksort($offers);
		
		return $offers;
	}
}

?>