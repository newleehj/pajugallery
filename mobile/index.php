<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



if(defined('G5_THEME_PATH')) {

    require_once(G5_THEME_PATH.'/index.php');

    return;

}



include_once(G5_MOBILE_PATH.'/head.php');

?>
<style>#m_main{width:420px;margin:20px auto;}</style>

<div id="m_main">
    <img src="<?php echo G5_IMG_URL ?>/main_m.png" alt="모바일 메인 사진">
</div>

<?php 

echo latest('pic_basic', 'gallery', 4, 23);
echo latest('pic_basic', 'gallery_all', 4, 23);
echo latest('basic', 'notice', 5, 23);


?>



<?php

include_once(G5_MOBILE_PATH.'/tail.php');

?>