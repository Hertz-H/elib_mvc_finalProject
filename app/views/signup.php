<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/header_footer.css">

    <style>
        .f_con {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <?php include('include/nav.php'); ?>
    <div class="f_con">

        <div class="signup">

            <div class=" form_container">

                <div class="sign_header">

                    <h3>انشاء حساب</h3>

                </div>
                <hr>

                <!-- sign_up -->
                <!--  -->
                <form action="/sign_user" method="POST">
                    <div class="input_containtr"><input type="text" name="name">
                        <span class="input_title">الاسم </span>
                    </div>
                    <div class="number_container">
                        <div class="input_containtr">
                            <input type="text" placeholder="رقم الجوال" name="phone">
                        </div>
                        <div class="input_containtr">
                            <span> المدينة</span>
                            <select name="city">
                                <?php
                                foreach ($params as $city) { ?>
                                    <option value="<?= $city['id']; ?>"><?= $city['name']; ?></option>

                                <?php  }
                                ?>
                            </select>
                            <!-- <i><img src="img/suadia.png" alt=""></i> -->
                        </div>
                    </div>
                    <!-- <div class="valid_notes">سوف نرسل  لك<span> رمز  التحقق عن طريق رسالة نصية</span>  </div>
                
                    <div class="input_containtr  input_darker"><input type="text" >
                    <span class="span_valid_num">ارسال رمز التحقق </span></div> -->


                    <div class="input_containtr"><input type="text" name="address">
                        <span class="input_title">العنوان </span>
                    </div>
                    <div class="input_containtr"><input type="email" name="email">
                        <span class="input_title">البريد الالكتروني</span>
                    </div>
                    <!-- <div class="input_containtr"><input type="text">
                    <span class="input_title"> تأكيد البريد الالكتروني</span>
                </div> -->
                    <div class="input_containtr"><input type="password" name="password">
                        <span class="input_title">كلمة السر</span>
                    </div>
                    <div class="checkbox_container">
                        <input type="checkbox" name="policy" value="agree" checked> أوافق على <span>على الشروط والأحكام</span> <br>
                        <input type="checkbox" name="subscribe" value="yes" checked> التسجيل للانضمام للبشرة البردية<br>
                    </div>

                    <button class="btn"> إنشاء حساب</button>

                    <div class="form_footer">
                        <span>لديك حساب؟ </span><a href="login">تسجيل الدخول &lt;</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php include('include/footer.php'); ?>
</body>

</html>