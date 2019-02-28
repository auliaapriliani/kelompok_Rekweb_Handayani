<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien_model','pasien');
        $this->load->model('kohort/ibu_hamil_model','ibu_hamil');
	}

    /**
     * index file
     */
	public function index()
	{
		cek_session_admin();
		$this->load->view('pasien_view');
	}


    /**
     * detail pasien
     */
    public function detail()
    {
        cek_session_admin();
        $nik = $this->uri->segment(3);
        $data['profil']    = $this->pasien->get_by_id($nik);
        $data['ibu_hamil'] = $this->ibu_hamil->get_by_id($nik);
        $this->load->view('detail_pasien',$data);
    }




    /**
     * datatables list pasien
     */
	public function ajax_list()
	{
		$list = $this->pasien->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $pasien) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $pasien->nm_pasien."<br> NIK ".$pasien->nik;
			$row[] = $pasien->alamat;
			$row[] = $pasien->tempat_lahir." / ".tgl_indo($pasien->tgl_lahir);
			$row[] = $pasien->jamkesnas;

			/**
             * Detail Pasien
             */
            $row[] = '<a  href="javascript:void(0)" class="btn btn-sm btn-info" onclick="loadContent('."'pasien/detail/".$pasien->nik."'".')"> <i class="fa fa-search"></i>   Detail </a>';

			//add html for action
			$row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_pasien('."'".$pasien->id_pasien."'".')"><i class="fa fa-edit"></i> </a>
				      <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_pasien('."'".$pasien->id_pasien."'".')"><i class="fa fa-trash"></i> </a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pasien->count_all(),
						"recordsFiltered" => $this->pasien->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

    /**
     * @param $id
     */
    public function ajax_edit($id)
	{
		$data = $this->pasien->get_by_id($id);
		echo json_encode($data);
	}


    /**
     *
     */
    public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'nik' => $this->input->post('nik'),
				'nm_pasien' => $this->input->post('nm_pasien'),
				'alamat' => $this->input->post('alamat'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jamkesnas' => $this->input->post('jamkesnas'),
				'username' => $this->input->post('username'),
				'password' =>  sha1($this->input->post('password')),
			);
		$this->pasien->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
        $data = array(
                'nik' => $this->input->post('nik'),
                'nm_pasien' => $this->input->post('nm_pasien'),
                'alamat' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jamkesnas' => $this->input->post('jamkesnas'),
                'username' => $this->input->post('username'),
                'password' =>  sha1($this->input->post('password')),
            );
		$this->pasien->update(array('id_pasien' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}


	public function ajax_delete($id)
	{
		$this->pasien->delete_by_id($id);
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
