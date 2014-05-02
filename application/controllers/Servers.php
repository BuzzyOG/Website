<?php
  class Servers extends CI_Controller {

	  public function index() {
	  	echo 'Servers index!';
	  }
	  
	  public function viewServer($serverName) {
	    echo 'This is a specific server!';
	  }
  }
?>
