<?php
include '../class/class.customer.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';


switch($action){
	case 'new':
        create_new_customer();
	break;
    case 'update':
        update_customer();
	break;
    case 'delete':
        delete_customer();
    break;
}

function create_new_customer(){
    $customer = new Customer();
    $fname = ucfirst($_POST['cust_fname']);
    $mname = ucfirst($_POST['cust_mname']);
    $lname = ucfirst($_POST['cust_lname']);
    $email = $_POST['cust_email'];
    $address = $_POST['cust_address'];
    $cnumber = $_POST['cust_cnumber'];

    $result = $customer->new_customer($fname,$mname,$lname,$email,$address,$cnumber);
    if($result){
        $id = $customer->get_cust_id($fname);
        header("location: ../index.php?page=customers&subpage=records");
    }
}

function update_customer(){  
    $customer = new Customer();
    $cust_id = $_POST['cust_id'];
    $fname = ucfirst($_POST['cust_fname']);
    $mname = ucfirst($_POST['cust_mname']);
    $lname = ucfirst($_POST['cust_lname']);
    $email = $_POST['cust_email'];
    $address = $_POST['cust_address'];
    $cnumber = $_POST['cust_cnumber'];
    
    $result = $customer->update_customer($fname,$mname,$lname,$email,$address,$cnumber,$cust_id);
    if($result){
        header('location: ../index.php?page=customers&subpage=records&id='.$cust_id);        
    }
}

function delete_customer(){
    $customer = new Customer();
    $cust_id = $_GET['cust_id'];
    $fname = $_GET['cust_fname'];
    $mname = $_GET['cust_mname'];
    $lname = $_GET['cust_lname'];
    $email = $_GET['cust_email'];
    $address = $_GET['cust_address'];
    $cnumber = $_GET['cust_cnumber'];

    $result = $customer->delete_customer($fname,$mname,$lname,$email,$address,$cnumber,$cust_id);
    if($result){
        header('location: ../index.php?page=customers&subpage=records');        
    }
}

