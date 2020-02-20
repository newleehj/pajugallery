<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<style>
    .latest_wr2{width:24.25%;float:left;margin-right:1%;}
    .latest_wr2 > .pic_lt > ul > li { width: 100%;padding:0 10px;}
    .latest_wr2 > .pic_lt > ul{padding: 10px 5px;}
    .latest_wr3{width:24.25%;float:left;margin-right:1%;}
    .latest_wr3 > .pic_lt > ul > li { width: 100%;padding:0 10px;}
    .latest_wr3 > .pic_lt > ul{padding: 10px 5px;}
    .latest_wr4{width:24.25%;float:left;margin-right:1%;}
    .latest_wr4 > .pic_lt > ul > li { width: 100%;padding:0 10px;}
    .latest_wr4 > .pic_lt > ul{padding: 10px 5px;}
    .latest_wr5{width:24.25%;float:left;}
    .latest_wr5 > .pic_lt > ul > li { width: 100%;padding:0 10px;}
    .latest_wr5 > .pic_lt > ul{padding: 10px 5px;}
</style>
<h2 class="sound_only">최신글</h2>
<div class="main_img">
    <div class="slider">
        <div><img src="<?php echo G5_IMG_URL ?>/slide1.png" alt="메인페이지,소말리아"></div>
        <div><img src="<?php echo G5_IMG_URL ?>/slide2.png" alt="메인페이지,어린이교실"></div>
        <div><img src="<?php echo G5_IMG_URL ?>/slide3.png" alt="메인페이지,사진반"></div>
        <div><img src="<?php echo G5_IMG_URL ?>/slide4.png" alt="메인페이지,야외촬영"></div>
    </div>
</div>
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_basic', 'gallery', 5, 23);
    echo latest('pic_basic', 'gallery_all', 5, 23);
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr2">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_basic', 'g_news', 1, 23);
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr3">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_basic', 's_news', 1, 23);
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr4">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_basic', 't_news', 1, 23);  
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr5">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_basic', 'u_news', 1, 23); 
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr">
<!-- 최신글 시작 { -->

    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('basic', 'sroty', 6, 24);
        ?>
    </div>
    <div style="float:right;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('basic', 'free', 6, 24);
        ?>
    </div>

    <!-- } 최신글 끝 -->

</div>

<script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                autoControls: true,
                stopAutoOnClick: true,
                pager: true
            })
        });
</script>

<?php
include_once(G5_PATH.'/tail.php');
?>