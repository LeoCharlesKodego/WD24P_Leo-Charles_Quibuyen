<?php

include_once("../api/config.php");
include_once ("../api/constants.php");


define("TABLE_NAME", "orders");


if (isset($_GET['index']))
{

    $users = $database->get(TABLE_NAME);
    $data['records'] = $users;
    $data['total_rows'] = count($users);

    echo parseResponse(SUCCESS, "Successful", null, $data);
}


if (isset($_GET['show']))
{
   $id = $_GET['id'];
   
   $database->where("id", $id);
   $users = $database->getOne(TABLE_NAME);
   $data['records'] = $users;

   echo parseResponse(SUCCESS, "Successful", null, $data);
}




if (isset($_POST['destroy']))
{
    $id = $_POST['id'];

    $database->where("id", $id);
    $isDeleted = $database->delete(TABLE_NAME);

    echo parseResponse(SUCCESS, "Succesfully Deleted");
}



