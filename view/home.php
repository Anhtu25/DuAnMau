<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh =  $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                $linksp = "index.php?act=sanphamct&idsp=" . $id;


                echo '<div class="box_items ' . $mr . '">
                        <div class="box_items_img"> <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a> </div>
                        <p class="price">$' . $price . '</p>
                    <a class="item_name" href="' . $linksp . '">' . $name . '</a>
              
              
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