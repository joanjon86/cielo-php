<?php
class Cielo extends CI_Controller {

	// Constructor this Controller
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cielo_model');
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	// This function to handle getting all ci
	public function index()
	{
		// Get all ci for list in the view
		$data['cielo'] = $this->cielo_model->get_ci();

		$this->load->view('cielo/index', $data);
	}

	/* This function to handle getting
      ci details based on ci id  */
	public function view($id = NULL)
	{
		// Get a ci based on id
		$data['cielo_item'] = $this->cielo_model->get_ci($id);

		if (empty($data['cielo_item']))
		{
			// If not exist show 404 page
			show_404();
		}

		$this->load->view('cielo/view', $data);
	}

	// This function is to handle how show create form of ci
	public function create()
	{
		$this->load->view('cielo/create');
	}

	// This function to handle add ci
	public function createSubmit()
	{
		$this->load->helper('form');

		//Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'required|is_unique[ci.name]');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[ci.email]');
		$this->form_validation->set_rules('favorite_color', 'Favorite Color', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			// If not valid send a messages errors
			$response = array(
				'status' => 'error',
				'message' => validation_errors()
			);
		}
		else
		{
			//If valid call function in model for insert.
			$this->cielo_model->set_ci();
			// Create array success
			$response = array(
				'status' => 'success',
				'message' => "CIELO ADDED SUCCESSFULLY.",
				'action' => 'create',
			);
		}
		// Send a messages
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	// This function to handle delete ci
	public function delete()
	{
		if ($this->cielo_model->delete_ci($this->input->post('id'))){
			// Create array success
			$response = array(
				'status' => 'success',
				'message' => "CIELO DELETED SUCCESSFULLY."
			);
			// Set flash data
			$this->session->set_flashdata('msg', 'CIELO DELETED SUCCESSFULLY.');
		} else {
			// If not delete send a messages errors
			$response = array(
				'status' => 'error',
				'message' => "COULD NOT DELETE."
			);
			// Set flash data
			$this->session->set_flashdata('msg-error', 'COULD NOT DELETE.');
		}
		// Send a messages
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	// This function is to handle how show update form of ci
	public function update($id = NULL)
	{
		// Get a ci based on id
		$data['cielo_item'] = $this->cielo_model->get_ci($id);

		if (empty($data['cielo_item']))
		{
			// If not exist show 404 page
			show_404();
		}

		$this->load->view('cielo/update', $data);
	}

	// This function to handle update ci
	public function updateSubmit($id = NULL)
	{
		$this->load->helper('form');

		//Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('favorite_color', 'Favorite Color', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			// If not valid send a messages errors
			$response = array(
				'status' => 'error',
				'message' => validation_errors()
			);
		}
		else
		{
			//If valid create array with data for update.
			$data = array(
				'name' => $this->input->post('name'),
				'birthday' => $this->input->post('birthday'),
				'email' => $this->input->post('email'),
				'favorite_color' => $this->input->post('favorite_color')
			);

			// Call function in model for update
			$this->cielo_model->update_ci($id, $data);
			// Create array with message success
			$response = array(
				'status' => 'success',
				'message' => "CIELO UPDATED SUCCESSFULLY.",
				'action' => 'update',
			);
		}

		// Send a messages
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
}
