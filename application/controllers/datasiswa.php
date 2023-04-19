<?php
class Datasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('1formsiswa');
    }

    public function cetak()
    { {
            $data =
                [
                    'nama' => $this->input->post('nama'),
                    'NIS' => $this->input->post('NIS'),
                    'kelas' => $this->input->post('kelas'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'alamat' => $this->input->post('alamat'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                ];
            $this->load->view('1viewdatasiswa', $data);
        }
    }
}
