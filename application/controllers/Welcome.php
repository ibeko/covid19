<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 
	public function __construct()
    {
        parent::__construct();
        $this->load->model("pruebasmodel");

    }


	public function index()
	{
		  $arr = $this->pruebasmodel->getAll();
		  
		  print_r($arr);
		  //foreach ($arr as $ar) {
		  	//echo "<p>". $ar->name . "</p><br>";
		  //}
		  $id = array("id" => 1);
		  $arr2 = $this->pruebasmodel->get($id);
		  echo $arr2->name . "<br>";

		  print_r($arr2);
		  
	}

	public function insert()
	{
		$data =array(
			"name" => "can",
			"email" => "can@mail.com",
			"isActive" => 1,
			"createdAt" => date('Y-m-d H:i:s')
		);

		$insert =$this->pruebasmodel->insert($data);

		if($insert){
			echo "başarılı";
		}
	}

	public function update()
	{
		$where = array("id" => 4);
		$data =array(
			"name" => "can",
			"email" => "can@mail.com",
			"isActive" => "0",
			"createdAt" => date('Y-m-d H:i:s'),
		);

		$update =$this->pruebasmodel->update($where,$data);

		if($update) {
			echo "başarılı";
		}
	}

	public function delete($method)
	{	
		$id = array('id' => $method);
		$delete = $this->pruebasmodel->delete($id);
		if($delete) {
			echo "başarılı";
		}
	}

	public function test()
	{
		$tables = $this->db->list_tables();

		foreach ($tables as $table)
		{
		        $fields = $this->db->list_fields($table);

		        echo $table ."<br><br>";
				foreach ($fields as $field)
				{
				        echo $field . "<br>";
				}
				echo "<br>";
		}
		//$data =$this->pruebasmodel->getAll();
		//print_r($data);

	}
}

