<div class="row2">
         <div class="row2 font_title">
          <h1>THONG KE HANG HOA TRONG DANH MUC</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>MA LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>SO LUONG</th>
                <th>GIA NHO NHAT</th>
                <th>GIA LON NHAT</th>
                <th>GIA TRUNG BINH</th>

            </tr>
           
            <?php
                foreach($dsthongke as $thongke)
                {
                    extract ($thongke);
                
            ?>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $name?></td>
                    <td><?php echo $soluong?></td>
                    <td>$ <?php echo $gia_min?></td>
                    <td>$ <?php echo $gia_max?></td>
                    <td>$ <?php echo number_format($gia_avg, 2)?></td>
                </tr>
            <?php
            }
            ?>
            
           </table>
           </div>
           <div class="row mb10 ">
            <a href="?act=bieudo"> 
                <input  class="mr20" type="button" value="Xem bieu do">
            </a>
           </div>
          </form>
         </div>
        </div>