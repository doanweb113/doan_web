<?php 
include "./connect/connect.php" ;
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- thư viện slick slider  -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- thư viện animation AOS -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css"> -->
   <!-- thư viện animation WOW -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php include "./header.php"?>
<!-- hết phần header  -->

<!-- sang làm phần main -->
<div class="main" style="overflow-x: hidden;">
 <div class="main-banner animate__animated animate__zoomIn animate__slow">
        <div class="main-header-slider single-item">
            <div class="main-banner-item">
                <img src="./banner/banner1.jpg" alt="">
                <div class="container">
                   <div class="main-banner-item-text">
                       <h4 class="main-banner-item-text-tittle ">mona watch</h4>
                       <h1 class="main-banner-item-text-tittle1">đồng hồ classico</h1>
                       <p class="main-banner-item-text-info">
                          Cùng với sự phát triển không ngừng của thời trang thế giới, rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính hãng đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…
                       </p>
                       <a href="" class="main-banner-item-text-btn"><p>xem sản phẩm</p></a>
                   </div>
                </div>
            </div>
    
            <div class="main-banner-item">
                <img src="./banner/banner2.jpg" alt="">
               <div class="container">
                  <div class="main-banner-item-text">
                      <h4 class="main-banner-item-text-tittle ">mona watch</h4>
                      <h1 class="main-banner-item-text-tittle1">đồng hồ classico</h1>
                      <p class="main-banner-item-text-info">
                         Cùng với sự phát triển không ngừng của thời trang thế giới, rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính hãng đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…
                      </p>
                      <a href="" class="main-banner-item-text-btn"><p>xem sản phẩm</p></a>
                  </div>
               </div>
           </div>
        </div>

    <!-- làm phần mũi tên chuyển slide  -->
    <div class="main-banner-arrow main-banner-arrow-left">
        <p><i class="fas fa-arrow-left"></i></p>
    </div>
    <div class="main-banner-arrow main-banner-arrow-right">
        <p><i class="fas fa-arrow-right"></i></p>
    </div>
 </div>


 <!-- sang phần tiếp theo sau banner  -->
 <div class="main-2">
     <div class="container">
         <div class="main-2-s">
             <div class="main-2-item animate__animated animate__backInDown animate__slow">
                 <div class="main-2-item-img"><a href=""><img class="main-2-item-img-image" src="./anh/anh1.jpg" alt=""></a></div>
                 <div class="main-2-item-text">
                    <h3>Xu hướng 2019</h3>
                    <a href="./product.php?loai=nam"><h1>Đồng hồ nam</h1></a>
                </div>
             </div>

             <div class="main-2-item animate__animated animate__backInDown animate__slow">
                <div class="main-2-item-img"><a href=""><img class="main-2-item-img-image" src="./anh/anh2.jpg" alt=""></a></div>
                <div class="main-2-item-text">
                   <h3>Xu hướng 2019</h3>
                   <a href="./product.php?loai=nu"><h1>Đồng hồ nữ</h1></a>
               </div>
            </div>
         </div>
     </div>
 </div>

 <!-- làm phần main show sản phẩm -->
 <div class="main-3 " data-aos="fade-right" style="overflow-x: hidden;">
     <div class="container">
         <div class="main-3-tittle">
             <h2>Sản phẩm bán chạy</h2>
             <div class="main-3-tittle-arrow">
                 <div class="main-3-tittle-arrow-left  main-3-tittle-arrow-size">
                    <i class="fas fa-chevron-left"></i>
                 </div>
                 <div class="main-3-tittle-arrow-right main-3-tittle-arrow-size ">
                    <i class="fas fa-chevron-right"></i>
                 </div>
             </div>
         </div>
         <div class="main-3-s row responsive">

         <?php
         $sql="select * from sanpham";
         $query=mysqli_query($conn, $sql);
         while($row=mysqli_fetch_assoc($query))
         {
         ?>
             <div class="main-3-item">
                 <div class="main-3-item-img"><a href="./product-information.php?id=<?php echo $row["ID"]?>"><img src="./sanpham/<?php echo $row["anhgoc"]?>" alt=""></a></div>
                 <div class="main-3-item-text">
                     <h3 class="main-3-item-text-name"><a href=""><?php echo $row["tensanpham"];?></a></h3>
                     <p class="main-3-item-text-price"><del class="old-price"><?php echo number_format($row["giacu"])?>đ</del> <?php echo number_format($row["giamoi"])?>đ</p>
                     <a href="./testcart.php?id=<?php echo $row["ID"]?>" class="main-3-item-text-btn">Thêm vào giỏ</a>
                 </div>
                 <div class="love-card">
                    <p><i class="fas fa-heart"></i></p>
                   </div>
             </div>
<?php }?>
         </div>
     </div>
 </div>


 <div class="main-4" data-aos="fade-left" style="overflow-x: hidden;">
     <div class="container">
         <div class="main-4-s">
             <div class="row1">
                 <div class="main-4-item">
                        <a href=""><img class="main-4-item-image" src="./anh/anh6.jpg" alt=""></a>
                     <div class="main-4-text">
                         <h2>cổ điển</h2>
                         <p>Đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
                     </div>
                 </div>

                 <div class="main-4-item" >
                    <a href=""><img class="main-4-item-image" src="./anh/anh7.jpg" alt=""></a>
                 <div class="main-4-text main-4-text-1">
                     <h2>SMART WATCH</h2>
                     <p>Đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
                 </div>
             </div>

             </div>
         </div>
     </div>
 </div>

 <!-- làm phần main-5 -->
 <div class="main-5">
     <div class="container">
         <div class="main-5-s">
             <div class="main-5-tittle" data-aos="fade-left" style="overflow-x: hidden;">
                 <ul class="main-5-tittle-list">
                     <li class="main-5-tittle-list-item main-5-tittle-list-item-active"><a href="">Các loại mẫu sản phẩm</a></li>
                 </ul>
             </div>
             <div class="row1"data-aos="fade-right" style="overflow-x: hidden;">
             <?php
              $sql="select * from sanpham";
              $query=mysqli_query($conn, $sql);
              $i=0;
              while($row=mysqli_fetch_assoc($query))
              {
                  if($i<12)
                  {
             ?>
                 <div class="main-5-item" >
                     <a href="./product-information.php?id=<?php echo $row["ID"]?>"><img class="main-5-item-image" src="./sanpham/<?php echo $row["anhgoc"]?>" alt=""></a>
                     <div class="main-3-item-text">
                        <h3 class="main-3-item-text-name"><a href=""><?php echo $row["tensanpham"];?></a></h3>
                        <p class="main-3-item-text-price"><del class="old-price"><?php echo number_format($row["giacu"]);?>đ</del> <?php echo number_format($row["giamoi"]);?>đ</p>
                        <a href="./testcart.php?id=<?php echo $row["ID"]?>" class="main-3-item-text-btn">Thêm vào giỏ</a>
                    </div>
                    <div class="love-card">
                        <p><i class="fas fa-heart"></i></p>
                       </div>
                 </div>
                <?php } $i++;}?>
             </div>
         </div>
     </div>
 </div>

 <!-- làm phần main-6 -->
 <div class="main-6" data-aos="fade-down">
     <div class="container">
         <div class="main-6-s">
             <div class="row1">
                 <div class="main-6-item">
                     <div class="main-6-item-image">
                         <a href="./new-information1.html"><img src="./anh/anh3.jpg" alt=""></a>
                     </div>
                     <div class="main-6-item-text">
                         <h5 class="main-6-item-text-tittle">
                           <a href="./new-information1.html"> Chiếc đồng hồ của những CEO quyền lực nhất thế...</a>
                         </h5>
                         <p class="main-6-item-text-info">
                            Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là...
                         </p>
                     </div>
                 </div>

                 <div class="main-6-item">
                    <div class="main-6-item-image">
                        <a href="./new-information2.html"><img src="./anh/anh4.jpg" alt=""></a>
                    </div>
                    <div class="main-6-item-text">
                        <h5 class="main-6-item-text-tittle">
                          <a href="./new-information2.html"> 12 chiếc đồng hồ dành cho nữ giới đắt giá nhất...</a>
                        </h5>
                        <p class="main-6-item-text-info">
                            Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu chững lại trong hai...
                        </p>
                    </div>
                </div>



                <div class="main-6-item">
                    <div class="main-6-item-image">
                        <a href="./new-information3.html"><img src="./anh/anh5.jpg" alt=""></a>
                    </div>
                    <div class="main-6-item-text">
                        <h5 class="main-6-item-text-tittle">
                          <a href="./new-information3.html"> 10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex...</a>
                        </h5>
                        <p class="main-6-item-text-info">
                            Audemars Piguet được thành lập vào năm 1875 bởi Jules-Louis Audemars và Edward-Auguste Piguet, Audemars Piguet sản xuất...
                        </p>
                    </div>
                </div>

             </div>
         </div>
     </div>
 </div>
 <!-- làm phần main-7 -->
 <div class="main-7" data-aos="fade-left" style="overflow-x: hidden;">
     <div class="container">
         <div class="main-7-s">
                <div class="main-7-tittle">
                    <h2>ĐĂNG KÝ NHẬN THÔNG TIN</h2>
                </div>
                <div class="main-7-search">
                    <input type="text" placeholder="Tìm kiếm..." id="main-7-search-input">
                    <button type="submit" id="main-7-search-btn">Đăng ký</button>
                </div>
         </div>
     </div>
 </div>
 </div>
<!-- hết phần làm main -->
<footer>
   <div class="container">
       <div class="footer-s">
        <div class="row2">


            <div class="footer-item footer-item-1">
                <h2 class="footer-item-tittle">THÔNG TIN LIÊN HỆ</h2>
                <div class="footer-item-list">


                    <div class="footer-item-list-item">
                        <div class="footer-item-list-item-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="footer-item-list-item-text">
                            <p><a href="">319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                        <div class="footer-item-list-item-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="footer-item-list-item-text">
                            <p><a href="">076 922 0162</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                        <div class="footer-item-list-item-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="footer-item-list-item-text">
                            <p><a href="">demonhunterg@gmail.com
                                mon@mona.media</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                        <div class="footer-item-list-item-icon">
                            <i class="fab fa-skype"></i>
                        </div>
                        <div class="footer-item-list-item-text">
                            <p><a href="">demonhunterp</a></p>
                        </div>
                    </div>


                </div>
                <div class="footer-item-icon">
                    <div class="footer-item-icon-item footer-item-icon-item-face">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="footer-item-icon-item footer-item-icon-item-insta">
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="footer-item-icon-item footer-item-icon-item-twitter">
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="footer-item-icon-item footer-item-icon-item-wifi">
                        <a href=""><i class="fas fa-wifi"></i></a>
                    </div>
                    <div class="footer-item-icon-item footer-item-icon-item-linked">
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>


               <div class="footer-item footer-item-1">
                <h2 class="footer-item-tittle">LIÊN KẾT</h2>
                <div class="footer-item-list">


                    <div class="footer-item-list-item">
                       
                        <div class="footer-item-list-item-text">
                            <p><a href="./introduce.html">Giới thiệu</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                       
                        <div class="footer-item-list-item-text">
                            <p><a href="./product-boy.html">Đồng hồ nam</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                        
                        <div class="footer-item-list-item-text">
                            <p><a href="./product-girl.html">Đồng hồ nữ</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                       
                        <div class="footer-item-list-item-text">
                            <p><a href="./news.html">Blogs</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                       
                        <div class="footer-item-list-item-text">
                            <p><a href="./contact.html">Liên hệ</a></p>
                        </div>
                    </div>

                </div>
            </div>



            <div class="footer-item footer-item-1">
                <h2 class="footer-item-tittle">HỖ TRỢ</h2>
                <div class="footer-item-list">


                    <div class="footer-item-list-item">
                        
                        <div class="footer-item-list-item-text">
                            <p><a href="./introduce.html">Hướng dẫn mua hàng</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                        
                        <div class="footer-item-list-item-text">
                            <p><a href="./introduce.html">Hướng dẫn thanh toán</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                       
                        <div class="footer-item-list-item-text">
                            <p><a href="./introduce.html">Chính sách bảo hành</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                      
                        <div class="footer-item-list-item-text">
                            <p><a href="./introduce.html">Chính sách đổi trả</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                    
                        <div class="footer-item-list-item-text">
                            <p><a href="./contact.html">Tư vấn khách hàng</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-item footer-item-4">
                <h2 class="footer-item-tittle">TẢI ỨNG DỤNG TRÊN</h2>
                <div class="footer-item-list">


                    <div class="footer-item-list-item">
                       
                        <div class="footer-item-list-item-text">
                            <p><a href="">Ứng dụng Mona Watch hiện có sẵn trên Google Play & App Store. Tải nó ngay.</a></p>
                        </div>
                    </div>

                    <div class="footer-item-list-item">
                        <img class="footer-item-list-item-img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/img-googleplay.jpg" alt="">
                    </div>

                    <div class="footer-item-list-item">
                        <img class="footer-item-list-item-img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/img-appstore.jpg" alt="">
                    </div>
                </div>
            </div>



        </div>
       </div>
   </div>
   <h3 class="footer-banquyen">@Bản quyền thuộc về lương ngọc vinh</h3>
</footer>
    <!-- thư viện js của jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- thư viện js của AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 500,
        });
      </script>
    <!-- thư viện js của slick slider -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.single-item').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: ".main-banner-arrow-left",
                nextArrow: ".main-banner-arrow-right",
            });

            $('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: ".main-3-tittle-arrow-left",
  nextArrow: ".main-3-tittle-arrow-right",
  autoplay: true,
autoplaySpeed: 1500,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
        });
    </script>
</body>
</html>