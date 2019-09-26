<?php

/**
 *
 * @author Joan Jon <joanjon86@gmail.com>
 */

class Cielo_model extends CI_Model {

	// Constructor this Model
	public function __construct()
	{
		$this->load->database();
	}

	// Get ci details from DB
	public function get_ci($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('ci');
			return $query->result_array();
		}

		$query = $this->db->get_where('ci', array('id' => $id));
		return $query->row_array();
	}

	// Add ci in DB
	public function set_ci()
	{
		$this->load->helper('url');

		$data = array(
			'name' => $this->input->post('name'),
			'birthday' => $this->input->post('birthday'),
			'email' => $this->input->post('email'),
			'favorite_color' => $this->input->post('favorite_color')
		);

		return $this->db->insert('ci', $data);
	}

	// Delete ci in DB
	public function delete_ci($id = FALSE)
	{
		$this->db->delete('ci', array('id' => $id));
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// Update ci in DB
	public function update_ci($id = FALSE, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('ci', $data);
		return;
	}
}
