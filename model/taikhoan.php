<?php
session_start();
function insert_taikhoan($email, $user, $pass){
    $sql = "INSERT INTO `taikhoan`(`user`, `pass`,`email`) VALUES ('$user','$pass','$email');";
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return  $listtaikhoan;
}
function loadone_taikhoan($id){
    $sql = "select * from taikhoan where id=".$id;
    $result = pdo_query_one($sql);
    return $result;
}
function checkuser($user, $pass){
 $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."' ";
 $sp = pdo_query_one($sql);
 return $sp;
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
   }
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql=  "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
function dangxuat() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
?>
