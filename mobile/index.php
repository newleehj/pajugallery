<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



if(defined('G5_THEME_PATH')) {

    require_once(G5_THEME_PATH.'/index.php');

    return;

}



include_once(G5_MOBILE_PATH.'/head.php');

?>
<style>
    #m_main{width:100%;height:300px;overflow:hidden;}
    .slideList{width:100%;height:300px;position:relative;overflow:hidden;margin:0 auto;}
    .slideImg>img{width:100%;height:300px;display:block;}
</style>



<div id="m_main">
    <div class="slideList">
        <div class="slideImg"><img src="<?php echo G5_IMG_URL ?>/m_main.jpg" alt="파주작은갤러리"></div>
        <div class="slideImg"><img src="<?php echo G5_IMG_URL ?>/m_main1.jpg" alt="파주작은갤러리"></div>
        <div class="slideImg"><img src="<?php echo G5_IMG_URL ?>/m_main2.jpg" alt="파주작은갤러리"></div>
    </div>
</div>



<?php 

echo latest('pic_basic', 'gallery', 4, 23);
echo latest('pic_basic', 'gallery_all', 4, 23);
echo latest('pic_basic', 'g_news', 4, 23);
echo latest('pic_basic', 's_news', 4, 23);
echo latest('basic', 'sroty', 4, 23);

?>

<script>
    $(function(){
        $('.slideList').children('div:gt(0)').hide();
        var current=0;
        setInterval(function(){
            var next=(current+1)%3;
            $('.slideList').find('div').eq(current).hide();
            $('.slideList').find('div').eq(next).show();
            current=next;
         },3000)
    })
</script>

<?php

include_once(G5_MOBILE_PATH.'/tail.php');

?>