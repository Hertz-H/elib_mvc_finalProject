<section class="sections_container">
         <div class="heading">
             <h2>تصفح حسب القسم</h2>
         </div>
         <div class="sec_items_container">
         <?php foreach ( $params[0] as $data){?>
            <div class="sec_item">
            <a href="/catBooks" class="category" id="catId" data-id="<?=$data["id"]?>">
            <div class="img_sec_con">
                <i class="fas fa-book "></i>
                </div> 
                <p> <?=$data["name"]?>  </p></a>
            </div>
            <?php }?>
            <!-- <a href="/catBooks" class="category" id="catId" data-id="<?=$data["id"]?>"> -->
       
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
        </div>
         </section>
         <script>
         document.querySelectorAll(".category").forEach((item) => {
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
    </script>