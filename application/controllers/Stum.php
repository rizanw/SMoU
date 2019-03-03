<?php

require APPPATH . '/libraries/BaseController.php';

class Stum extends BaseController{
    function __construct(){
        parent::__construct();
        $this->load->model('Stum_model');
    } 

    /*
     * Listing of sta
     */
    function index()
    {
        $data['sta'] = $this->Stum_model->get_all_sta();
        
        $data['_view'] = 'stum/index';
        $data['cur_uri'] = 'stum';
        $data['breadcrumb_title'] = 'Stum';
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'Stum';
        $this->loadViews('stum/index',$data, NULL , NULL);
    }

    /*
     * Adding a new stum
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'sta_name' => $this->input->post('sta_name'),
            );
            
            $stum_id = $this->Stum_model->add_stum($params);
            redirect('stum/index');
        }
        else
        {            
            $data['_view'] = 'stum/add';
            $data['cur_uri'] = 'stum';
            $data['breadcrumb_title'] = 'Stum';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'Stum : Add';
            $this->loadViews('stum/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a stum
     */
    function edit($sta_id)
    {   
        // check if the stum exists before trying to edit it
        $data['stum'] = $this->Stum_model->get_stum($sta_id);
        
        if(isset($data['stum']['sta_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'sta_name' => $this->input->post('sta_name'),
                );

                $this->Stum_model->update_stum($sta_id,$params);            
                redirect('stum/index');
            }
            else
            {
                $data['_view'] = 'stum/edit';
                $data['cur_uri'] = 'stum';
                $data['breadcrumb_title'] = 'Stum';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'Stum : Edit';
                $this->loadViews('stum/edit',$data, NULL , NULL);
            }
        }
        else
            show_error('The state you are trying to edit does not exist.');
    } 

    /*
     * Deleting stum
     */
    function remove($sta_id)
    {
        $stum = $this->Stum_model->get_stum($sta_id);

        // check if the stum exists before trying to delete it
        if(isset($stum['sta_id']))
        {
            $this->Stum_model->delete_stum($sta_id);
            redirect('stum/index');
        }
        else
            show_error('The state you are trying to delete does not exist.');
    }
    
}
