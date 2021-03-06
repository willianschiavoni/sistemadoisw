<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Filial extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Filial_model');
    } 

    /*
     * Listing of filiais
     */
    function index()
    {
        $data['filiais'] = $this->Filial_model->get_all_filiais();
        
        $data['_view'] = 'filial/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new filial
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'IDPessoaFilial' => $this->input->post('IDPessoaFilial'),
            );
            
            $filial_id = $this->Filial_model->add_filial($params);
            redirect('filial/index');
        }
        else
        {
			$this->load->model('Pessoa_model');
			$data['all_pessoas'] = $this->Pessoa_model->get_all_pessoas();
            
            $data['_view'] = 'filial/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a filial
     */
    function edit($IDFilial)
    {   
        // check if the filial exists before trying to edit it
        $data['filial'] = $this->Filial_model->get_filial($IDFilial);
        
        if(isset($data['filial']['IDFilial']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'IDPessoaFilial' => $this->input->post('IDPessoaFilial'),
                );

                $this->Filial_model->update_filial($IDFilial,$params);            
                redirect('filial/index');
            }
            else
            {
				$this->load->model('Pessoa_model');
				$data['all_pessoas'] = $this->Pessoa_model->get_all_pessoas();

                $data['_view'] = 'filial/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The filial you are trying to edit does not exist.');
    } 

    /*
     * Deleting filial
     */
    function remove($IDFilial)
    {
        $filial = $this->Filial_model->get_filial($IDFilial);

        // check if the filial exists before trying to delete it
        if(isset($filial['IDFilial']))
        {
            $this->Filial_model->delete_filial($IDFilial);
            redirect('filial/index');
        }
        else
            show_error('The filial you are trying to delete does not exist.');
    }
    
}
