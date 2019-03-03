<?php

require APPPATH . '/libraries/BaseController.php';
 
class M_mutual extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mutual_model');
    } 

    /*
     * Listing of m_mutual
     */
    function index()
    {
        $data['m_mutual'] = $this->M_mutual_model->get_all_m_mutual();
        
        $data['_view'] = 'm_mutual/index';
        $data['cur_uri'] = 'mutual';
        $data['breadcrumb_title'] = 'Mutual';
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'Mutual';
        $this->loadViews('m_mutual/index',$data, NULL , NULL);
    }

    /*
     * Adding a new m_mutual
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'm_mut_name' => $this->input->post('m_mut_name'),
            );
            
            $m_mutual_id = $this->M_mutual_model->add_m_mutual($params);
            redirect('m_mutual/index');
        }
        else
        {            
            $data['_view'] = 'm_mutual/add';
            $data['cur_uri'] = 'mutual';
            $data['breadcrumb_title'] = 'Mutual';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'Mutual : Add';
            $this->loadViews('m_mutual/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a m_mutual
     */
    function edit($m_mut_id){   
        // check if the m_mutual exists before trying to edit it
        $data['m_mutual'] = $this->M_mutual_model->get_m_mutual($m_mut_id);
        
        if(isset($data['m_mutual']['m_mut_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'm_mut_name' => $this->input->post('m_mut_name'),
                );

                $this->M_mutual_model->update_m_mutual($m_mut_id,$params);            
                redirect('m_mutual/index');
            }
            else
            {
                $data['_view'] = 'm_mutual/edit';
                $data['cur_uri'] = 'mutual';
                $data['breadcrumb_title'] = 'Mutual';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'Mutual : Edit';
          $this->loadViews('m_mutual/edit',$data, NULL , NULL);
            }
        }
        else
            show_error('The m_mutual you are trying to edit does not exist.');
    } 

    /*
     * Deleting m_mutual
     */
    function remove($m_mut_id)
    {
        $m_mutual = $this->M_mutual_model->get_m_mutual($m_mut_id);

        // check if the m_mutual exists before trying to delete it
        if(isset($m_mutual['m_mut_id']))
        {
            $this->M_mutual_model->delete_m_mutual($m_mut_id);
            redirect('m_mutual/index');
        }
        else
            show_error('The m_mutual you are trying to delete does not exist.');
    }
    
}
