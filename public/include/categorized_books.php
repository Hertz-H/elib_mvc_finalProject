<?php

foreach ($params[0] as $data) {

    if (!empty($params[1][$data["name"]])) { ?>
        <section class="offers_sections">
            <div class="home_sec_heading">
                <h2> <?= $data["name"] ?> </h2>
                <div class="home_show_all">
                    <a href=""> عرض الكل</a>
                </div>
            </div>
            <div class="offers_cards_container">
            <?php foreach ($params[1][$data["name"]] as $book) { ?>
              
                    <div class="card">

                        <div class="img_container">
                            <a href="/bookDetails"  class="books" id="bookId"data-id="<?= $book["id"] ?>"> <img src="images/<?= $book["image"] ?>" alt=""></a>
                        </div>
                        <div class="card_info ">
                            <div class="card_heading">
                                <i class=" "><img src="img/book.svg" alt=""></i>
                                <a href=""> <span> كتاب إلكتروني</span></a>
                                <div class=" book_name"> <span class=" book_name_span"> <?= $book["title"] ?> </span> <span>(كتاب إلكتروني) </span></div></a>
                            </div>
                            <div class="price_heading">
                                <span class="price"> <?= $book["price"] ?> </span><span class="currency">ر.س</span>
                                <div class="note"> شامل الضريبة</div>
                            </div>
                            <div class="card_icons_container">
                                <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                                <span class="basket_icon"> <a href="/addToCart" class="cart_add" id="productId" data-id="<?= $book["id"] ?>"> <i class="fas fa-cart-arrow-down"></i></a></span>


                                <span> <i class=""><img src="img/compare_2.svg" alt=""> </i>
                            </div>
                        </div>
                    </div>
                  
              
            <?php } ?>
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
                    <div class="slide_right"><i class="fas fa-angle-right"></i></div>
            </div>
        </section>

<?php
    }
}?>

<script>
    // var product_id = document.getElementById("productId");
   
    document.querySelectorAll(".cart_add").forEach((item) => {
        item.addEventListener('click', (e) => {
            console.log(item, 'cliced');
            // e.preventDefault();
            document.cookie = "ProductId="+item.dataset.id ;
         document.cookie = "action"+item.dataset.id ;

        });
    });
    document.querySelectorAll(".books").forEach((item) => {
        item.addEventListener('click', (e) => {
        //   document.cookie = "ProductId="+item.dataset.id ;

        //   if(item.id!='edit')
        //   {
            // document.cookie = "active"+"="+item.id;
        //   }
        //   else{
            document.cookie = item.id+"="+item.dataset.id ;}

        // } 
        );
    });

        // var cart_add_icons =document.querySelectorAll(".cart_add");
        // cart_add_icons.forEach(cart_add_icon=>{
        //     cart_add_icon.addEventListener("click",(e)=>{

        //     document.cookie = "ProductId="+e.target.dataset.id ;
        //     document.cookie = action+"="+e.target.dataset.id ;


        //  }
      

    

    // <span class="basket_icon"> <a href="/addToCart" class="cart_add" id="productId" data-id="<$book["id"]?>">  <i class="fas fa-cart-arrow-down"></i></a></span>
    // //done
    // function updateCart (action) {

    //      var product_id=document.getElementById("productId");
    //      // document.getElementById("addForm").submit();
    //      document.cookie = "ProductId="+product_id.dataset.id ;
    //      document.cookie = action+"="+product_id.dataset.id ;


    //  }
</script>