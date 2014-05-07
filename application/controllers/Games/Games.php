<?php
  class Games extends CI_Controller {

	  public function index() {
	  	echo 'Games index!';
	  }

	  public function viewGame($gameId) {
	    echo 'The specified id is ' . $gameId;
	  }
  }
?>
