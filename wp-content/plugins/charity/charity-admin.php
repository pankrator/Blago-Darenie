<?php
	
	add_action('admin_menu', 'charity_admin_action');

	function charity_admin_action() {
		add_options_page("Charity management", "Charity Management", 1, "ASDAD", "action");
	}
	
	function action() {
		include("admin/settings-section.php");
	}

?>