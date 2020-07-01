<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pr_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                

        }

        public function items_data($query,$prod_type){
                //if($query !=''):
                //$data = $this->db->query("SELECT * FROM items where itemcode like '%".$query."%' or
                /*                                                    item_description like '%".$query."%' or
                                                                    item_specification like '%".$query."%' or
                                                                    item_specification2 like '%".$query."%' or
                                                                    brand like '%".$query."%' or
                                                                    umes like '%".$query."%' 
                                                                    order by item_code asc
                                                                     ");
                else:
                $data = $this->db->query("SELECT * FROM items order by item_code asc ");

                endif;

                return $data->result();*/
                
                $this->db->from("items");
                if($prod_type<5):
                  
                   $this->db->where('product_type_id =',$prod_type);
                        if($query !=''):
                                
                                
                                $this->db->like("item_code",$query);
                                $this->db->or_like("item_description",$query);
                                $this->db->or_like("item_specification",$query);
                                $this->db->or_like("item_specification2",$query);
                                $this->db->or_like("brand",$query);
                        else:
                        endif;
                  
                else:
                           
                endif;

                        
                $this->db->order_by('item_code','asc');
                return $this->db->get();
        }


        public function req_list($query,$site_code){
                //if($query !=''):
                //$data = $this->db->query("SELECT * FROM items where itemcode like '%".$query."%' or
                /*                                                    item_description like '%".$query."%' or
                                                                    item_specification like '%".$query."%' or
                                                                    item_specification2 like '%".$query."%' or
                                                                    brand like '%".$query."%' or
                                                                    umes like '%".$query."%' 
                                                                    order by item_code asc
                                                                     ");
                else:
                $data = $this->db->query("SELECT * FROM items order by item_code asc ");

                endif;

                return $data->result();*/
                $this->db->select('*');
                $this->db->from($site_code."_pr");
                $this->db->join("items","items.id =".$site_code."_pr.item_id ");
                $this->db->where($site_code."_pr.pr_number",$query);
                $this->db->order_by($site_code.'_pr.id','asc');
                return $this->db->get();
        }
        
        public function po_item_list($query,$site_code){
                //if($query !=''):
                //$data = $this->db->query("SELECT * FROM items where itemcode like '%".$query."%' or
                /*                                                    item_description like '%".$query."%' or
                                                                    item_specification like '%".$query."%' or
                                                                    item_specification2 like '%".$query."%' or
                                                                    brand like '%".$query."%' or
                                                                    umes like '%".$query."%' 
                                                                    order by item_code asc
                                                                     ");
                else:
                $data = $this->db->query("SELECT * FROM items order by item_code asc ");

                endif;

                return $data->result();*/
                
                $this->db->select("*,".$site_code."_po.status as po_status ");
                $this->db->from($site_code."_po");
                $this->db->join("items","items.id =".$site_code."_po.item_id ");
                $this->db->join($site_code."_pr",$site_code."_pr.id =".$site_code."_po.pr_id");
                $this->db->where($site_code."_po.po_number =",$query);
                $this->db->order_by($site_code.'_po.id','asc');
                return $this->db->get();
        }

        public function rr_item_list($query,$site_code){
                //if($query !=''):
                //$data = $this->db->query("SELECT * FROM items where itemcode like '%".$query."%' or
                /*                                                    item_description like '%".$query."%' or
                                                                    item_specification like '%".$query."%' or
                                                                    item_specification2 like '%".$query."%' or
                                                                    brand like '%".$query."%' or
                                                                    umes like '%".$query."%' 
                                                                    order by item_code asc
                                                                     ");
                else:
                $data = $this->db->query("SELECT * FROM items order by item_code asc ");

                endif;

                return $data->result();*/
                
                $this->db->select("*,".$site_code."_rr.status as rr_status ");
                $this->db->from($site_code."_rr");
                $this->db->join("items","items.id =".$site_code."_rr.item_id ");
                $this->db->join($site_code."_po",$site_code."_po.id =".$site_code."_rr.po_id");
                $this->db->where($site_code."_rr.rr_number =",$query);
                $this->db->order_by($site_code.'_rr.id','asc');
                return $this->db->get();
        }
        

        public function pr_data($query,$site_code){
                
                $this->db->select("*,".$site_code."_pr.id as pr_id ");
                $this->db->from($site_code."_pr");
                $this->db->join("items","items.id =".$site_code."_pr.item_id ");
                
                if($query!=''):
                $this->db->like($site_code."_pr.pr_number",$query);
                else:

                endif;
                $this->db->where($site_code."_pr.purchase",1);
                $this->db->where($site_code."_pr.status","Approved");
                $this->db->where($site_code."_pr.rec_qty >",0);
                $this->db->order_by($site_code.'_pr.pr_number','asc');
                

                
                return $this->db->get();
        }
        public function pr_details($pr_number,$site_code){
                $pr_details = $this->db->query("SELECT 
                                            ".$site_code."_pr.pr_number as pr_number,
                                            ".$site_code."_pr.purchase as purchase,
                                            ".$site_code."_pr.product_type_id as product_type_id,
                                            ".$site_code."_pr.requested_by as requested_by,
                                            ".$site_code."_pr.status as status,
                                            ".$site_code."_pr.recommended_by as recommended_by ,
                                            ".$site_code."_pr.approved_by as approved_by,
                                            ".$site_code."_pr.date_created as date_created, 
                                            ".$site_code."_pr.date_needed as  date_needed,
                                            ".$site_code."_pr.pr_qty as  pr_qty,
                                            ".$site_code."_pr.remarks as remarks,
                                            items.item_code as item_code,
                                            items.item_description as item_description,
                                            items.item_specification as item_specification,
                                            items.umes as umes
                                            
                                            from ".$site_code."_pr
                                            
                                            inner join items on items.id = ".$site_code."_pr.item_id
                                            where ".$site_code."_pr.pr_number = '".$pr_number."'
                                            order by ".$site_code."_pr.id asc ");
        
                return $pr_details->result();
        }
        public function po_details($po_number,$site_code){
                $po_details = $this->db->query("SELECT 
                                            ".$site_code."_po.po_number as po_number,
                                            ".$site_code."_po.ref_num as ref_num,
                                            
                                            ".$site_code."_po.prepared_by as prepared_by,
                                            ".$site_code."_po.status as status,
                                            ".$site_code."_po.vat as  vat,
                                            ".$site_code."_po.discount as discount,
                                            ".$site_code."_po.approved_by as approved_by,
                                            ".$site_code."_po.date_created as date_created, 
                                            ".$site_code."_po.item_cost as item_cost,
                                            ".$site_code."_po.total_amount as total_amount,
                                            ".$site_code."_po.po_qty as  po_qty,
                                            ".$site_code."_po.remarks as remarks,
                                            items.item_code as item_code,
                                            items.item_description as item_description,
                                            items.item_specification as item_specification,
                                            items.umes as umes
                                            
                                            from ".$site_code."_po
                                            
                                            inner join items on items.id = ".$site_code."_po.item_id
                                            where ".$site_code."_po.po_number = '".$po_number."'
                                            order by ".$site_code."_po.id asc ");
        
                return $po_details->result();
        }

        public function rr_details($rr_number,$site_code){
                $rr_details = $this->db->query("SELECT 
                                            ".$site_code."_rr.rr_number as po_number,
                                            ".$site_code."_rr.dr_si_number as dr_si_number,
                                            
                                            ".$site_code."_rr.prepared_by as prepared_by,
                                            ".$site_code."_rr.status as status,
                                            ".$site_code."_rr.vat as  vat,
                                            ".$site_code."_rr.discount as discount,
                                            ".$site_code."_rr.approved_by as approved_by,
                                            ".$site_code."_rr.date_created as date_created, 
                                            ".$site_code."_rr.item_cost as item_cost,
                                            ".$site_code."_rr.total_amount as total_amount,
                                            ".$site_code."_rr.rr_qty as  rr_qty,
                                            ".$site_code."_rr.remarks as remarks,
                                            items.item_code as item_code,
                                            items.item_description as item_description,
                                            items.item_specification as item_specification,
                                            items.umes as umes
                                            
                                            from ".$site_code."_rr
                                            
                                            inner join items on items.id = ".$site_code."_rr.item_id
                                            where ".$site_code."_rr.rr_number = '".$rr_number."'
                                            order by ".$site_code."_rr.id asc ");
        
                return $rr_details->result();
        }

        public function po_total_cost($po_number,$site_code){
                $po_total_cost = $this->db->query("SELECT 
                                              sum(total_amount) as total_amount
                                              from ".$site_code."_po
                                                where po_number = '".$po_number."'
                                              ");

                return $po_total_cost->result();
        }

        public function rr_total_cost($rr_number,$site_code){
                $rr_total_cost = $this->db->query("SELECT 
                                              sum(total_amount) as total_amount
                                              from ".$site_code."_rr
                                                where rr_number = '".$rr_number."'
                                              ");

                return $rr_total_cost->result();
        }


        public function rr_po_list($site_code,$query){
                $this->db->select("distinct(".$site_code."_po.po_number) as po_number,
                                   suppliers.supplier_name as supplier_name,
                                   ".$site_code."_po.status as po_status,
                                   ".$site_code."_po.supplier_id as supplier_id
                                   ");
                $this->db->from($site_code."_po");
                $this->db->join("suppliers","suppliers.id =".$site_code."_po.supplier_id ");
                if($query!=''):
                        $this->db->like($site_code."_po.po_number",$query);
                else:

                endif;
                $this->db->Where($site_code."_po.status","Approved");
                $this->db->Where($site_code."_po.po_bal >",0);
                $this->db->order_by($site_code.'_po.id','asc');
                return $this->db->get();

        }

        public function rr_po_data($query,$site_code){
                $this->db->select("
                                   items.id as item_id,
                                   items.item_code as item_code,
                                   items.item_description as item_description,
                                   items.item_specification as item_specification,
                                   items.item_specification2 as item_specification2,
                                   items.umes as  umes,
                                   ".$site_code."_po.id as po_id,
                                   ".$site_code."_po.remarks as remarks,
                                   ".$site_code."_po.po_number as po_number,
                                   ".$site_code."_po.po_bal as po_bal,
                                   ".$site_code."_po.po_qty as po_qty,
                                   ".$site_code."_po.vat as vat,
                                   ".$site_code."_po.discount as discount,
                                   ".$site_code."_po.item_cost as item_cost,
                                   suppliers.supplier_name as supplier_name

                                 ");
                $this->db->from($site_code."_po");
                $this->db->join("suppliers","suppliers.id =".$site_code."_po.supplier_id ");
                $this->db->join("items","items.id =".$site_code."_po.item_id ");
                $this->db->where($site_code."_po.po_number",$query);
                $this->db->where($site_code."_po.po_bal >",0);
                $this->db->where($site_code."_po.status","Approved");
                $this->db->order_by($site_code.'_po.id','asc');
                return $this->db->get();

        }


}
