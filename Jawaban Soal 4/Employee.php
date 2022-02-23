<?php

    class Employee extends Department
    {
        private $name;
        private $title;
        public $salary = 50000;
        public function setEmployeeName($name)
        {
            return $name;
        }
        public function getEmployeeTitle()
        {
            return $title = "Magang";
        }
        public function getEmployeeProfile()
        {
            return "Mahasiswa Magang";
        }
        public function getEmployeeMonthlySalary($day)
        {
            // $calendar = CAL_GREGORIAN;
            // $month = date("m");
            // $years = date("Y");
            // $day = cal_days_in_month($calendar, $month, $years); coba dah
            return $day * $this->salary;
        }
    }

    $employee = new employee;
    $employee->setCompanyName('Dot');
    $employee->setDepartmentName('Quality Assurance');
    
?>