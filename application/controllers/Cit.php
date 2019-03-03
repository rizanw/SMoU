<?php

require APPPATH . '/libraries/BaseController.php';

class Cit extends BaseController{
    function __construct(){
        parent::__construct();
        $this->load->model('Cit_model');
    } 

    /*
     * Listing of cit
     */
    function index()
    {
        $data['cit'] = $this->Cit_model->get_all_cit();
        
        $data['_view'] = 'cit/index';
        $data['cur_uri'] = 'cit';
        $data['breadcrumb_title'] = 'City';
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'City';
        $this->loadViews('cit/index',$data, NULL , NULL);
    }

    /*
     * Adding a new cit
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'cit_name' => $this->input->post('cit_name'),
            );
            
            $cit_id = $this->Cit_model->add_cit($params);
            redirect('cit/index');
        }
        else
        {            
            $data['_view'] = 'cit/add';
            $data['cur_uri'] = 'cit';
            $data['breadcrumb_title'] = 'City';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'City : Add';
            $this->loadViews('cit/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a cit
     */
    function edit($cit_id)
    {   
        // check if the cit exists before trying to edit it
        $data['cit'] = $this->Cit_model->get_cit($cit_id);
        
        if(isset($data['cit']['cit_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'cit_name' => $this->input->post('cit_name'),
                );

                $this->Cit_model->update_cit($cit_id,$params);            
                redirect('cit/index');
            }
            else
            {
                $data['_view'] = 'cit/edit';
                $data['cur_uri'] = 'cit';
                $data['breadcrumb_title'] = 'City';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'City : Edit';
                $this->loadViews('cit/edit',$data, NULL , NULL);
            }
        }
        else
            show_error('The city you are trying to edit does not exist.');
    } 

    /*
     * Deleting cit
     */
    function remove($cit_id)
    {
        $cit = $this->Cit_model->get_cit($cit_id);

        // check if the cit exists before trying to delete it
        if(isset($cit['cit_id']))
        {
            $this->Cit_model->delete_cit($cit_id);
            redirect('cit/index');
        }
        else
            show_error('The city you are trying to delete does not exist.');
    }
    
}
