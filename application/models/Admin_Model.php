<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function getAll($table)
    {
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllByDesc($table, $by, $order, $limit)
    {
        $this->db->from($table);
        $this->db->order_by($by, $order);
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getWhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function getNum($table)
    {
        $this->db->from($table);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getNumWhere($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $id, $data)
    {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update($table);
    }

    public function delete($table, $id)
    {
        $this->db->delete($table, $id);
    }
}
