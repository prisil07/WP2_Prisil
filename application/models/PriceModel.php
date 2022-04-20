<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class PriceModel extends CI_Model
{
    public function price()
    {
        if ($this->input->post('merk') == "Nike") {
            $data = 375000;
            return $data;
        }
        if ($this->input->post('merk') == "Adidas") {
            $data = 300000;
            return $data;
        }
        if ($this->input->post('merk') == "Kickers") {
            $data = 250000;
            return $data;
        }
        if ($this->input->post('merk') == "Eiger") {
            $data = 275000;
            return $data;
        }
        if ($this->input->post('merk') == "Bucherri") {
            $data = 400000;
            return $data;
        }
    }
}