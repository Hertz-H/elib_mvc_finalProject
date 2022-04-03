
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/check_out.css">
</head>

 
<body>
<?php include('include/header.php');?>
 <div class="container">
 <div class="check_out_heading">
    <div class="shoping_cart">
        <i class="fas fa-cart-arrow-down"></i>
       </div>
     <h2>السلة</h2>
  <?php 
  $count=0;
  if(isset($_SESSION['cart'])&&$_SESSION['cart']!=""){
         $count=sizeof($_SESSION['cart']);
     echo "<span> (".$count. "منتجات )</span>";
    }else{
        // echo "<span style=''> (".$count. "منتجات )</span>";

        echo "<div  style='margin-bottom:70vh' ></div>";
     } ?>
 </div>
 <?php   if (isset($_SESSION['cart'])&&!empty($_SESSION['cart'])){  ?>
 <div class="checkout_cards_container">
    <div class="chckout_prod_con">
     
         
            <?php  $index=0;  
            foreach($_SESSION['cart'] as $pro_arr){ $index++; ?>
                <div class="product_item">
                       
                <div class="book_img_info">
                    <div class="book_img_heading">
                        <i class="book_img"><img src="images/<?=$pro_arr["image"] ?>" alt=""></i>
                        <div class="book_heading">
                            <h3 class="">
                            <?=$pro_arr['name']?>

                         <!-- ( كتاب الكتروني) -->
                           
                            </h3>
                          
                            <span class="product_note">
                                هذا المنتج قابل للخصم لحاملي بطاقة مكتبة جرير 
                            </span>
                          
                        </div>
                    </div>
                    <div class="delivery_note">
                     <span>    ملاحظة:</span>  هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  <span class="colored"> كيفية الحصول على المنتج ؟</span>    
                        </div>   
                    <span class="price">
                   <?=$pro_arr['price']?>  <span class="currency">ر.س</span>
                    </span>
                    <div class="quantiy">
                        <div><?=$pro_arr['quantity']?></div>
                        <div>  
                            <a href="/addToCart" data-id=<?=$pro_arr['id']?>  class="increase"><i>+</i></a>
                             <a href="/addToCart" data-id=<?=$pro_arr['id']?> class="decrease"><i>-</i></a>
                      
                        </div>
                    </div>
                  
                </div>
                <hr>
                
                     <a  href="/addToCart" data-id=<?=$pro_arr['id']?>  class="delete"><span class="dot"><i class="far fa-times-circle"></i></span> <span class="delet">  أحذف</span> </a>
                
        </div>
       
        <?php }} ?>
        <?php   if(isset($_SESSION['cart'])&&!empty($_SESSION['cart'])){
                $totall=0;
                foreach($_SESSION['cart']as $product ){
                   $totall+=(int)$product['price'];
                 }
                   $_SESSION['totall']=$totall;?>
             </div>
             <div class="basket_container">
        <div class="upper_section">
            <div class="sum"><div class="right_side"> المجموع </div> <div class="left_side"><?= $_SESSION['totall']?> <span class="currency_sum">ر.س</span></div></div>
            <div class="delivery_cost"><div class="right_side">   تكاليف الشحن   </div> <div class="left"><span class="cost_span">مجاني  </span> </div></div>
            <div class="total"><div class="right_side">  المجموع الكلي  <span class="currency_sum"> شامل الضريبة </span></div> <div class="left_side"><?= $_SESSION['totall']?> <span class="currency"> ر.س</span></div></div>
          
        </div>
        <div class="lower_section">
            <div class="policy_notation">
                بالضغط على "انهاء التسوق فأنت توافق على              <span class="colored_policy"> على الشروط والاحكام و سياسة الخصوصية </span>            </div>
            <a href="/order"><button class="basket_btn">تحديث سلة التسوق</button></a>
            
        </div>
        
    
    <?php } ?>

</div>
    </div>
    </div>
    </div>
<?php include('include/footer.php');?>
</body>

<script>

document.querySelectorAll(".increase").forEach((item) => {
        item.addEventListener('click', (e) => {
            console.log(item, 'cliced');
            // e.preventDefault();
             document.cookie = "ProductId="+item.dataset.id ;
             document.cookie = "increase="+item.dataset.id ;

        });
    });
    document.querySelectorAll(".decrease").forEach((item) => {
        item.addEventListener('click', (e) => {
            console.log(item, 'cliced');
            // e.preventDefault();
            document.cookie = "ProductId="+item.dataset.id ;
         document.cookie = "decrease="+item.dataset.id ;

        });
    });  
    document.querySelectorAll(".delete").forEach((item) => {
        item.addEventListener('click', (e) => {
            console.log(item, 'cliced');
            // e.preventDefault();
            document.cookie = "ProductId="+item.dataset.id ;
         document.cookie = " delete="+item.dataset.id ;

        });
    });  
   
    </script>

</html>
