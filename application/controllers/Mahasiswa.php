<?php 
class Mahasiswa extends CI_Controller{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    { $this->form_validation->set_rules('kode','kode matakuliah','required|min_lenght[3]', ['required' => 'kode matakuliah harus diisi', 'min_lenght' => 'kode terlalu pendek']); 
    
    if ($this->form_validation->run() != true) {$this->load->view('view-from-matakuliah');
    }
    else {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
    ];

    $this->load->view('view-data-matakuliah', $data);

    }
    
    }
    
    
    
}