<?php
  class Servers extends CI_Controller {

	  public function index() {
	  	echo 'Servers index!';
	  }
	  
	  public function viewServer($serverId) {
	    echo 'The specified id is ' . $serverId;
	  }
  }
?>
