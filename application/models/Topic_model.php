<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
	 * Auditor : ogan
	 * Purpose : global Model
	 * date : 25 July 2017
*/
class Topic_model extends CI_Model
{

	function getCategoryData()
	{
		$query = $this->db->query("SELECT * from tb_category");
		return $query->result();
	}

	function getSubCategoryData($id_category)
	{
		$query = $this->db->query("SELECT * from tb_category_sub where IDCategory = '".$id_category."'");
		return $query->result();
	}

	function insertTopicData($dataTopic){
		$this->db->insert("tb_question",$dataTopic);
		if($this->db->affected_rows() > 0)
		{
			return $this->db->insert_id();
		}else{
			return false;
		}
	}


	function findWord()
	{
		$words = $this->db->query("SELECT * from tb_worst_word");
		return $word->result();  
	}

	function set_link($id_topic,$data)
	{
		$this->db->where("ID",$id_topic);
		$this->db->update("tb_question",$data);
	}

	function getListTopic()
	{
		$get = $this->db->query("SELECT * from tb_question");
		return $get->result();
	}

	function count_ans($id_question)
	{
		$get_ans = $this->db->query("SELECT * from tb_answer where QuestionID = '".$id_question."'");
		return $get_ans->num_rows();	
	}

	function getTopicByLink($que_url)
	{
		$getTopic = $this->db->query("SELECT * from tb_question where `link_question` = '".$que_url."'");
		return $getTopic->row();
	}
	
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */