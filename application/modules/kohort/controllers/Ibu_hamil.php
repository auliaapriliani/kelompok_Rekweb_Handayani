<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_hamil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien/pasien_model','pasien');
        $this->load->model('kohort/ibu_hamil_model','ibu_hamil');
	}

    /**
     * index file
     */
	public function add()
	{
		cek_session_admin();
		$data['pasien'] = $this->pasien->get_all();
		$this->load->view('add_kohort_ibu_hamil',$data);
	}

    public function add_kohort()
    {
        $tgl = date('Y-m-d');
        $data = array(

            'tgl_periksa' => $tgl,
            'nik' => $this->input->post('nik'),
            'usia_kehamilan' => $this->input->post('usia_kehamilan'),
            'trimester_ke' => $this->input->post('trimester_ke'),
            'anamnesis' => $this->input->post('anamnesis'),
            'bb' => $this->input->post('bb'),
            'tb' => $this->input->post('tb'),
            'lila' => $this->input->post('lila'),
            'status_gizi' => $this->input->post('status_gizi'),
            'refleks' => $this->input->post('refleks'),
            'djj' => $this->input->post('djj'),
            'pap' => $this->input->post('pap'),
            'tbj' => $this->input->post('tbj'),
            'jumlah_janin' => $this->input->post('jumlah_janin'),
            'persentasi' => $this->input->post('persentasi'),
            'pelayanan_injeksi' => $this->input->post('pelayanan_injeksi'),
            'pelayanan_kia' => $this->input->post('pelayanan_kia'),
            'pelayanan_fe' => $this->input->post('pelayanan_fe'),
            'lab_hb' => $this->input->post('lab_hb'),
            'pretein_urin' => $this->input->post('pretein_urin'),
            'gula_darah' => $this->input->post('gula_darah'),
            'thalasemia' => $this->input->post('thalasemia'),
            'sifilis' => $this->input->post('sifilis'),
            'hbs' => $this->input->post('hbs'),
            'vct' => $this->input->post('vct'),
            'serologi' => $this->input->post('serologi'),
            'arv' => $this->input->post('arv'),
            'malaria' => $this->input->post('malaria'),
            'obat' => $this->input->post('obat'),
            'kelambu' => $this->input->post('kelambu'),
            'tb2' => $this->input->post('tb2'),
            'obat2' => $this->input->post('obat2'),
            'resiko' => $this->input->post('resiko'),
            'hdk' => $this->input->post('hdk'),
            'abortus' => $this->input->post('abortus'),
            'pendarahan' => $this->input->post('pendarahan'),
            'infeksi' => $this->input->post('infeksi'),
            'kpd' => $this->input->post('kpd'),
            'lainnya' => $this->input->post('lainnya')
        );
        $this->ibu_hamil->save($data);

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
