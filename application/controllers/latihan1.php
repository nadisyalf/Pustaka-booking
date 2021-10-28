<?php
class latihan1 extends CI_Controller
{
    public function index ()
    {
        echo "Selamat Datang..
                Salmat belajar Web Programing";
        //$this->load->view('view-latihan1');
    }
    public penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1')
        $hasil =$this->Model_latihan1->jmulah($n1,n2);
        echo "hasil Penjumlahan dari".$n1."+".$n2."="
    }
}
