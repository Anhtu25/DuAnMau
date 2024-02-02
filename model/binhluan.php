<?php 
    function loadall_binhluan($idpro){
        $sql = "
          select * from binhluan where 1
        ";
        if($idpro>0)
        $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id desc";
        $listbl =  pdo_query($sql);
        return $listbl;
    }
    
    function insert_binhluan($idpro, $noidung) {
        $date = date('Y-m-d');
        $sql = "
        INSERT INTO `binhluan`(`noidung`, `user`, `idpro`, `ngaybinhluan`) 
        VALUES ('$noidung','anhtu123','$idpro','$date');
        "
        
        // Định nghĩa các tham số cho truy vấn.
    
        // Thực thi truy vấn và trả về kết quả.
        $result = pdo_execute($sql);
        return $result;
    }
    

?>