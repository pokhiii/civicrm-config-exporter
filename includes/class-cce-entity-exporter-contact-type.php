<?php

class CCE_Entity_Exporter_Contact_Type extends CCE_Entity_Exporter {
	public function __construct() {
		parent::__construct('ContactType', 'custom_fields.json');
	}
}
