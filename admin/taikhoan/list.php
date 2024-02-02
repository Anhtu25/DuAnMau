<div class="row2">
    <div class="row2 font_title">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="row2 form_content">
        <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã tài khoản</th>
                    <th>Email</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu </th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Vai trò</th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' .$id. '</td>
                                
                                <td>' .$user. '</td>
                                <td>' .$pass. '</td>
                                <td>' .$email. '</td>
                                <td>' .$address. '</td>
                                <td>' .$tel. '</td>
                                <td>' .$role. '</td>
                                <td><a href="' . $suatk . '"><input type="button" value="sửa"></a> <a href="' . $xoatk . '"><input type="button" value="xóa"></a></td>
                            </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addtk"><input type="button" value="nhập thêm"></a>
        </div>
    </div>
</div>