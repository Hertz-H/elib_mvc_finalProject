<?php
// session_start();
?>
<header>
    <div class="nav_fixed">
             <nav>
               
                <div class="container">
                    <div class="upper_header">
                        <ul class="long_nav list_nav">
                        <li><a class="sign_inbtn" href="login"><i><img src="img/man-user.png" alt=""></i> أدخل لحسابك</a><a  class="sign_upbtn" href="signup"> أو سجل الان </a></li>

                            <!-- <li><a class="sign_inbtn" href="home?action=login"><i><img src="img/man-user.png" alt=""></i> أدخل لحسابك</a><a  class="sign_upbtn" href="index?action=signup"> أو سجل الان </a></li> -->
                            <li><a href="home"><i><img src="img/star.png" alt=""></i>الرئيسية</a> </li>
                            <li><a href=""><i><img src="img/delivery-time.png" alt=""></i>من نحن </a> </li>
                            <li><a href=""><i><img src="img/contact.png" alt=""></i>اتصل بنا </a></li>
                            <li><a href=""><i><img src="img/help.png" alt=""></i>المساعدة</a> </li>
                            <li><a href=""><i><img src="img/location.png" alt=""></i>سياسة الخصوصية</a> </li>
                            <li><a href=""><i><img src="img/suadia.png" alt=""></i>اليمن </a> <i></i></li>
                            <li class="change_language"><a >English</a><i><img src="img/translation _2.png" alt=""></i> </li>
                        </ul>  
                        <div class="lower_header_section">
                            <div class="burger_menue">
                                <i class="fas fa-bars">
                                </i>
                               
                            </div>
                            <div class="search">
                                <input type="text" placeholder="البحث" class="search_input"><i class="fas fa-search"></i>
                            </div>
                             <a href="check_out"> <div class="shoping_cart">
                                <i class="fas fa-cart-arrow-down"></i> 
                                <div class=""><?php $count=0;
                            if(isset($_SESSION['cart'])&&$_SESSION['cart']!=""){
                                    $count=sizeof($_SESSION['cart']);
                                echo $count;
                                } ?></div>
                                                        </div>
                        </a>
                        </div>
                    </div>
                    <div class="dorp_down_menue">
                        <ul class="burger_list ">
                            <li><a class="sign_inbtn"><i><img src="img/man-user.png" alt=""></i> أدخل لحسابك</a><a class="sign_upbtn"> أو سجل الان </a></li>
                            <li><a href="home"><i><img src="img/star.png" alt=""></i>الرئيسية</a> </li>
                            <li><a href=""><i><img src="img/delivery-time.png" alt=""></i>من نحن </a> </li>
                            <li><a href=""><i><img src="img/contact.png" alt=""></i>اتصل بنا </a></li>
                            <li><a href=""><i><img src="img/help.png" alt=""></i>المساعدة</a> </li>
                            <li><a href=""><i><img src="img/location.png" alt=""></i>سياسة الخصوصية</a> </li>
                            <li><a href=""><i><img src="img/suadia.png" alt=""></i>اليمن </a> <i></i></li>
                            <li class="change_language"><a >English</a><i><img src="img/translation _2.png" alt=""></i> </li>
                        </ul>
                    </div>
                </div>
           
            </nav>
        </div> 
            <div class="container">
                <div class="lower_header_section search_logo_con">
                    <div class="logo">
                        <a href="home"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="search">
                        <input type="text" placeholder="البحث" class="search_input"><i class="fas fa-search"></i>
                    </div>
                    <a href="check_out"><div class="shoping_cart">
                        <i class="fas fa-cart-arrow-down"></i> 
                        <div class="basktet_items_added"><?php $count=0;
  if(isset($_SESSION['cart'])&&$_SESSION['cart']!=""){
         $count=sizeof($_SESSION['cart']);
     echo $count;
    } ?></div>
                    </div></a>
                </div>
            </div>
</header>