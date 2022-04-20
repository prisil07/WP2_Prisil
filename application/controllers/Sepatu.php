<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class Sepatu extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => "Data Transaksi Sepatu",
            'title_konten' => "Form Pembelian Sepatu"
        ];
        $this->load->view('sepatu/index', $data);
    }
 
    public function view()
    {
        $this->form_validation->set_rules(
            'nama_pembeli',
            'Nama Pembeli',
            'required|min_length[3]',
            [
                'required' => "<div class='alert alert-danger' role='alert'>Nama Pembeli Tidak Boleh Kosong</div>",
                'min_length' => "<div class='alert alert-danger' role='alert'>Nama Pembeli Minimal 3 Karakter</div>"
            ]
        );
 
        $this->form_validation->set_rules(
            'no_hp',
            'Nomor Handphone',
            'required|min_length[9]',
            [
                'required' => "<div class='alert alert-danger' role='alert'>Nomor Handphone Harus di Isi</div>",
                'min_length' => "<div class='alert alert-danger' role='alert'>Nomor Handphone Terlalu Pendek</div>"
            ]
        );
        $this->form_validation->set_rules(
            'jumlah',
            'Jumlah',
            'required|min_length[1]',
            [
                'required' => "<div class='alert alert-danger' role='alert'>Jumlah Harus di Isi</div>",
                'min_length' => "<div class='alert alert-danger' role='alert'>Jumlah minimal 1 digit</div>",
            ]
        );
        if ($this->form_validation->run() != true) {
 
            $data = [
                'title_konten'  => "Data Transaksi Sepatu",
                'title'         => "Form Pembelian Sepatu",
            ];
 
            $this->load->view('sepatu/index', $data);
        } else {
            $this->load->model('PriceModel');
            $price = $this->PriceModel->price();
            $data = [
                'nama_pembeli'  => $this->input->post('nama_pembeli'),
                'no_hp'         => $this->input->post('no_hp'),
                'merk'          => $this->input->post('merk'),
                'ukuran'        => $this->input->post('ukuran'),
                'jumlah'        => $this->input->post('jumlah'),
                'title_konten'  => "Data Transaksi Sepatu",
                'title'         => "Data Transaksi",
                'berhasil'      => "<div class='alert alert-success' role='alert'>Data berhasil ditambahkan</div>",
                'harga'         => $price,
            ];
 
 
 
            function Rupiah($angka)
            {
                $data = "Rp " . number_format($angka, 2, ',', '.');
                return $data;
            }
 
            $this->load->view('sepatu/view', $data);
        }
    }
}