<?php

include './db_conn.php';
include './build-cards.php';
include '../Model/query-newsletter.php';
include '../Model/query-build.php';

$database = new Database();
$db = $database->connect();

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


// trim html entities here!!!
  // Variables
  $newsName = trim(htmlentities($POST['newsName']));
  $newsEmail = trim(htmlentities($POST['newsEmail']));
// Variables

if($newsName == "" || $newsEmail == "")
{
  echo "Please fill out name and email.";
}
else{
  // array & db insert
  $newsData = [
    "newsName" => $newsName,
    "newsEmail" => $newsEmail,
  ];

  $newsletter = new Newsletter($db);
  $newsletter->addNewsletter($newsData);

  echo "Thank you for signing up!";
}
?>