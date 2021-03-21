<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        //load Dependencies

    }

    // List all your items
    public function index( $offset = 0)
    {
        $data['content'] = $this->db->get('identitas');
        
        $this->load->view('crud/index', $data);
        
    }

    // Add a new Item
    public function add()
    {
        $this->load->view('crud/add');
    }

    public function action_add()
    {
        $data = [
            'nama'=> $this->input->post('nama'),
            'status' => $this->input->post('status'),
            'jurusan' => $this->input->post('jurusan')
        ];

        $this->db->insert('identitas', $data);
        
        redirect('crud','refresh');
    }

    // Update one item
    public function update( $id = NULL )
    {
        $this->db->where('id', $id);
        $data['content'] = $this->db->get('identitas');
        
        $this->load->view('crud/update', $data);
        
    }

    public function action_update( $id = NULL )
    {
        $data = [
            'nama'=> $this->input->post('nama'),
            'status' => $this->input->post('status'),
            'jurusan' => $this->input->post('jurusan')
        ];

        $this->db->where('id', $id);
        $this->db->update('identitas', $data);
        
        redirect('crud','refresh');
    }

    // delete one Item
    public function delete( $id = NULL )
    {
        $this->db->where('id', $id);
        $this->db->delete('identitas');
        
        redirect('crud','refresh');
        
    }

    public function read( $id = NULL )
    {
        $this->db->where('id', $id);
        $data['content'] = $this->db->get('identitas');
        
        $this->load->view('crud/index', $data);
        
    }

}

/* End of file Controllername.php */

?>
