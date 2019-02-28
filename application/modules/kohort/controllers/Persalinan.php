<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Persalinan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien/pasien_model','pasien');
        $this->load->model('kohort/persalinan_model','persalinan');
	}

    /**
     * index file
     */
	public function add()
	{
		cek_session_admin();
		$data['pasien'] = $this->pasien->get_all();
		$this->load->view('add_kohort_persalinan',$data);
	}

    public function add_kohort()
    {
        $tgl = date('Y-m-d');
        $data = array(

            'nik' => $this->input->post('nik'),
            'usia_kehamilan' => $this->input->post('usia_kehamilan'),
            'kala1_tgl' => $this->input->post('kala1_tgl'),
            'kala1_waktu' => $this->input->post('kala1_waktu'),
            'kala2_tgl' => $this->input->post('kala2_tgl'),
            'kala2_waktu' => $this->input->post('kala2_waktu'),
            'bayilahir_tgl' => $this->input->post('bayilahir_tgl'),
            'bayilahir_waktu' => $this->input->post('bayilahir_waktu'),

            'plasenta_tgl' => $this->input->post('plasenta_tgl'),
            'plasenta_waktu' => $this->input->post('plasenta_waktu'),
            'usia_phpt' => $this->input->post('usia_phpt'),
            'presentasi' => $this->input->post('presentasi'),
            'berat_bayi' => $this->input->post('berat_bayi'),
            'cara_persalinan' => $this->input->post('cara_persalinan'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'penolong' => $this->input->post('penolong'),
            'injeksi' => $this->input->post('injeksi'),
            'tali_pusat' => $this->input->post('tali_pusat'),
            'masase' => $this->input->post('masase'),
            'keadaan_ibu' => $this->input->post('keadaan_ibu'),
            'arv' => $this->input->post('arv'),
            'obat_anti_malaria' => $this->input->post('obat_anti_malaria'),
            'obat_anti_tb' => $this->input->post('obat_anti_tb'),
            'distosia' => $this->input->post('distosia'),
            'hdk' => $this->input->post('hdk'),
            'ppp' => $this->input->post('ppp'),
            'infeksi' => $this->input->post('infeksi'),
            'puskesmas' => $this->input->post('puskesmas'),
            'rs_bersalin' => $this->input->post('rs_bersalin'),
            'rs' => $this->input->post('rs')

        );
        $this->persalinan->save($data);

        echo json_encode(array("status" => TRUE));
    }








	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

        if($this->input->post('nik') == '')
        {
            $data['inputerror'][] = 'nik';
            $data['error_string'][] = 'Masukkan NIK Pasien';
            $data['status'] = FALSE;
        }


		if($this->input->post('nm_pasien') == '')
		{
			$data['inputerror'][] = 'nm_pasien';
			$data['error_string'][] = 'Masukkan Nama pasien';
			$data['status'] = FALSE;
		}


        if($this->input->post('username') == '')
        {
            $data['inputerror'][] = 'username';
            $data['error_string'][] = 'Masukkan Username';
            $data['status'] = FALSE;
        }

        if($this->input->post('password') == '')
        {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Masukkan Password';
            $data['status'] = FALSE;
        }



		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}

	}

}
