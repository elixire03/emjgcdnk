<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function login($username, $password) {
            
            $query = $this->db->query("SELECT * FROM users WHERE username='" . $this->db->escape_str($username) . "' AND password=PASSWORD('" . $this->db->escape_str($password) . "') and status = 'active' ");
                
            return $query;
        }

        public function users_list() {
            $users_list = $this->db->query("SELECT 
                                            users.id as id,
                                            users.username as username,
                                            users.last_name as last_name,
                                            users.first_name as first_name,
                                            users.middle_name as middle_name,
                                            sites.site_name as site_name,
                                            sites.site_code as site_code,
                                            users.site_id as site_id,
                                            users.role_id as role_id,
                                            users.status as status,
                                            roles.role_description as role_name
                                            
                                            FROM users
                                            inner join sites on sites.id = users.site_id
                                            inner join roles on roles.id = users.role_id

                                            
                                            ");
                
            return $users_list->result();
        }

        public function show_user_details($user_id) {
            $users_data = $this->db->query("SELECT * from users where id ='".$user_id."' ");
                
            return $users_data->result();
        }

        public function sites_list() {
            $sites_list = $this->db->query("SELECT 
                                            *
                                            FROM sites
                                            ORDER BY id ASC
                                            ");
                
            return $sites_list->result();
        }

        public function role_id_list() {
            $role_id_list = $this->db->query("SELECT 
                                            *
                                            FROM roles
                                        
                                            ORDER BY id ASC
                                            ");
                
            return $role_id_list->result();
        }

        

        public function role_id_id($role_id_id) {
            $role_id_id = $this->db->query("SELECT 
                                            *
                                            FROM roles
                                            WHERE id = '".$role_id_id."'
                                            ");
                
            return $role_id_id->result();
        }

        public function insert_add($username,$password,$last_name,$first_name,$middle_name, $sites_id,$role_id_id,$created_by_id,$date_created,$status) {
            $find_username = $this->db->query("SELECT * from users where username ='".$this->db->escape_str($username)."' ");
            
            if($find_username->num_rows() >0):
                redirect(base_url()."users/?mode=duplicate_entry");
            else:
                $insert_add = $this->db->query("INSERT INTO users (username, password, last_name,first_name,middle_name, site_id,role_id,created_by_id,date_created,status)
                                                values
                                                ('".$this->db->escape_str($username)."',PASSWORD('".$this->db->escape_str($password)."'),'".$this->db->escape_str($last_name)."','".$this->db->escape_str($first_name)."','".$this->db->escape_str($middle_name)."','".$this->db->escape_str($sites_id)."','".$this->db->escape_str($role_id_id)."','".$this->db->escape_str($created_by_id)."','".$date_created."','".$status."')
                                                ");
                redirect(base_url()."users/?mode=success");
            endif;
            
        }

        public function update_no_pass_user($username,
														$last_name,
														$first_name,
														$middle_name, 
														$sites_id, 
														$role_id,
														$user_id,
														$edited_by_id,
														$date_edited,
														$status){
            $this->db->query("UPDATE users set 
                                        username='".$this->db->escape_str($username)."',
                                        last_name='".$this->db->escape_str($last_name)."',
                                        first_name='".$this->db->escape_str($first_name)."',
                                        middle_name='".$this->db->escape_str($middle_name)."',
                                        site_id='".$sites_id."',
                                        role_id='".$role_id."',
                                        edited_by_id='".$this->db->escape_str($edited_by_id)."',
                                        date_edited='".$date_edited."',
                                        status='".$this->db->escape_str($status)."' 
                                        where id = ".$this->db->escape_str($user_id)." ");
            redirect(base_url()."users/?mode=edit_ex_user_success");

        }

        public function update_w_pass_user($username,$password,$last_name,$first_name,$middle_name, $sites_id,$role_id,$user_id,$edited_by_id,$date_edited,$status){
            $this->db->query("UPDATE users set 
                                            username='".$this->db->escape_str($username)."',
                                            password=PASSWORD('".$this->db->escape_str($password)."'),
                                            last_name='".$this->db->escape_str($last_name)."',
                                            first_name='".$this->db->escape_str($first_name)."',
                                            middle_name='".$this->db->escape_str($middle_name)."',
                                            site_id='".$this->db->escape_str($sites_id)."',
                                            role_id='".$this->db->escape_str($role_id)."',
                                            edited_by_id='".$this->db->escape_str($edited_by_id)."',
                                            date_edited='".$date_edited."',
                                            status='".$this->db->escape_str($status)."'
                                             where id = ".$this->db->escape_str($user_id)." ");
            redirect(base_url()."users/?mode=edit_ex_user_success");
        }

        public function add_site($data_array,$branch_code){
            $this->db->insert('sites',$data_array);
         // phase work
            $this->db->query("create table ".$branch_code."_phase (
                                                                id int(11) not null primary key auto_increment,
                                                                phase_code varchar(20) not null,
                                                                phase_description varchar(20) not null,
                                                                budget_cost float(11,3) not null,
                                                                remaining_budget float(11,3) not null,
                                                                created_by_id int(4) not null,
                                                                date_created datetime(6) not null,
                                                                date_edited datetime(6) not null,
                                                                edited_by_id int(4) not null
                                                                
                                                                ) ");
            $this->db->query("create table ".$branch_code."_expences (
                                                                id int(11) not null primary key auto_increment, 
                                                                pc_id int(11) not null, 
                                                                project_code varchar(70) not null, 
                                                                proj_id int(11) not null, 
                                                                details varchar(255) not null, 
                                                                unit_cost float(11,4) not null, 
                                                                total_amount float(11,4) not null, 
                                                                createdby_id int(4) not null, 
                                                                date_created datetime(6) not null, 
                                                                edited_by_id int(4) not null, 
                                                                date_edited datetime(6) not null,
                                                                qty float(11,4) not null,
                                                                supplier_name varchar(255) not null, 
                                                                tin varchar(255) not null, 
                                                                address varchar(255) not null
                                                                ) ");
            $this->db->query("create table ".$branch_code."_collection (id int(11) not null primary key auto_increment, 
                                                                date_created datetime(6) not null,
                                                                amount float(11,4) not null,
                                                                ref_doc varchar(255) not null
                                  ) ");
            $this->db->query("insert into retention(project_code,retention_percentage)values('".$branch_code."','0')");
            $this->db->query("create table ".$branch_code."_man_power (id int(11) not null primary key auto_increment, 
                                                                date_created datetime(6) not null,
                                                                name varchar(255) not null,
                                                                designation varchar(255) not null,
                                                                alias varchar(255) not null,
                                                                amount float(11,4) not null)");
                                                                                    
            
             
        }

        // EDIT SITE NAME
        public function edit_site($data_array,$branch_id){
            $this->db->where('id',$branch_id)->update('sites', $data_array);
        }

        public function phase_list($site_code,$query){
                $this->db->select("*");
                /*$this->db->select("
                                    ".$site_code."_phase.id as id ,
                                    ".$site_code."_phase.phase_code as phase_code ,
                                    ".$site_code."_phase.phase_description as phase_description ,
                                    ".$site_code."_phase.budget_cost as budget_cost ,
                                    distinct(".$site_code."_expences.pc_id) as phase_id,
                                    sum(".$site_code."_expences.total_amount) as total_amount
                                    
                                     ");*/
                $this->db->from($query."_phase");
                //$this->db->join($query."_expences",$query."_expences.pc_id = ".$query."_phase.id");
                $this->db->order_by($query.'_phase.id','desc');
                $this->db->where($query."_phase.phase_description !=","LABOR");
                return $this->db->get();

        }

        public function mphase_list($site_code,$query){
                $this->db->select("*");
                /*$this->db->select("
                                    ".$site_code."_phase.id as id ,
                                    ".$site_code."_phase.phase_code as phase_code ,
                                    ".$site_code."_phase.phase_description as phase_description ,
                                    ".$site_code."_phase.budget_cost as budget_cost ,
                                    distinct(".$site_code."_expences.pc_id) as phase_id,
                                    sum(".$site_code."_expences.total_amount) as total_amount
                                    
                                     ");*/
                $this->db->from($query."_phase");
                //$this->db->join($query."_expences",$query."_expences.pc_id = ".$query."_phase.id");
                $this->db->order_by($query.'_phase.id','desc');
                
                return $this->db->get();

        }

        
        public function phase_list2($site_code,$query){
                //$this->db->select("*");
                $this->db->select("
                                    distinct(".$site_code."_phase.id) as id,
                                    ".$site_code."_phase.phase_code as phase_code ,
                                    ".$site_code."_phase.phase_description as phase_description ,
                                    ".$site_code."_phase.budget_cost as budget_cost,
                                    
                                    
                                     ");
                $this->db->from($query."_phase");
                //$this->db->join($query."_expences",$query."_expences.pc_id != ".$query."_phase.id");
                
                //$this->db->where($query.'_expences.total_amount',"is not null");
                //$this->db->group_by($query.'_expences.pc_id');
                $this->db->order_by($query.'_phase.id','desc');
                $this->db->where($query."_phase.phase_description !=","LABOR");
                return $this->db->get();

        }

        public function sum_mp($query){
            $sum_mp = $this->db->query("select sum(amount) as amount from ".$query."_man_power
            
            ");
            return $sum_mp;
        }

        public function labor_phase_list($site_code,$query){
            $this->db->select("*");
                $this->db->from($query."_phase");
                //$this->db->join($query."_expences",$query."_expences.pc_id != ".$query."_phase.id");
                
                //$this->db->where($query.'_expences.total_amount',"is not null");
                //$this->db->group_by($query.'_expences.pc_id');
                $this->db->order_by('id','desc');
                $this->db->where("phase_description =","LABOR");
                return $this->db->get();
        }

        public function total_exp_amount($query,$id){
            $total_exp = $this->db->query("SELECT sum(total_amount) as total_amount from ".$query."_expences where pc_id  = '".$id."' ");

            return $total_exp;
        }

        public function expences_list($query,$date_from,$date_to){
            

                
                $this->db->select("
                                    sites.site_name as site_name,
                                    sites.site_code as site_code,
                                    ".$query."_phase.phase_description as phase_description,
                                    ".$query."_phase.id as ph_id,
                                    ".$query."_expences.id as exp_id,
                                    ".$query."_expences.date_created as date_created,
                                    ".$query."_expences.details as details,
                                    ".$query."_expences.qty as qty,
                                    ".$query."_expences.unit_cost as unit_cost,
                                    ".$query."_expences.total_amount as total_amount,
                                    ".$query."_expences.tin as tin,
                                    ".$query."_expences.address as address,
                                    ".$query."_expences.supplier_name as supplier_name

                ");
                $this->db->from($query."_expences");
                $this->db->join($query."_phase",$query."_phase.id = ".$query."_expences.pc_id");
                $this->db->join("sites","sites.site_code = ".$query."_expences.project_code");
                $this->db->where($query."_expences.date_created >=",$date_from);
                $this->db->where($query."_expences.date_created <=",$date_to);
                $this->db->order_by($query."_expences.date_created","desc");
                return $this->db->get();
                
        }

        public function expences_list_filter($query,$search,$date_from,$date_to){
                $sql = "";
                $sql .= "SELECT 
                                    sites.site_name as site_name,
                                    sites.site_code as site_code,
                                    ".$query."_phase.phase_description as phase_description,
                                    ".$query."_phase.id as ph_id,
                                    ".$query."_expences.id as exp_id,
                                    ".$query."_expences.date_created as date_created,
                                    ".$query."_expences.details as details,
                                    ".$query."_expences.qty as qty,
                                    ".$query."_expences.unit_cost as unit_cost,
                                    ".$query."_expences.total_amount as total_amount,
                                    ".$query."_expences.tin as tin,
                                    ".$query."_expences.address as address,
                                    ".$query."_expences.supplier_name as supplier_name

                                
                                 FROM `".$query."_expences`
                                 INNER JOIN `".$query."_phase` ON ".$query."_phase.`id` = ".$query."_expences.`pc_id`
                                 INNER JOIN `sites` ON sites.`site_code` = ".$query."_expences.`project_code`
                                 WHERE ".$query."_expences.`date_created` BETWEEN '".$date_from."' AND '".$date_to."' ";
                 if($search!='')
                    {
                        $sql .= "AND CONCAT(".$query."_expences.`supplier_name`, ' + ',".$query."_expences.`address`, ' + ',".$query."_expences.`tin`, ' + ',".$query."_phase.`phase_description`,' + ' ,".$query."_expences.`details`)  LIKE '%".$search."%'   ORDER BY ".$query."_expences.`date_created` DESC";;
                    }
                $oe_search = $this->db->query($sql);
                

                return $oe_search;

                
        }
        public function labor_expences_list($query,$date_from,$date_to){
                $this->db->select("*");
                $this->db->from($query."_man_power");
                $this->db->order_by($query."_man_power.date_created","desc");
                $this->db->where($query."_man_power.date_created >=",$date_from);
                $this->db->where($query."_man_power.date_created <=",$date_to);
                
                return $this->db->get();

        }

        public function labor_expences_list_filter($query,$search,$date_from,$date_to){
                $sql = "";
                $sql .= "SELECT * FROM `".$query."_man_power` WHERE `date_created` BETWEEN '".$date_from."' AND '".$date_to."' ";
                 if($search!='')
                    {
                        $sql .= "AND CONCAT(`name`, ' + ',`alias`, ' + ',`designation`) LIKE '%".$search."%'  ORDER BY `date_created` DESC";
                    
                    }
                $mp_search = $this->db->query($sql);
                

                return $mp_search;

        }

        public function employee_filter($query,$search){
                $this->db->select("*");
                $this->db->from("employees");
                
                 if($search!='')
                    {
                $this->db->like("employee_id",$search);
                $this->db->or_like("last_name",$search);
                $this->db->or_like("first_name",$search);
                $this->db->or_like("middle_name",$search);
                $this->db->or_like("nic_name",$search);
                $this->db->or_like("designation",$search);
                
                
                    }
                else{
                }
                
                $this->db->order_by("id","desc");
                return $this->db->get();

        }

        public function collection_list_filter($query,$search){
            

                
                $this->db->select("
                                    ".$query."_collection.amount as amount,
                                    ".$query."_collection.id as id,
                                    ".$query."_collection.ref_doc as ref_doc,
                                    ".$query."_collection.date_created as date_created

                ");
                $this->db->from($query."_collection");
                if($search!='')
                    {
                $this->db->like($query."_collection.date_created",$search);
                $this->db->or_like($query."_collection.ref_doc",$search);
                    }
                else{

                }   
                $this->db->order_by($query."_collection.id","desc");
                return $this->db->get();
                
        }
        
        
        public function edit_position($data_array,$position_id){
            $this->db->where('id',$position_id)->update('positions', $data_array);
        }

        public function site_list(){
            $site_list = $this->db->query("SELECT * from sites");

            return $site_list->result();
        }
        
        public function position_list(){
            $position_list = $this->db->query("SELECT * from positions");

            return $position_list->result();
        }

        public function checked_myprofile($current_password,$new_password, $id) {
            $user_found = $this->db->query("SELECT * from users where password = PASSWORD('".$current_password."') and id = '".$id."' ");
            if($user_found->num_rows() >0):
                $success = $this->db->query("UPDATE users set password = PASSWORD('".$new_password."') WHERE id = '".$id."' ");
            
                return $success;
            endif;
        }

        public function update_profile($username,$full_name,$role_id,$id) {
            $find_username = $this->db->query("SELECT * from users where username ='".$this->db->escape_str($username)."' ");
            if($find_username->num_rows() >0):
                redirect(base_url()."users/?mode=duplicate_entry");
            else:
            $this->db->query("UPDATE users set 
                              username = '".$username."',
                              full_name = '".$full_name."',
                              role_id = '".$role_id."' 
                              where id = '".$id."'            
                    ");           
                 redirect(base_url()."users/?mode=success");
            endif;
        }

        public function site_info(){
            $site_info = $this->db->query("SELECT * from sites  where status ='on-going' ");

            return $site_info->result();
        }

        public function db_site_info(){
            $site_info = $this->db->query("SELECT * from sites");

            return $site_info->result();
        }

        public function tcp($site_code){
            $tcp = $this->db->query("SELECT sum(budget_cost) as amount from ".$site_code."_phase ");

            return $tcp;
        }

        public function retention($site_code){
            $retention = $this->db->query("SELECT sum(retention_percentage) as percentage from retention where project_code = '".$site_code."' ");

            return $retention;
        }

        public function collection($site_code){
            $collection = $this->db->query("SELECT sum(amount) as amount from ".$site_code."_collection ");

            return $collection;
        }

        public function other_expences($site_code){
            $other_expences = $this->db->query("SELECT sum(total_amount) as amount from ".$site_code."_expences ");

            return $other_expences;
        }

        public function mp_expences($site_code){
            $mp_expences = $this->db->query("SELECT sum(amount) as amount from ".$site_code."_man_power ");

            return $mp_expences;
        }


        public function my_site_info($site_code){
            $site_info = $this->db->query("SELECT * from sites where site_code ='".$site_code."' ");

            return $site_info->result();
        }
        public function product_types(){
            $product_types = $this->db->query("SELECT * from product_type  ");

            return $product_types->result();
        }

        public function d_pr_list($site_code){
            $pr_list = $this->db->query("SELECT 
                                            distinct(pr_number) as pr_number, 
                                            purchase as purchase,
                                            status as status,
                                            product_type_id as product_type_id,
                                            requested_by as requested_by,
                                            recommended_by as recommended_by ,
                                            approved_by as approved_by,
                                            date_created as date_created, 
                                            date_needed as  date_needed from ".$site_code."_pr order by pr_number asc ");

            return $pr_list->result();
        }

        public function d_po_list($site_code){
            $po_list = $this->db->query("SELECT 
                                            distinct(".$site_code."_po.po_number) as po_number,                            
                                            ".$site_code."_po.ref_num as ref_num,
                                            ".$site_code."_po.prepared_by as prepared_by,
                                            ".$site_code."_po.status as status,
                                            ".$site_code."_po.approved_by as approved_by,
                                            ".$site_code."_po.date_created as date_created,
                                            suppliers.supplier_name as supplier_name
                                            from ".$site_code."_po
                                            inner join suppliers on suppliers.id = ".$site_code."_po.supplier_id
                                            order by ".$site_code."_po.po_number asc ");

            return $po_list->result();
        }

        public function d_rr_list($site_code){
            $rr_list = $this->db->query("SELECT 
                                            distinct(".$site_code."_rr.rr_number) as rr_number,                            
                                            ".$site_code."_rr.po_number as po_number,
                                            ".$site_code."_rr.date_received as date_received,
                                            ".$site_code."_rr.date_created as date_created,
                                            ".$site_code."_rr.dr_si_number as dr_si_number,
                                            ".$site_code."_rr.status as status,
                                            ".$site_code."_rr.prepared_by as prepared_by,
                                            ".$site_code."_rr.approved_by as approved_by,
                                            suppliers.supplier_name as supplier_name
                                            from ".$site_code."_rr
                                            inner join suppliers on suppliers.id = ".$site_code."_rr.supplier_id
                                            inner join ".$site_code."_po on ".$site_code."_po.id = ".$site_code."_rr.po_id
                                            order by ".$site_code."_rr.rr_number asc ");

            return $rr_list->result();
        }


        public function d_pr_list2($site_code,$pr_number){
            $pr_list = $this->db->query("SELECT 
                                            distinct(pr_number) as pr_number, 
                                            purchase as purchase,
                                            product_type_id as product_type_id,
                                            requested_by as requested_by,
                                            status as status,
                                            recommended_by as recommended_by ,
                                            approved_by as approved_by,
                                            date_created as date_created, 
                                            date_needed as  date_needed from ".$site_code."_pr
                                            where pr_number = '".$pr_number."'
                                             order by pr_number asc ");

            return $pr_list->result();
        }
        public function d_po_list2($site_code,$po_number){
            $po_list = $this->db->query("SELECT 
                                            distinct(".$site_code."_po.po_number) as po_number,                                             
                                            ".$site_code."_po.ref_num as ref_num,
                                            ".$site_code."_po.prepared_by as prepared_by,
                                            ".$site_code."_po.status as status,
                                            ".$site_code."_po.approved_by as approved_by,
                                            ".$site_code."_po.date_created as date_created,
                                            ".$site_code."_po.supplier_id as supplier_id,
                                            suppliers.supplier_name as supplier_name
                                            
                                            from ".$site_code."_po
                                            inner join suppliers on suppliers.id = ".$site_code."_po.supplier_id
                                            where ".$site_code."_po.po_number = '".$po_number."'
                                             order by ".$site_code."_po.po_number asc ");

            return $po_list->result();
        }

        public function d_rr_list2($site_code,$rr_number){
            $rr_list = $this->db->query("SELECT 
                                            distinct(".$site_code."_rr.rr_number) as rr_number,
                                            ".$site_code."_rr.po_number as po_number,                                             
                                            ".$site_code."_rr.dr_si_number as dr_si_number,
                                            ".$site_code."_rr.prepared_by as prepared_by,
                                            ".$site_code."_rr.checked_by as checked_by,
                                            ".$site_code."_rr.status as status,
                                            ".$site_code."_rr.approved_by as approved_by,
                                            ".$site_code."_rr.date_created as date_created,
                                            ".$site_code."_rr.date_received as date_received,
                                            ".$site_code."_rr.supplier_id as supplier_id,
                                            suppliers.supplier_name as supplier_name
                                            
                                            from ".$site_code."_rr
                                            inner join suppliers on suppliers.id = ".$site_code."_rr.supplier_id
                                            where ".$site_code."_rr.rr_number = '".$rr_number."'
                                            order by ".$site_code."_rr.rr_number asc ");

            return $rr_list->result();
        }

        public function add_phase($data_phase, $site_code){
            $this->db->insert($site_code."_phase", $data_phase);
        }


        public function add_expences($data_expences,$site_code,$new_remaining_budget,$phase){
            
            $this->db->insert($site_code."_expences", $data_expences);
            $this->db->query("UPDATE ".$site_code."_phase set remaining_budget = '".$new_remaining_budget."' where id ='".$phase."' ");

        }

        public function add_emp_expences($data_expences,$site_code){
            $this->db->insert($site_code.'_man_power',$data_expences);
        }

        public function update_expences($data_expences,$site_code,$new_remaining_budget,$phase,$exp_id){
            
            $this->db->where("id",$exp_id)->update($site_code."_expences", $data_expences);
            $this->db->query("UPDATE ".$site_code."_phase set remaining_budget = '".$new_remaining_budget."' where id ='".$phase."' ");

        }

        public function Update_expences2($data_expences,$site_code,$new_remaining_budget,$old_remaining_budget,$phase,$exp_id,$old_phase){
            
            $this->db->where("id",$exp_id)->update($site_code."_expences", $data_expences);
            $this->db->query("UPDATE ".$site_code."_phase set remaining_budget = '".$old_remaining_budget."' where id ='".$old_phase."' ");
            $this->db->query("UPDATE ".$site_code."_phase set remaining_budget = '".$new_remaining_budget."' where id ='".$phase."' ");

        }
        public function find_phase($data_expences,$site_code,$total_amount,$phase){
            $select_phase = $this->db->query("select remaining_budget from ".$site_code."_phase where id ='".$phase."' ");
            
            return $select_phase->result();
        }

        public function find_phase2($data_expences,$site_code,$total_amount,$old_phase){
            $old_select_phase = $this->db->query("select remaining_budget from ".$site_code."_phase where id ='".$old_phase."' ");
            
            return $old_select_phase->result();
        }

        public function project_info(){
            
            $project_info = $this->db->query("
                                            select 
                                            status,
                                            site_code,
                                            site_name
                                            from sites
                                            
                                            order by id desc
                                            ");
            return $project_info->result();
        }

        public function total_exp_cost($site_code){
            $project_details = $this->db->query("SELECT 
                                            distinct(".$site_code."_phase.id) as id,    
                                            ".$site_code."_phase.budget_cost as budget_cost,
                                            ".$site_code."_phase.remaining_budget as total_rb,
                                            ".$site_code."_phase.phase_code as phase_code,
                                            ".$site_code."_phase.phase_description as phase_description

                                            from ".$site_code."_phase
                                            
                                            ");
            return $project_details->result();
        }

        public function all_expences($site_code,$date_from,$date_to,$details_like){
            if($details_like !=''):
            $query = "AND CONCAT(".$site_code."_expences.`supplier_name`, ' + ',".$site_code."_expences.`address`, ' + ',".$site_code."_expences.`tin`, ' + ',".$site_code."_phase.`phase_description`,' + ' ,".$site_code."_expences.`details`)  LIKE '%".$details_like."%'   ORDER BY ".$site_code."_expences.`date_created` DESC";;
            else:
            $query ="";
            endif;
            $project_details = $this->db->query("SELECT 
                                    sites.site_name as site_name,
                                    ".$site_code."_phase.id as id,
                                    ".$site_code."_phase.phase_description as phase_description,
                                    ".$site_code."_phase.budget_cost as budget_cost,
                                    ".$site_code."_expences.details as details,
                                    ".$site_code."_expences.qty as qty,
                                    ".$site_code."_expences.unit_cost as unit_cost,
                                    ".$site_code."_expences.total_amount as total_amount,
                                    ".$site_code."_expences.tin as tin,
                                    ".$site_code."_expences.address as address,
                                    ".$site_code."_expences.date_created as date_created,
                                    ".$site_code."_expences.supplier_name as supplier_name
                                     FROM ".$site_code."_expences
                                        inner join ".$site_code."_phase on ".$site_code."_phase.id = ".$site_code."_expences.pc_id
                                        inner join sites on sites.site_code = ".$site_code."_expences.project_code
                                      WHERE ".$site_code."_expences.date_created BETWEEN '".$date_from."' AND '".$date_to."'
                                      ".$query."
                                    
                                      ");
            return $project_details->result();
        }

        public function mp_all_expences($site_code,$date_from,$date_to,$details_like){
            if($details_like !=''):
            $query = "AND CONCAT(`name`, ' + ',`alias`, ' + ',`designation`) LIKE '%".$details_like."%'  ORDER BY `date_created` DESC
                                      ";
            else:
            $query ="";
            endif;
            $project_details = $this->db->query("SELECT *
                                     FROM ".$site_code."_man_power
                                      WHERE ".$site_code."_man_power.date_created BETWEEN '".$date_from."' AND '".$date_to."'
                                      ".$query."
                                    
                                      ");
            return $project_details->result();
        }


        public function import_csv($data,$site_code){
            $this->db->insert_batch($site_code."_expences",$data);
            //$this->db->query("UPDATE ".$site_code."_phase set remaining_budget = '".$new_remaining_budget."' where id ='".$phase."' ");
        }

        public function import_csv2($data,$site_code){
            $this->db->insert_batch($site_code."_man_power",$data);
            //$this->db->query("UPDATE ".$site_code."_phase set remaining_budget = '".$new_remaining_budget."' where id ='".$phase."' ");
        }

        public function retention_list(){
                $retention_list = $this->db->query("SELECT * FROM retention order by id desc");
                
                return $retention_list->result();
        }

        public function edit_retention_info($ret_id,$project_code,$retention_percentage){
                $data = array('project_code'=>$this->db->escape_str($project_code),
                         'retention_percentage'=>$this->db->escape_str($retention_percentage)
                        );
                $this->db->where("id",$ret_id)->update('retention',$data);
                }

        public function collection_list($query){
            $this->db->select("
                                    ".$query."_collection.amount as amount,
                                    ".$query."_collection.id as id,
                                    ".$query."_collection.ref_doc as ref_doc,
                                    ".$query."_collection.date_created as date_created");
                $this->db->from($query."_collection");
                $this->db->order_by($query."_collection.id","desc");
                return $this->db->get();

        }

        public function add_collection($data_collected,$site_code){
                $this->db->insert($site_code."_collection",$data_collected);
            
        }

        public function update_collection($data_collected,$site_code,$id){
                $this->db->where('id',$id)->update($site_code."_collection",$data_collected);
            
        }

        public function pc_id_found($pc_id,$site_code){
            $search_pc_id = $this->db->query("SELECT * from ".$site_code."_phase where id = '".$pc_id."' ");
            return $search_pc_id;
        }

        public function alias_found($alias,$site_code){
            $search_alias = $this->db->query("SELECT * from employees where nic_name = '".$alias."' ");
            return $search_alias;
        }

        public function edit_mp_expences($id,$site_code,$data){
            $this->db->where('id',$id)->update($site_code.'_man_power',$data);
        }

        public function delete_mp_expences($site_code,$id){
            $this->db->query("DELETE FROM ".$site_code."_man_power where id = '".$id."' ");

        }

        public function delete_oe_expences($site_code,$id){
            $this->db->query("DELETE FROM ".$site_code."_expences where id = '".$id."' ");

        }

        public function edit_phase($id,$site_code,$data_ph){
            $this->db->where('id',$id)->update($site_code."_phase",$data_ph);

        }
}



/*

A PHP ERROR WAS ENCOUNTERED
SEVERITY: NOTICE
MESSAGE: UNDEFINED VARIABLE: ROW
FILENAME: VIEWS/PDF_SUMMARY.PHP
LINE NUMBER: 237
BACKTRACE:
FILE:
/HOME/BGERON/WORKSPACE/EMJGC/APPLICATION/VIEWS/PDF_SUMMARY.PHP
LINE: 237
FUNCTION: _ERROR_HANDLER
FILE:
/HOME/BGERON/WORKSPACE/EMJGC/APPLICATION/CONTROLLERS/DOWNLOAD_PDF.PHP
LINE: 23
FUNCTION: VIEW
FILE: /HOME/BGERON/WORKSPACE/EMJGC/INDEX.PHP
LINE: 319
FUNCTION: REQUIRE_ONCE
A PHP ERROR WAS ENCOUNTERED
SEVERITY: NOTICE
MESSAGE: TRYING TO GET PROPERTY OF NON-OBJECT
FILENAME: VIEWS/PDF_SUMMARY.PHP
LINE NUMBER: 237
BACKTRACE:
FILE:
/HOME/BGERON/WORKSPACE/EMJGC/APPLICATION/VIEWS/PDF_SUMMARY.PHP
LINE: 237
FUNCTION: _ERROR_HANDLER
FILE:
/HOME/BGERON/WORKSPACE/EMJGC/APPLICATION/CONTROLLERS/DOWNLOAD_PDF.PHP
LINE: 23
FUNCTION: VIEW
FILE: /HOME/BGERON/WORKSPACE/EMJGC/INDEX.PHP
LINE: 319
FUNCTIO*/