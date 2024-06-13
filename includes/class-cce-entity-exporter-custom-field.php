<?php

class CCE_Entity_Exporter_Custom_Field extends CCE_Entity_Exporter {
	public function __construct() {
		parent::__construct('CustomField', 'contact_types.json');
	}
}
