<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Beliproduk extends CI_Model{

	function tampil_data_limit($limit, $start){
		$sql = "products";
		$this->db->order_by("prod_id");
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
        return $query->result_array();
	}
	function countAllData(){
		return $this->db->get('products')->num_rows();
	}
}