<?php
if(is_array($dm)){
    extract($dm);
}
?>
<div class="row2">
  <div class="row2 font_title">
    <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=updatedm" method="POST">
      <div class="row2 mb10 form_content_container">
        <label> Mã tài khoản </label> <br>
        <input type="text" name="matk" value="<?php if(isset($id)&&($id!=""))echo $id ; ?>"?>
      </div>
      <div class="row2 mb10">
        <label>Tên đăng nhập </label> <br>
        <input type="text" name="tentk" value="<?php if(isset($user)&&($user!=""))echo $user ; ?>" ?>
      </div>
      <div class="row2 mb10 form_content_container">
        <label> Pass </label> <br>
        <input type="text" name="maloai" value="<?php if(isset($pass)&&($pass!=""))echo $pass; ?>">
      </div>
      <div class="row2 mb10">
        <label>Tên loại </label> <br>
        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name ; ?>" >
      </div>
      <div class="row2 mb10 form_content_container">
        <label> Mã loại </label> <br>
        <input type="text" name="maloai" disabled placeholder="nhập vào mã loại">
      </div>
      <div class="row2 mb10">
        <label>Tên loại </label> <br>
        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name ; ?>" >
      </div>
      <div class="row mb10 ">
        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $id ; ?>">
        <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    
      ?>
    </form>
  </div>
</div>