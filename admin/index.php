<?php
include '../model/pdo.php';
include "../model/danhmuc.php";
include "../model/sanpham_model.php";
include "../model/thongke.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "adddm":
            // kiểm tra xemn người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case "listdm":
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "xoadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "delete from danhmuc where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case "suadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = loadone_danhmuc($_GET['id']);
            }

            include "danhmuc/update.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case "listsp":
            if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                $keyw = $_POST['keyw'];
                $iddm = $_POST['iddm'];
            } else {
                $keyw = "";
                $iddm = "";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyw, $iddm);
            include "sanpham/list.php";
            break;
        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                //                    echo $hinh;
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                //                    echo $target_file;
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    //                        echo "Bạn đã upload ảnh thành công";
                } else {
                    //                        echo "Upload ảnh không thành công";
                }
                //                    echo $iddm;
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thanhcong = "Thêm thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case "suasp":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $sanpham = loadone_sanpham($_GET['idsp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cập nhật thành công!";
            }
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/list.php";
            break;
        case "bieudo":
            include "bieudo.php";
            break;
        case "hard_delete":
            if (isset($_GET['idsp'])) {
                hard_delete($_GET['idsp']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case "soft_delete":
            if (isset($_GET['idsp'])) {
                soft_delete($_GET['idsp']);
            }
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/list.php";
            break;
        case "thongke":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/list.php";
            break;
        case "bieudo":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "bieudo.php";
            break;
        case "dskh":
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case "xoatk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "delete from taikhoan where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case "suatk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $listtaikhoan = loadone_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        default:
        case "dsbl":
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;

    }
} else {
    include "home.php";
}
include "footer.php";
