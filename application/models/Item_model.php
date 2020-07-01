<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                

        }

        public function items_list(){
            $items_list = $this->db->query("select 
                                            items.id as id,
                                            items.item_code as item_code,
                                            items.item_description as item_description,
                                            items.item_specification as item_specification,
                                            items.item_specification2 as item_specification2,
                                            items.brand as brand,
                                            items.umes as umes,
                                            items.product_type_id as product_type_id
                                            from items
                                            
                                            ");


            return $items_list->result();

        }

        public function add_item($date_created, 
                                                   $created_by_id,
                                                   $item_code,
                                                   $item_description,
                                                   $item_specification,
                                                   $item_specification2,
                                                   $brand,
                                                   $umes,
                                                   $product_type_id
                                                  )
                                                  {
                $this->db->query("INSERT into items(
                                                    date_created, 
                                                    created_by_id, 
                                                    item_code,
                                                    item_description,
                                                    item_specification,
                                                    item_specification2,
                                                    brand,
                                                    umes,
                                                    product_type_id)
                                                    values
                                                    (
                                                    '".$date_created."',
                                                    '".$created_by_id."',
                                                    '".$this->db->escape_str($item_code)."',
                                                    '".$this->db->escape_str($item_description)."',
                                                    '".$this->db->escape_str($item_specification)."',
                                                    '".$this->db->escape_str($item_specification2)."',
                                                    '".$this->db->escape_str($brand)."',
                                                    '".$this->db->escape_str($umes)."',
                                                    '".$product_type_id."')
                                                    ");
    }

    public function edit_item($date_edited, 
                                                   $edited_by_id,
                                                   $item_id,
                                                   $item_code,
                                                   $item_description,
                                                   $item_specification,
                                                   $item_specification2,
                                                   $brand,
                                                   $umes,
                                                   $product_type_id
                                                   ){
        $this->db->query("update items set
                                            date_edited = '".$date_edited."',
                                            edited_by_id = '".$edited_by_id."',
                                            item_code = '".$item_code."',
                                            item_description = '".$item_description."',
                                            item_specification = '".$item_specification."',
                                            item_specification2 = '".$item_specification2."',
                                            brand = '".$brand."',
                                            umes = '".$umes."',
                                            product_type_id = '".$product_type_id."'
                                            where id = '".$item_id."'

                        ");
    }

    public function product_type_list(){
       $product_type_list =  $this->db->query("SELECT * FROM product_type order by id asc");

       return $product_type_list->result();
    }
     
    public function save_pr($pr_data, $site_code){
        $this->db->insert($site_code.'_pr',$pr_data);
    }

    public function save_po($pr_data, $site_code){
        $this->db->insert($site_code.'_po',$pr_data);
    }

    public function save_rr($rr_data,$site_code){
        $this->db->insert($site_code.'_rr',$rr_data);
    }

    public function update_pr_balance($site_code,$pr_id,$req_bal){
        $this->db->query("UPDATE ".$site_code."_pr set rec_qty='".$req_bal."' where id ='".$pr_id."'  ");
    }
    public function update_po_balance($site_code,$po_id,$req_bal){
        $this->db->query("UPDATE ".$site_code."_po set po_bal='".$req_bal."' where id ='".$po_id."'  ");
    }
    
    
    public function update_pr($pr_data, $pr_number,$site_code){
        $this->db->where('pr_number',$pr_number)->update($site_code.'_pr',$pr_data);
    }

    public function update_po($pr_data,$po_number,$site_code){
        $this->db->where('po_number',$po_number)->update($site_code.'_po',$pr_data);
    }

    public function update_rr($rr_data,$rr_number,$site_code){
        $this->db->where('rr_number',$rr_number)->update($site_code.'_rr',$rr_data);
    }
    


    public function list_pr($site_code){
        $this->db->query("SELECT * FROM ".$site_code.'_pr');
    }

    public function pr_number($site_code){
        $pr_number = $this->db->query("SELECT max(pr_number) as pr_number from ".$site_code."_pr");

        return $pr_number->result();
    }

    public function po_number($site_code){
        $po_number = $this->db->query("SELECT max(po_number) as po_number from ".$site_code."_po");

        return $po_number->result();
    }

    public function rr_number($site_code){
        $rr_number = $this->db->query("SELECT max(rr_number) as rr_number from ".$site_code."_rr");

        return $rr_number->result();
    }

    public function supplier_info(){
        $supplier_info = $this->db->query("SELECT * from suppliers");

        return $supplier_info->result();
    }
}
