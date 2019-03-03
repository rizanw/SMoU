<?php

require APPPATH . '/libraries/BaseController.php';

class M_moua extends BaseController{
    function __construct(){
        parent::__construct();
        $this->load->model('M_moua_model');
    } 

    /*
     * Listing of m_moua
     */
    function index(){
        $data['m_moua'] = $this->M_moua_model->get_all_m_moua();
        $data['_view'] = 'm_moua/index';
        $data['cur_uri'] = 'moua';
        $data['breadcrumb_title'] = 'MOUA';

         $this->load->model('M_place_model');
            $data['all_m_place'] = $this->M_place_model->get_all_m_place();

            $this->load->model('M_partner_model');
            $data['all_m_partner'] = $this->M_partner_model->get_all_m_partner();

            $this->load->model('M_contact_model');
            $data['all_m_contact'] = $this->M_contact_model->get_all_m_contact();

            $this->load->model('M_mutual_model');
            $data['all_m_mutual'] = $this->M_mutual_model->get_all_m_mutual();
            
        $data['breadcrumb_item'] = '';
        $data['page_title'] = 'MOUA';
        $this->loadViews('m_moua/index',$data, NULL , NULL);
    }

    /*
     * Adding a new m_moua
     */
    function add(){   
        if(isset($_POST) && count($_POST) > 0){   

            //upload docs moua
            $config['upload_path'] = './dir/docs';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $this->load->library('upload', $config);

            $params = array(
                'm_moua_type' => $this->input->post('m_moua_type'),
                'm_pla_id' => $this->input->post('m_pla_id'),
                'm_par_id' => $this->input->post('m_par_id'),
                'm_con_id' => $this->input->post('m_con_id'),
                'm_mut_id' => $this->input->post('m_mut_id'),
            );

            if(!$this->upload->do_upload('moua_doc')){
                $error = array('error' => $this->upload->display_errors());
                $m_moua_id = $this->M_moua_model->add_m_moua($params);
                redirect('m_moua/index');
            }else{
                $upload_data = $this->upload->data();
                $params['m_moua_doc'] = $upload_data['file_name'];
                $m_moua_id = $this->M_moua_model->add_m_moua($params);
                redirect('m_moua/index');
            }
        }else{        
            $this->load->model('M_place_model');
            $data['all_m_place'] = $this->M_place_model->get_all_m_place();

            $this->load->model('M_partner_model');
            $data['all_m_partner'] = $this->M_partner_model->get_all_m_partner();

            $this->load->model('M_contact_model');
            $data['all_m_contact'] = $this->M_contact_model->get_all_m_contact();

            $this->load->model('M_mutual_model');
            $data['all_m_mutual'] = $this->M_mutual_model->get_all_m_mutual();    
            $data['_view'] = 'm_moua/add';
            $data['cur_uri'] = 'moua';
            $data['breadcrumb_title'] = 'MOUA';
            $data['breadcrumb_item'] = 'Add';
            $data['page_title'] = 'MOU : Add';
            $this->loadViews('m_moua/add',$data, NULL , NULL);
        }
    }  

    /*
     * Editing a m_moua
     */
    function edit($m_moua_id){   
        // check if the m_moua exists before trying to edit it
        $data['m_moua'] = $this->M_moua_model->get_m_moua($m_moua_id);
        
        if(isset($data['m_moua']['m_moua_id'])){
            if(isset($_POST) && count($_POST) > 0){   
                //upload docs moua
                $config['upload_path'] = './dir/docs';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $this->load->library('upload', $config);

                $params = array(
                    'm_moua_type' => $this->input->post('m_moua_type'),
                    'm_pla_id' => $this->input->post('m_pla_id'),
                    'm_par_id' => $this->input->post('m_par_id'),
                    'm_con_id' => $this->input->post('m_con_id'),
                    'm_mut_id' => $this->input->post('m_mut_id'),
                );

                if(!$this->upload->do_upload('moua_doc')){
//                  $error = array('error' => $this->upload->display_errors());
                    $this->M_moua_model->update_m_moua($m_moua_id,$params);            
                    redirect('m_moua/index');
                }else{
                    $upload_data = $this->upload->data();
                    $params['m_moua_doc'] = $upload_data['file_name'];
                    $this->M_moua_model->update_m_moua($m_moua_id,$params);            
                    redirect('m_moua/index');
                }
            }else{
                $this->load->model('M_place_model');
                $data['all_m_place'] = $this->M_place_model->get_all_m_place();

                $this->load->model('M_partner_model');
                $data['all_m_partner'] = $this->M_partner_model->get_all_m_partner();

                $this->load->model('M_contact_model');
                $data['all_m_contact'] = $this->M_contact_model->get_all_m_contact();

                $this->load->model('M_mutual_model');
                $data['all_m_mutual'] = $this->M_mutual_model->get_all_m_mutual();
                $data['_view'] = 'm_moua/edit';
                $data['cur_uri'] = 'moua';
                $data['breadcrumb_title'] = 'MOUA';
                $data['breadcrumb_item'] = 'Edit';
                $data['page_title'] = 'MOUA : Edit';        
                $this->loadViews('m_moua/edit',$data, NULL , NULL);

            }
        }
        else
            show_error('The MoU/MoA you are trying to edit does not exist.');
    } 

    /*
     * Deleting m_moua
     */
    function remove($m_moua_id)
    {
        $m_moua = $this->M_moua_model->get_m_moua($m_moua_id);

        // check if the m_moua exists before trying to delete it
        if(isset($m_moua['m_moua_id']))
        {
            $this->M_moua_model->delete_m_moua($m_moua_id);
            redirect('m_moua/index');
        }
        else
            show_error('The MoU/MoA you are trying to delete does not exist.');
    }
    
}
