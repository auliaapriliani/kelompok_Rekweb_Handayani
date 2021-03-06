<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_hamil_model extends CI_Model {

	var $table = 'k_ibu_hamil';
	var $column_order = array('nik',null); //set column field database for datatable orderable
	var $column_search = array('nik',); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('nik' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		// active record
		// $this->db->select('*')
		// 	     ->from('tbl_pasien')
		// 		 ->join('tbl_pegawai','tbl_pegawai.id_pasien = tbl_pasien.id_pasien');
		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column_search as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		// $this->db->join('tbl_pegawai','tbl_pasien.id_pasien = tbl_pegawai.id_pasien');
		$query = $this->db->get();
		return $query->result();
	}


	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_all()
	{
		$this->db->from($this->table);
		$query = $this->db->get();

		return $query->result();
	}


	public function get_by_id($id)
	{
		$this->db->from('k_ibu_hamil');
        $this->db->join('tbl_pasien','k_ibu_hamil.nik = tbl_pasien.nik');
		$this->db->where('k_ibu_hamil.nik',$id);
		$query = $this->db->get();

		return $query->result();
	}

	public function save($data)
	{
		$this->db->insert('k_ibu_hamil', $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_pasien', $id);
		$this->db->delete($this->table);
	}



}
