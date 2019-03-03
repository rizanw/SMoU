<?php

require APPPATH . '/libraries/BaseController.php';
 
class M_partner extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_partner_model');
    } 

    /*
     * Listing of m_partner
     */
    function index(){
        $data['m_partner'] = $this->M_partner_model->get_all_m_partner();
        $data['cur_uri'] = 'partner';
        $data['breadcrumb_title'] = 'Partner';
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'Partner';        
        $data['_view'] = 'm_partner/index';
        $this->loadViews('m_partner/index',$data, NULL , NULL);
    }

    /*
     * Adding a new m_partner
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'm_par_name' => $this->input->post('m_par_name'),
				'm_par_detail' => $this->input->post('m_par_detail'),
            );
            
            $m_partner_id = $this->M_partner_model->add_m_partner($params);
            redirect('m_partner/index');
        }
        else
        {            
            $data['_view'] = 'm_partner/add';
            $data['cur_uri'] = 'partner';
            $data['breadcrumb_title'] = 'Partner';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'Partner : Add';
            $this->loadViews('m_partner/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a m_partner
     */
    function edit($m_par_id)
    {   
        // check if the m_partner exists before trying to edit it
        $data['m_partner'] = $this->M_partner_model->get_m_partner($m_par_id);
        
        if(isset($data['m_partner']['m_par_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'm_par_name' => $this->input->post('m_par_name'),
					'm_par_detail' => $this->input->post('m_par_detail'),
                );

                $this->M_partner_model->update_m_partner($m_par_id,$params);            
                redirect('m_partner/index');
            }
            else
            {
                $data['_view'] = 'm_partner/edit';
                $data['cur_uri'] = 'partner';
                $data['breadcrumb_title'] = 'Partner';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'Partner : Edit';
                $this->loadViews('m_partner/edit',$data, NULL , NULL);
            }
        }
        else
            show_error('The m_partner you are trying to edit does not exist.');
    } 

    /*
     * Deleting m_partner
     */
    function remove($m_par_id)
    {
        $m_partner = $this->M_partner_model->get_m_partner($m_par_id);

        // check if the m_partner exists before trying to delete it
        if(isset($m_partner['m_par_id']))
        {
            $this->M_partner_model->delete_m_partner($m_par_id);
            redirect('m_partner/index');
        }
        else
            show_error('The m_partner you are trying to delete does not exist.');
    }
    
}
