<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                

        }
        public function daily_employee($date_today,$branch_id) {
            $sql_daily_employee ="SELECT count(id) as id FROM employees WHERE date_created like '%".$date_today."%' and branch_id = '".$branch_id."' ";
            $daily_employee = $this->db->query($sql_daily_employee);

            return $daily_employee;
        }

         public function weekly_employee($date_today,$branch_id) {
            $sql_weekly_employee ="SELECT count(id) as id FROM employees WHERE yearweek(date_created,1) = yearweek('$date_today',1) and branch_id = '".$branch_id."' ";
            $weekly_employee = $this->db->query($sql_weekly_employee);

            return $weekly_employee;
        }

        public function monthly_employee($date_month,$branch_id) {
            $sql_monthly_employee="SELECT count(id) as id FROM employees WHERE date_created like '%$date_month%' and branch_id = '".$branch_id."' ";
            $monthly_employee = $this->db->query($sql_monthly_employee);

            return $monthly_employee;
        }

        public function count_up_today($date_today,$branch_id) {
            $sql_count_up_today ="SELECT count(zip_requirements.id) as id FROM zip_requirements inner join employees on employees.employee_id=zip_requirements.employee_id WHERE date_send like '%".$date_today."%' and employees.branch_id = '".$branch_id."' ";
            $count_up_today = $this->db->query($sql_count_up_today);

            return $count_up_today;
        }

        public function count_with_file($branch_id) {
            $sql_count_with_file ="SELECT count(zip_requirements.id) as id FROM zip_requirements inner join employees on employees.employee_id=zip_requirements.employee_id WHERE file_name != '' and employees.branch_id = '".$branch_id."' ";
            $count_with_file = $this->db->query($sql_count_with_file);

            return $count_with_file;
        }

        public function count_without_file($branch_id) {
            $sql_count_without_file ="SELECT count(zip_requirements.id) as id FROM zip_requirements inner join employees on employees.employee_id=zip_requirements.employee_id WHERE file_name = '' and employees.branch_id = '".$branch_id."' ";
            $count_without_file = $this->db->query($sql_count_without_file);

            return $count_without_file;
        }

        public function list_without_file($branch_id) {
            $sql_list_without_file ="SELECT employees.last_name as last_name,
                                             employees.first_name as first_name,
                                             employees.middle_name as middle_name,
                                             employees.employee_id as employee_id,
                                             employees.email_address as email_address,
                                             zip_requirements.ref_id as ref_id,
                                             employees.date_hired as date_hired
                                             FROM zip_requirements inner join employees on employees.employee_id=zip_requirements.employee_id WHERE file_name = '' and employees.branch_id = '".$branch_id."' ";
            $list_without_file = $this->db->query($sql_list_without_file);

            return $list_without_file->result();
        }

         public function list_uploaded_today($date_today,$branch_id) {
            $sql_list_uploaded_today ="SELECT employees.last_name as last_name,
                                             employees.first_name as first_name,
                                             employees.middle_name as middle_name,
                                             employees.employee_id as employee_id,
                                             employees.date_hired as date_hired,
                                             zip_requirements.file_name as file_name,
                                             zip_requirements.date_send as date_send
                                             FROM zip_requirements inner join employees on employees.employee_id=zip_requirements.employee_id WHERE date_send like '%".$date_today."%' and employees.branch_id = '".$branch_id."' ";
            $list_uploaded_today = $this->db->query($sql_list_uploaded_today);

            return $list_uploaded_today->result();
        }

        public function list_with_file($branch_id) {
            $sql_list_with_file ="SELECT employees.last_name as last_name,
                                             employees.first_name as first_name,
                                             employees.middle_name as middle_name,
                                             employees.employee_id as employee_id,
                                             employees.date_hired as date_hired,
                                             zip_requirements.file_name as file_name,
                                             zip_requirements.date_send as date_send
                                             FROM zip_requirements inner join employees on employees.employee_id=zip_requirements.employee_id WHERE file_name != '' and employees.branch_id = '".$branch_id."' ";
            $list_with_file = $this->db->query($sql_list_with_file);

            return $list_with_file->result();
        }

     
}
