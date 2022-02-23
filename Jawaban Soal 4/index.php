<?php 
    require_once 'Company.php';
    require_once 'Department.php';
    require_once 'Employee.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Comapany Name</td>
            <td>:</td>
            <td><b><?php echo $employee->getCompanyName()?></b></td>
        </tr>
        <tr>
            <td>Department</td>
            <td>:</td>
            <td><b><?php echo $employee->getDepartmentName()?></b></td>
        </tr>
        <tr>
            <td>Employee Name</td>
            <td>:</td>
            <td><b> <?php echo $employee->setEmployeeName("Muhammad Fathan Ridlo")?> </b></td>
        </tr>
        <tr>
            <td>Employee Title</td>
            <td>:</td>
            <td><b> <?php echo $employee->getEmployeeTitle()?> </b></td>
        </tr>
        <tr>
            <td>Employee Profile</td>
            <td>:</td>
            <td><b> <?php echo $employee->getEmployeeProfile()?> </b></td>
        </tr>
        <tr>
            <td>Gaji/bulan</td>
            <td>:</td>
            <td><b>Rp. <?php echo $employee->getEmployeeMonthlySalary(30)?> </b></td>
        </tr>
    </table>
</body>
</html>