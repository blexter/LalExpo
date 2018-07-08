<?
if(!empty($_GET['log']))
if($_POST['user']=='user@gmail.com' && $_POST['pass']=='1234'){
  echo 1;
}else{
  echo 'incorrect username or password';
}