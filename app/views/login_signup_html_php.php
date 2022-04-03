<?php 
// print_r($_GET);
if(!empty($_GET))
if( $_GET["action"]=="login" ){
    echo "in login ";
    ?> 
 <!-- sign in -->
 
<div class="overly" style="visibility: visible;">
    <div class="signin">
        <div class=" form_container_signin">
            <i  class="close_signin"> <img src="img/close_icon.svg" alt=""></i>
           <div class="sign_header">
               <h3>تسجيل الدخول</h3>
           </div>
           <hr>
           
            <!--signin -->
              <!--  -->
            <form action="">
    
            <div class="input_containtr"><input type="text">
                <span class="input_title">البريد الالكتروني</span>
            </div>
          
            <div class="input_containtr"><input type="text">
                <span class="input_title">كلمة السر</span>
                <span class="forget">نسيت؟</span>
            </div>
            
            <div class="input_containtr log_in"><button> تسجيل دخول</button></div>
                                                        
            
       </form>
       <div class="form_footer">
           <span>لديك حساب؟ </span>
           <a href="sign_up.html"><button class="creat_account">  إنشاء حساب جديد</button></a>
       </div>
              
     </div>
    </div>
 
</div>

<?php } ?> 

<!-- sign up -->
 <?php 
 if(!empty($_GET))
 if( $_GET["action"]=="signup" ){
     echo "in sign up"; ?> 
<div class="overly" style="visibility: visible;">
    <div class="signup">

        <div class=" form_container">

        <div class="sign_header">
            <i  class="close_signup"> <img src="img/close_icon.svg" alt=""></i>
            <h3>انشاء حساب</h3>
            
        </div>
        <hr>
        
            <!-- sign_up -->
         
            <form action="">
            <div class="number_container">
                <div class="input_containtr"><input type="text" placeholder="رقم الجوال"></div>
                <div class="input_containtr">
                    <span>رمز البلد</span>
                    <select name="contry_key">
                        <option value="967">+967</option>
                        <div><option value="+970" selected>+970<i><img src="" alt=""></i></option></div>
                        <option value=""></option>
                    </select>
                    <i><img src="img/suadia.png" alt=""></i>
                </div>
            </div>
            <div class="valid_notes">سوف نرسل  لك<span> رمز  التحقق عن طريق رسالة نصية</span>  </div>
                
                    <div class="input_containtr  input_darker"><input type="text" >
                    <span class="span_valid_num">ارسال رمز التحقق </span></div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title">الاسم الأول</span></div>
                
                <div class="input_containtr"><input type="text">
                    <span class="input_title">اسم العائلة</span>
                </div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title">البريد الالكتروني</span>
                </div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title"> تأكيد البريد الالكتروني</span>
                </div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title">كلمة السر</span>
                </div>
                <div class="checkbox_container">
                    <input type="checkbox" name="policy" value="agree"checked>   أوافق على <span>على الشروط والأحكام</span>  <br>
                    <input type="checkbox" name="subscribe" value="yes" checked> التسجيل للانضمام للبشرة البردية<br>
                </div>
                
                 <button class="btn"> إنشاء حساب</button>
                                                            
                <div class="form_footer">
                    <span>لديك حساب؟ </span><a href="login.html">تسجيل الدخول &lt;</a>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php } ?> 