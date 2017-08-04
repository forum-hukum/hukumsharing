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
		$get = $this->db->query(" SELECT a.*,count(b.id_question) as count_view from tb_question as a LEFT JOIN tb_view_question as b ON b.id_question = a.ID GROUP BY a.ID ");
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

	function getAnswersByQuestion($id_question)
	{
		$getAns = $this->db->query("SELECT * from tb_answer where `QuestionID` = '".$id_question."'");
		return $getAns->result();
	}

	function increase_view($aV)
	{
		
		$this->db->insert("tb_view_question",$aV);
	}

	function checkView($id_question,$ip,$date_now)
	{
		$get = $this->db->query("SELECT * from tb_view_question where id_question = '".$id_question."' AND ip_user = '".$ip."' AND date = '".$date_now."'  ");
		if($get->num_rows() >= 1 )
		{
			return true;
		}else{
			return false;
		}
	}

	/*function count_view($id_question)
	{
		$get = $this->db->query("SELECT * from tb_view_question where id_question = '".$id_question."'");
		return $get->num_rows();
	}*/
	
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */