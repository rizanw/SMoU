<?php

require APPPATH . '/libraries/BaseController.php';

class M_place extends BaseController{
    function __construct(){
        parent::__construct();
        $this->load->model('M_place_model');
    } 

    /*
     * Listing of m_place
     */
    function index()
    {
        $data['m_place'] = $this->M_place_model->get_all_m_place();
        
        $data['_view'] = 'm_place/index';
        $data['cur_uri'] = 'place';
        $data['breadcrumb_title'] = 'Place';

        $this->load->model('Stum_model');
        $data['all_sta'] = $this->Stum_model->get_all_sta();
        $this->load->model('Cit_model');
        $data['all_cit'] = $this->Cit_model->get_all_cit();
        
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'Place';
        $this->loadViews('m_place/index',$data, NULL , NULL);
    }

    /*
     * Adding a new m_place
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'm_pla_name' => $this->input->post('m_pla_name'),
				'sta_id' => $this->input->post('sta_id'),
				'cit_id' => $this->input->post('cit_id'),
            );
            
            $m_place_id = $this->M_place_model->add_m_place($params);
            redirect('m_place/index');
        }
        else
        {            
            $this->load->model('Stum_model');
            $data['all_sta'] = $this->Stum_model->get_all_sta();
            $this->load->model('Cit_model');
            $data['all_cit'] = $this->Cit_model->get_all_cit();
            $data['_view'] = 'm_place/add';
            $data['cur_uri'] = 'place';
            $data['breadcrumb_title'] = 'Place';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'Place : Add';
            $this->loadViews('m_place/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a m_place
     */
    function edit($m_pla_id)
    {   
        // check if the m_place exists before trying to edit it
        $data['m_place'] = $this->M_place_model->get_m_place($m_pla_id);
        
        if(isset($data['m_place']['m_pla_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'm_pla_name' => $this->input->post('m_pla_name'),
					'sta_id' => $this->input->post('sta_id'),
					'cit_id' => $this->input->post('cit_id'),
                );

                $this->M_place_model->update_m_place($m_pla_id,$params);            
                redirect('m_place/index');
            }
            else
            {
                $this->load->model('Stum_model');
                $data['all_sta'] = $this->Stum_model->get_all_sta();
                $this->load->model('Cit_model');
                $data['all_cit'] = $this->Cit_model->get_all_cit();
                $data['_view'] = 'm_place/edit';
                $data['cur_uri'] = 'place';
                $data['breadcrumb_title'] = 'Place';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'Place : Edit';
                $this->loadViews('m_place/edit',$data, NULL , NULL);
            }
        }
        else
            show_error('The country you are trying to edit does not exist.');
    } 

    /*
     * Deleting m_place
     */
    function remove($m_pla_id)
    {
        $m_place = $this->M_place_model->get_m_place($m_pla_id);

        // check if the m_place exists before trying to delete it
        if(isset($m_place['m_pla_id']))
        {
            $this->M_place_model->delete_m_place($m_pla_id);
            redirect('m_place/index');
        }
        else
            show_error('The country you are trying to delete does not exist.');
    }
    
}
