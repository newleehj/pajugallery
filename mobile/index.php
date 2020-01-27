<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



if(defined('G5_THEME_PATH')) {

    require_once(G5_THEME_PATH.'/index.php');

    return;

}



include_once(G5_MOBILE_PATH.'/head.php');

?>


<?php 

echo latest('pic_basic', 'gallery', 4, 23);
echo latest('pic_basic', 'gallery_all', 4, 23);
echo latest('basic', 'notice', 5, 23);


?>



<?php

include_once(G5_MOBILE_PATH.'/tail.php');

?>