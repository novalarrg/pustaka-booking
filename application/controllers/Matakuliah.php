<?php 
class Matakuliah extends CI_Controller {
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode','kode matakuliah','trim|required|min_lenght[3]',
        array(
            'required' => '%s Wajib diisi.',
            'min_lenght' => '%s Minimal 3 karakter'
        ));

        $this->form_validation->set_rules('nama','nama matakuliah','required',
        array(
            'required' => '%s Wajib diisi.'
        ));

        $this->form_validation->set_rules('sks','sks','required',
        array(
            'required' => '%s Wajib diisi.'
        ));

        if ($this->form_validation->run() == false)
        {
            $this->load->view('view-form-matakuliah');
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