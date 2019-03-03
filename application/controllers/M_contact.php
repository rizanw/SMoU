<?php

require APPPATH . '/libraries/BaseController.php';
 
class M_contact extends BaseController{
    function __construct(){
        parent::__construct();
        $this->load->model('M_contact_model');
    } 

    /*
     * Listing of m_contact
     */
    function index(){
        $data['m_contact'] = $this->M_contact_model->get_all_m_contact();
        
        $data['_view'] = 'm_contact/index';
        $data['cur_uri'] = 'contact';
        $data['breadcrumb_title'] = 'Contact';

        $this->load->model('M_place_model');
            $data['all_m_place'] = $this->M_place_model->get_all_m_place();
            
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'Contact';
        $this->loadViews('m_contact/index',$data, NULL , NULL);
    }

    /*
     * Adding a new m_contact
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('m_con_email','M Con Email','valid_email');
		$this->form_validation->set_rules('m_con_phone','M Con Phone','numeric');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'm_con_name' => $this->input->post('m_con_name'),
				'm_pla_id' => $this->input->post('m_pla_id'),
				'm_con_phone' => $this->input->post('m_con_phone'),
				'm_con_email' => $this->input->post('m_con_email'),
				'm_con_role' => $this->input->post('m_con_role'),
            );
            
            $m_contact_id = $this->M_contact_model->add_m_contact($params);
            redirect('m_contact/index');
        }
        else
        {          
            $this->load->model('M_place_model');
            $data['all_m_place'] = $this->M_place_model->get_all_m_place();  
            $data['_view'] = 'm_contact/add';
            $data['cur_uri'] = 'contact';
            $data['breadcrumb_title'] = 'Contact';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'Contact : Add';
            $this->loadViews('m_contact/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a m_contact
     */
    function edit($m_con_id)
    {   
        // check if the m_contact exists before trying to edit it
        $data['m_contact'] = $this->M_contact_model->get_m_contact($m_con_id);
        
        if(isset($data['m_contact']['m_con_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('m_con_email','M Con Email','valid_email');
			$this->form_validation->set_rules('m_con_phone','M Con Phone','numeric');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'm_con_name' => $this->input->post('m_con_name'),
					'm_pla_id' => $this->input->post('m_pla_id'),
					'm_con_phone' => $this->input->post('m_con_phone'),
					'm_con_email' => $this->input->post('m_con_email'),
					'm_con_role' => $this->input->post('m_con_role'),
                );

                $this->M_contact_model->update_m_contact($m_con_id,$params);            
                redirect('m_contact/index');
            }
            else
            {
                $this->load->model('M_place_model');
                $data['all_m_place'] = $this->M_place_model->get_all_m_place();
                $data['_view'] = 'm_contact/edit';
                $data['cur_uri'] = 'contact';
                $data['breadcrumb_title'] = 'Contact';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'Contact : Edit';
                $this->loadViews('m_contact/edit',$data, NULL , NULL);
            }
        }
        else
            show_error('The contact you are trying to edit does not exist.');
    } 

    /*
     * Deleting m_contact
     */
    function remove($m_con_id)
    {
        $m_contact = $this->M_contact_model->get_m_contact($m_con_id);

        // check if the m_contact exists before trying to delete it
        if(isset($m_contact['m_con_id']))
        {
            $this->M_contact_model->delete_m_contact($m_con_id);
            redirect('m_contact/index');
        }
        else
            show_error('The contact you are trying to delete does not exist.');
    }
    
}
