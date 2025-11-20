 <?php
if(!defined('IN_DEMOSOSO')) {
   exit('this is wrong page,please back to homepage');
}
?>
<?php  
   $arrf = dmget_curfolderandfile(pathinfo(__FILE__),1);  
  // pre($arrf);
   $arr = dmjtblock($arrf[0],$arrf[1],15);
  require FUNC_JTTEXT_CANARRFILE;
 ?>
  <div class="dmpj101 testimonial testimonial--two padding-tb bg-img <?php echo $cssname;?>" <?php echo $stylev;?>>
        <div class="container containeroverhide">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">               
                <h2><?php echo $title?></h2>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-delay=".5s">
                <div class="testimonial__slider--two overflow-hidden">
                    <div class="swiper-wrapper">
                       
                  <?php  dmblockid($bigbigcontent); ?>

                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
                
            </div>
        </div>
    </div>


  <script type="text/javascript">
       jQuery(document).ready(function () {
           
                   var swiper = new Swiper('.testimonial__slider--two', {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        speed: 1200,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".testimonial__pagination",
                            clickable: true,
                            renderBullet: function (index, className) {
                                return '<span class="' + className + '">' + (index + 1) + "</span>";
                            },
                        },
                        loop: true,
                        breakpoints: {
                            480: {
                                slidesPerView: 1,
                            },
                            992: {
                                slidesPerView: 2,
                            },
                        },
                    });   

       });

    </script>