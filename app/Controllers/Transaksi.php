<?php
class Transaksi extends CI_Controller
{

    public function index()
    {

        $this->load->view('Admin\Transaksi');

    }

    public function cetak()
    {

        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required|min_length[3]');

        $this->form_validation->set_rules('nomorkendaraan', 'Nomor Kendaraan', 'required|min_length[3]');

        $this->form_validation->set_rules('nomorhandphone', 'Nomor Handphpne', 'required|min_length[3]');
        
        $this->form_validation->set_rules('nominal_transaksi', 'Total Bayar', 'required|min_length[3]');


        if ($this->form_validation->run() != true) {
            $this->load->view('Admin/Transaksi');
        } else {
            $data = [
                'namalengkap' => $this->input->post('namalengkap'),
                'nomorkendaraan' => $this->input->post('nomorkendaraan'),
                'nomorhandphone' => $this->input->post('nomorhandphone'),
                'Charging' => $this->input->post('Charging'),
                'nominal_transaksi' => $this->input->post('nominal_transaksi'),
                'Location' => $this->input->post('Location'),
            ];

            $this->load->view('Admin\detail_transaksi', $data);
        }
    }
}
