<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Auditor : ogan
	 * Purpose : global controller
	 * date : 25 July 2017
	 */

	function __construct() {
	
		parent::__construct();
		$this->load->model("topic_model");
		$this->load->library('form_validation');

	
	}

	public function index()
	{
		$data["getTopic"]	= $this->topic_model->getListTopic();
	
		$data["view"] = "dashboard";
		$this->load->view('content/body_content',$data);
	}
	
	function newTopic()
	{

		$getCategory  	 = $this->topic_model->getCategoryData();
		
		$data["getCategory"]	= $getCategory;
		$data["view"] 			= "f_v3w/new_topic";
		$this->load->view('content/body_content',$data);
	}

	function insertTopic()
	{

		$this->form_validation->set_rules('title_topic', 'Judul', 'required');
		$this->form_validation->set_rules('category', 'Kategori', 'required');
		$this->form_validation->set_rules('desc', 'Topik', 'required');


		if ($this->form_validation->run() == FALSE)
        {
          	$feed["status"] 	= FALSE;
			$feed["message"]	= validation_errors();

        }else{

        	$link 	= str_replace(' ', '-', $_POST["title_topic"]);
			$link   = strtolower($link);
			$link   = preg_replace('/[^A-Za-z0-9\-]/', '', $link);
			
			$charray = array_merge(range('a','z'), range('0','9'));


        	$dataTopic = array(
							"Title" 		=> htmlspecialchars($_POST["title_topic"]),
						#	"IDCategory" 	=> $_POST["category"],
							"IDSubCategory" => $_POST["subcategory"],
							"UserID"		=> "12",
							"Content"		=> $_POST["desc"],
							"Status"		=> "1",
							"TotalView"		=> "0",
							"CreatedBy"		=> "am",
							"CreatedDate"	=> date("y-m-d h:m:s"), 
							"ModifiedBy"	=> "am",
							"ModifiedDate"  => date("Y-m-d h:m:s"),
						//	"link"  		=> time()."_".$link.".html"
							
						 );
			$insert_id = $this->topic_model->insertTopicData($dataTopic);

			if($insert_id != FALSE)
			{
				

				$data["link_question"] = date('y/m/d')."/".time()."/".$link;
				$this->topic_model->set_link($insert_id,$data);
				$feed["status"] 	= TRUE;
				$feed["message"]	= "Topic berhasil";

			}else{

				$feed["status"] 	= FALSE;
				$feed["message"]	= "Tidak Berhasil Menyimpan. Silahkan Refresh halaman";
			}


        }

		echo json_encode($feed);
	}

	
	function ajax($page = null){
		switch ($page) {
			case 'getSubCategory':

					$id_category = $_POST["id_category"];

					$get = $this->topic_model->getSubCategoryData($id_category);

					$option = "";

					foreach ($get as $key => $opt) {
						$option .= "<option value='".$opt->ID."'>".$opt->Name."</option>";
					}


					$feed["status"] 	= TRUE;
					$feed["option"]		= $option;

					echo json_encode($feed);

			break;
		}

	}


	function topic($url1,$url2,$url3,$url4,$url5)
	{	



		echo $_GET["id"];
		$que_url =  $url1."/".$url2."/".$url3."/".$url4."/".$url5;

		$getTopicByLink = $this->topic_model->getTopicByLink($que_url);

		$data["topicResult"] = $getTopicByLink;
		$data["view"] 		= "f_v3w/view_topic";
		$this->load->view('content/body_content',$data);
	}




	





	
}
