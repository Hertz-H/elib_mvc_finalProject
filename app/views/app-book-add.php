<!DOCTYPE html>



























<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">

  
<!-- form-layouts-sticky.html , Sat, 26 Mar 2022 16:53:13 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sticky Actions - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
    




<!-- Menu -->
<?php include_once("include/aside.php")?>

<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
    

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            


<!-- Sticky Actions -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
        <h5 class="card-title mb-sm-0 me-2">اضافة كتاب</h5>
        <div class="action-btns">
         
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <form action="/book_save" method="POST" enctype="multipart/form-data">
          <!-- enctype="multipart/form-data" -->
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="Title">الاسم</label>
                <input type="text" id="Title" class="form-control" name ="name"placeholder="" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="email">الصورة</label>
                <div class="input-group input-group-merge">
                  <input class="form-control" type="file" id=" " name="book_img" placeholder=" " aria-label="john.doe" aria-describedby="email3" />
                  <span class="input-group-text" > </span>
                </div>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="state">الصنف</label>
                <select id="state" class="select2 form-select"name ="cate_id" data-allow-clear="true">
                <?php foreach($params[0] as $data){?> 
                <option value=<?=$data["id"]?>><?=$data["name"]?></option>
                <?php }?> 
                </select>
              </div>
    
              <div class="col-md-6">
                <label class="form-label" for="alt-num">السعر</label>
                <input type="text" id="alt-num" name ="price"class="form-control phone-mask" placeholder="" />
              </div>
              
              <div class="col-12">
                <label class="form-label" for="address">الوصف</label>
                <textarea name="description" class="form-control" id="address" rows="2" placeholder=""></textarea>
              </div>
               
              <div class="col-md-6">
                <label class="form-label" for="state">المؤلف</label>
                <select id="author_id" name="author_id"class="select2 form-select" data-allow-clear="true">
                <?php foreach($params[1] as $data){?> 
                <option value=<?=$data["id"]?>><?=$data["name"]?></option>
                <?php }?> 
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="state">دار النشر</label>
                <select id="state" name="publisher_id" class="select2 form-select" data-allow-clear="true">
                <?php foreach($params[2] as $data){?> 
                <option value=<?=$data["id"]?>><?=$data["name"]?></option>
                <?php }?> 
                </select>
              </div>
              
              <div class="col-md-6">
                <label class="form-label" for="alt-num">عدد الصفحات </label>
                <input type="number" id="alt-num" name="page_num"class="form-control phone-mask" placeholder="" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="landmark">الصيغة</label>
                <input type="text" id="landmark" name="format"class="form-control" placeholder="" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="pincode">الكمية</label>
                <input type="number" id="alt-num" name="quantity"class="form-control " placeholder="" />
              </div>
           
          </div>
          <div style="margin-top:20px; margin-left:auto;" class="col-12">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">حفظ</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">الغاء</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Sticky Actions -->
            
          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
      document.write(new Date().getFullYear())
      </script>
      , made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
    </div>
    <div>
      
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
      
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
      
      
      <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      
    </div>
  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  
  <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/jquery-sticky/jquery-sticky.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="assets/vendor/libs/select2/select2.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/form-layouts.js"></script>
  
</body>


<!-- form-layouts-sticky.html , Sat, 26 Mar 2022 16:53:14 GMT -->
</html>
