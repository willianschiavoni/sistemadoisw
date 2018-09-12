<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Preco_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get preco by IDPreco
     */
    function get_preco($IDPreco)
    {
        return $this->db->get_where('Preco',array('IDPreco'=>$IDPreco))->row_array();
    }
        
    /*
     * Get all precos
     */
    function get_all_precos()
    {
        $this->db->order_by('IDPreco', 'desc');
        return $this->db->get('Preco')->result_array();
    }
        
    /*
     * function to add new preco
     */
    function add_preco($params)
    {
        $this->db->insert('Preco',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update preco
     */
    function update_preco($IDPreco,$params)
    {
        $this->db->where('IDPreco',$IDPreco);
        return $this->db->update('Preco',$params);
    }
    
    /*
     * function to delete preco
     */
    function delete_preco($IDPreco)
    {
        return $this->db->delete('Preco',array('IDPreco'=>$IDPreco));
    }
}