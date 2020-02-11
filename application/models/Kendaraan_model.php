<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan_model extends CI_Model
{
    private $_table = "kendaraan"; // nama tabel

    public $id_kendaraan;
    public $name;
    public $image = "default.jpg";
    public $jenis;
    public $nopol;
    public $merk;
    public $status;

    public function rules() // untuk validasi input
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'],
            
            ['field' => 'nopol',
            'label' => 'Nopol',
            'rules' => 'required'],

            ['field' => 'merk',
            'label' => 'Merk',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kendaraan" => $id])->row();
    }

    public function save()
    {
        $this->db->insert('kendaran',$object);
        $object = array('name'=>$this->input->post('name'),
						'jenis'=>$this->input->post('jenis'),
                        'nopol'=>$this->input->post('nopol'),
                        'merk'=>$this->input->post('merk'),
                        'status'=>$this->input->post('status'),
                        'image'=>$this->upload->data('file_name')
			);
		$this->db->insert('user',$object);

        // $post = $this->input->post(); // ambil data form
        // $this->id_kendaraan = uniqid();
        // $this->name = $post["name"];
        // $this->jenis = $post["jenis"];
        // $this->nopol = $post["nopol"];
        // $this->merk = $post["merk"];
        // $this->status = $post["status"];
        // return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kendaraan = $post["id"];
        $this->name = $post["name"];
        $this->jenis = $post["jenis"];
        $this->nopol = $post["nopol"];
        $this->merk = $post["merk"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('id_kendaraan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kendaraan" => $id));
    }
}