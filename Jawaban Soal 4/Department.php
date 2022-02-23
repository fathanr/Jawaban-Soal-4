<?php

    class Department extends Company
    {
        private $name;
        public function setDepartmentName($name)
        {
            $this->name = $name;
        }
        public function getDepartmentName()
        {
            return $this->name;
        }
    }

    $department = new department;    
?>