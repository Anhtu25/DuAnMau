<main class="catalog  mb ">
    <div class="boxleft">
        <div class="boxtitle">SẢN PHẨM</div>
        <div class="items">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh =  $img_path . $img;


                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="box_items ' . $mr . '">
                    <div class="box_items_img"><a href="' . $linksp . '"></a><img src="' . $hinh . '" alt=""></div>
                    
                <p class="price">$' . $price . '</p>
                <a class="" href="' . $linksp . '">' . $name . '</a>
            </div>';
                $i += 1;
            }
            ?>


        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->