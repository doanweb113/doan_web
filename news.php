<?php
require_once "./connect/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
     <!-- thư viện slick slider  -->
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <!-- thư viện animation AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css">
    <!-- thư viện animation WOW -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!-- link của icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="./CSS/news.css">
</head>
<body>
<?php include "./header.php"; ?>
<!-- hết phần header  -->

<!-- làm phần main -->
<div class="main">
<div class="container">
<h1 class="main-tittle">blogs</h1>


<div class="main-s">
    <!-- làm phần main left -->
    <div class="main-left">
        <div class="main-left-search">
            <form action="">
                <div class="main-left-search-frame">
                    <input type="text" placeholder="Tìm kiếm...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>


        <div class="main-left-list">
            <h2 class="main-left-list-tittle">Bài viết mới</h2>
            <div class="main-left-list-frame">

                <div class="main-left-list-frame-item">
                    <div class="main-left-list-frame-item-img"><a href="./new-information1.html"><img src="./new/new-5.jpg" alt=""></a></div>
                    <div class="main-left-list-frame-item-text">
                        <p><a href="./new-information1.html">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a></p>
                    </div>
                </div>


                <div class="main-left-list-frame-item">
                    <div class="main-left-list-frame-item-img"><a href="./new-information2.html"><img src="./new/new-4.jpg" alt=""></a></div>
                    <div class="main-left-list-frame-item-text">
                        <p><a href="./new-information2.html">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</a></p>
                    </div>
                </div>


                <div class="main-left-list-frame-item">
                    <div class="main-left-list-frame-item-img"><a href="./new-information3.html"><img src="./new/new-3.jpg" alt=""></a></div>
                    <div class="main-left-list-frame-item-text">
                        <p><a href="./new-information3.html">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3</a></p>
                    </div>
                </div>


                <div class="main-left-list-frame-item">
                    <div class="main-left-list-frame-item-img"><a href="./new-information4.html"><img src="./new/new-2.jpg" alt=""></a></div>
                    <div class="main-left-list-frame-item-text">
                        <p><a href="./new-information4.html">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá “cắt cổ”</a></p>
                    </div>
                </div>

                <div class="main-left-list-frame-item">
                    <div class="main-left-list-frame-item-img"><a href="./new-information5.html"><img src="./new/new-1.jpg" alt=""></a></div>
                    <div class="main-left-list-frame-item-text">
                        <p><a href="./new-information5.html">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- hết làm phần main left -->
    
    
    
    
    <!-- làm phần main right -->
    <div class="main-right">
        <div class="main-right-item">
            <a href="./new-information1.html"><img src="./News/new1.jpg" alt=""></a>
            <div class="main-right-item-text">
                <h2 class="main-right-item-text-tittle"><a href="./new-information1.html">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a></h2>
                <p class="main-right-item-text-information"><a href="./new-information1.html">Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là...</a></p>
            </div>

            <div class="main-right-item-time">
                <p><span>05</span>  <span>Th7</span></p>
            </div>
        </div>


        <div class="main-right-item">
            <a href="./new-information2.html"><img src="./News/new2.jpg" alt=""></a>
            <div class="main-right-item-text">
                <h2 class="main-right-item-text-tittle"><a href="./new-information2.html">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</a></h2>
                <p class="main-right-item-text-information"><a href="./new-information2.html">Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu chững lại trong hai...</a></p>
            </div>
            <div class="main-right-item-time">
                <p><span>05</span>  <span>Th7</span></p>
            </div>
        </div>


        <div class="main-right-item">
            <a href="./new-information3.html"><img src="./News/new3.jpg" alt=""></a>
            <div class="main-right-item-text">
                <h2 class="main-right-item-text-tittle"><a href="./new-information3.html">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều...</a></h2>
                <p class="main-right-item-text-information"><a href="./new-information3.html">Audemars Piguet Được thành lập vào năm 1875 bởi Jules-Louis Audemars...</a></p>
            </div>
            <div class="main-right-item-time">
                <p><span>05</span>  <span>Th7</span></p>
            </div>
        </div>



        <div class="main-right-item">
            <a href="./new-information4.html"><img src="./News/new4.jpg" alt=""></a>
            <div class="main-right-item-text">
                <h2 class="main-right-item-text-tittle"><a href="./new-information4.html">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương...</a></h2>
                <p class="main-right-item-text-information"><a href="./new-information4.html">Bên cạnh những Cartier, IWC và Jaeger-LeCoultre, có nhiều chiếc...</a></p>
            </div>
            <div class="main-right-item-time">
                <p><span>05</span>  <span>Th7</span></p>
            </div>
        </div>


        <div class="main-right-item">
            <a href="./new-information5.html"><img src="./News/new5.jpg" alt=""></a>
            <div class="main-right-item-text">
                <h2 class="main-right-item-text-tittle"><a href="./new-information5.html">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock...</a></h2>
                <p class="main-right-item-text-information"><a href="./new-information5.html">Có tin Casio dự định trình làng smartwatch G-Shock trong vòng...</a></p>
            </div>
            <div class="main-right-item-time">
                <p><span>05</span>  <span>Th7</span></p>
            </div>
        </div>
    </div>
    <!-- hết làm phần main right -->
</div>
</div>


<div class="main-7">
    <form action="">
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
    </form>
</div>


</div>

<!-- hết làm phần main -->

















<!-- làm phần footer  -->
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
                        
                         <div class="footer-item-list-item-text ">
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
                             <p><a href="./news.html" class="footer-active">Blogs</a></p>
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
<!-- hết phần footer -->
 <!-- thư viện js của jquery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- thư viện js của AOS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
</body>
</html>