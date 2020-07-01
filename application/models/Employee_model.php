<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function insert_ex_emp($employee_id, $data_add,$email_address){

            $find_emp_id = $this->db->query("SELECT * FROM employees where employee_id ='".$employee_id."' ");
            
            if($find_emp_id->num_rows() >0):
                redirect(base_url()."existing_employee/?mode=emp_id_double_entry");
            else:
                $this->db->insert('employees',$data_add);
                redirect(base_url()."existing_employee/?mode=success");
            endif;

        }

        public function branch_list($user_branch_id)
        {
            $branch_list = $this->db->query("SELECT * FROM branches where id = '".$user_branch_id."' ORDER BY ID ASC");

            return $branch_list->result();
        }

        public function position_list()
        {
            $position_list = $this->db->query("SELECT * FROM positions ORDER BY id ASC ");

            return $position_list->result();
        }

        
        public function update_employee_requirements($emp_id,$data_req) {
            
            $this->db->where('employee_id',$emp_id)->update('requirements', $data_req);
        }

        public function employee_list()
        {
            $query = $this->db->query("SELECT 
                                        employees.id as id,
                                        employees.employee_id as employee_id,
                                        employees.last_name as last_name,
                                        employees.first_name as first_name,
                                        employees.middle_name as middle_name,
                                        employees.nic_name as nic_name,
                                        employees.designation as designation,
                                        employees.status as status
                                        
                                        from 
                                        employees
                                        
                                        

                                        ORDER BY employees.employee_id DESC


            ");

            return $query->result();
        }


        public function add_employee($date_created, 
                                                   $created_by_id,
                                                   $last_name,
                                                   $first_name,
                                                   $middle_name,
                                                   $alias,
                                                   
                                                   $designation,$status) {
            

            $count_employees_data = $this->db->query("SELECT count(employee_id) as id FROM employees ");
            

            if(($count_employees_data->num_rows() > 0)):
                    $count_employees_data=$count_employees_data->result();
                    $counted_emp = $count_employees_data[0]->id+1;
                    
                    if($counted_emp > 0):
                        
                        $new_emp_id ="EMJGC".sprintf('%05d', $counted_emp);
                        $data = array(
                        'employee_id'=>$new_emp_id,
                        'last_name'=>$last_name,
                        'first_name'=>$first_name,
                        'middle_name'=>$middle_name,
                        'nic_name'=>$alias,
                        'designation'=>$designation,
                        'created_by_id'=>$created_by_id,
                        'date_created'=>date('Y-m-d'),
                        'status'=>$status,
                        );

                        $this->db->insert('employees',$data);
                    else:
                        
                        $new_emp_id ="EMJGC".sprintf('%05d', 1);
                        $data = array(
                        'employee_id'=>$new_emp_id,
                        'last_name'=>$last_name,
                        'first_name'=>$first_name,
                        'middle_name'=>$middle_name,
                        'nic_name'=>$alias,
                        'designation'=>$designation,
                        'created_by_id'=>$created_by_id,
                        'date_created'=>date('Y-m-d'),
                        'status'=>$status,
                        );

                        $this->db->insert('employees',$data);

                    endif;
                endif;
            
        }

        public function edit_employees_info($date_edited, 
                                                   $edited_by_id,
                                                   $emp_id,
                                                   $last_name,
                                                   $first_name,
                                                   $middle_name,
                                                   $alias,
                                                   $designation,
                                                   $status
                                                   ){
                    $data = array('date_edited'=>$date_edited,
                                  'edited_by_id'=>$edited_by_id,
                                  'last_name'=>$last_name,
                                  'first_name'=>$first_name,
                                  'middle_name'=>$middle_name,
                                  'nic_name'=>$alias,
                                  'designation'=>$designation,
                                  'status'=>$status

                                 );
                    $this->db->where('id',$emp_id)->update('employees',$data);
                    }
}