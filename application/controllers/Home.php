<?php

class Home extends CI_Controller
{
	public function index()
	{
		// set location
		date_default_timezone_set('Europe/Istanbul');
	    //header("Access-Control-Allow-Origin: *");
	    //header('Content-type: application/json');
	    
		//set map api url
		$url = "https://coronavirus-19-api.herokuapp.com/countries";

		//call api
		$json = file_get_contents($url);
		$json = json_decode($json);
		$viewData['json'] = $json;

		return $this->load->view('home_view',$viewData);
	}

	public function test()
	{
		return $this->load->view('test_view');
	}
}