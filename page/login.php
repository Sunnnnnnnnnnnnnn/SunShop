<style>
    .form-control {
        /* border: none;
        border-bottom: 3px solid var(--main); */
        border-radius: 1vh;
    }
</style>

<!-- <div class="container-fluid p-4">
    <div class="container-sm m-cent rounded  ps-4 pe-4  " style="margin-bottom: 4em!important;">
        <div class="col-lg-6 m-auto bg-glass rounded  p-0 pb-3">
            <div class="col-10 col-lg-12 m-cent pt-4" style="margin-bottom: 4em!important;">
            <center>
                <h1 class="text-main text-strongest mt-3" style="font-size: 48px; text-transform: uppercase;"><?= $config['name'] ?></h1>
                <h3 class="text-white text-strongest mb-3">เข้าสู่ระบบ</h3>
            </center>
                <div class="container-fluid ps-0 pe-0">
                    <div class="col-lg-8 m-cent mt-2">
                        <div class="p-2 text-start">
                            <label class="text-white">ชื่อผู้ใช้</label>
                            <input type="text" id="user" class="form-control" placeholder="Username" aria-describedby="basic-addon1" style="border-radius: 0.5vh;">
                        </div>
                        <div class="p-2 text-start">
                            <label class="text-white">รหัสผ่าน</label>
                            <input type="password" id="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon1" style="border-radius: 0.5vh;">
                        </div>
                        <br>
                        <button class="btn bg-main text-white ps-4 pe-4 pt-2 pb-2 w-100 d-inline" id="btn_regis">&nbsp;เข้าสู่ระบบ</button>
                        <br>
                        <div class="pt-3 text-white text-center">
                            <span>ยังไม่มีบัญชี? <a class="text-main" href="?page=register">&nbsp;สมัครสมาชิกตอนนี้</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid p-5" style="border-radius: 50px;">
    <div class="container-sm m-cent ps-4 pe-4">
        <center>
            <div class="col-lg-8 m-auto bg-white rounded  p-0 pb-3">
                <div class="col-8 col-lg-15 m-cent pt-4" style="border-radius: 50px;">
                    <center>
                        <h1 class="text-main text-strongest mt-3" style="font-size: 48px; text-transform: uppercase;"><?= $config['name'] ?></h1>
                        <h3 class="text-black text-strongest mb-3">เข้าสู่ระบบ</h3>
                    </center>
                    <div class="container-fluid ps-0 pe-0" style="margin-top: 1em;">

                        <div class="col-lg-8 m-cent mt-2">
                            
                            <div class="mb-1 text-start">
                                <label class="text-main"> ชื่อผู้ใช้</label>
                                <input type="text" id="user" class="form-control" placeholder="Username" aria-describedby="basic-addon1" style="border-radius: 0.5vh;">
                            </div>
                            <div class="mb-1 text-start">
                                <label class="text-main"> รหัสผ่าน</label>
                                <input type="password" id="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon1" style="border-radius: 0.5vh;">
                            </div>
                            <br>
                            <button class="btn bg-main text-white ps-4 pe-4 pt-2 pb-2 w-100 d-inline" id="btn_regis">&nbsp;เข้าสู่ระบบ</button>
                            <br>
                            <div class="pt-3 text-black">
                                <span>ยังไม่มีบัญชี <a class="text-main" href="?page=register">&nbsp;สมัครสมาชิกตอนนี้</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>

<!-- <div class="container-fluid p-0">
    <div class="container-sm m-auto ps-4 pe-4">
        <div class="conatiner-fluid bg-glass border border-2  rounded  p-0">
            <div class="col-lg-6 m-cent pt-4" style="margin-bottom: 4em!important;">
                <center>
                    <h1 class="text-main" style="font-size: 48px;"><i class="fa-duotone fa-users"></i></h1>
                    <h1 class=" text-main text-dark text-strongest">สร้างบัญชี</h1>
                </center>
                <div class="container-fluid ps-0 pe-0" style="margin-top: 1em;">
                    <div class="col-lg-8 m-cent">
                        <div class="mb-1">
                            <label class="text-white"> Username</label>
                            <input type="text" class="form-control form-control-lg  text-or" id="user" placeholder="ชื่อผู้ใช้" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-1">
                            <label class="text-white"> Password</label>
                            <input type="password" id="pass" class="form-control form-control-lg   text-or" placeholder="รหัสผ่าน" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <label class="text-white"> Confirm password</label>
                            <input type="password" id="pass2" class="form-control form-control-lg   text-or" placeholder="รหัสผ่านอีกครั้ง" aria-describedby="basic-addon1">
                        </div>
                        <center>
                            <div id="capcha" class="g-recaptcha" data-theme="light" data-sitekey="6LdmDFkkAAAAAEKni0zQPY4MEtv2nxLodGLEQvVO" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                        </center>
                        <br>
                        <button class="btn bg-main   text-white  ps-4 pe-4  pt-2 pb-2 w-100 d-inline" id="btn_regis"><i class="fa-solid fa-arrow-right"></i>&nbsp;สมัครสมาชิก</button>
                        <center>
                            <p class="text-secondary mt-3">
                                <a href="?page=login" class="text-dark " style="text-decoration: none;"><i class="fa-regular fa-right-to-bracket"></i>&nbsp;เข้าสู่ระบบเลย</a>
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> -->

<script type="text/javascript">
    // var onloadCallback = function() {
    //     grecaptcha.render('capcha', {
    //         'sitekey': '<?php echo $conf['sitekey']; ?>'
    //     });
    // };
    $("#btn_regis").click(function(e) {
        e.preventDefault();
        var formData = new FormData();
        formData.append('user', $("#user").val());
        formData.append('pass', $("#pass").val());
        // captcha = grecaptcha.getResponse();
        // formData.append('captcha', captcha);
        $('#btn_regis').attr('disabled', 'disabled');
        $.ajax({
            type: 'POST',
            url: 'system/login.php',
            data: formData,
            contentType: false,
            processData: false,
        }).done(function(res) {

            result = res;
            console.log(result);
            // grecaptcha.reset();
            if (res.status == "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ',
                    text: result.message
                }).then(function() {
                    window.location = "?page=home";
                });
            }
            if (res.status == "fail") {
                Swal.fire({
                    icon: 'error',
                    title: 'ผิดพลาด',
                    text: result.message
                });
                $('#btn_regis').removeAttr('disabled');
            }
        }).fail(function(jqXHR) {
            console.log(jqXHR);
            //   res = jqXHR.responseJSON;
            // grecaptcha.reset();
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: res.message
            })
            //console.clear();
            $('#btn_regis').removeAttr('disabled');
        });
    });
    // $(function() {
    //     function rescaleCaptcha() {
    //         var width = $('.g-recaptcha').parent().width();
    //         var scale;
    //         if (width < 302) {
    //             scale = width / 302;
    //         } else {
    //             scale = 1.0;
    //         }

    //         $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
    //         $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
    //         $('.g-recaptcha').css('transform-origin', '0 0');
    //         $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
    //     }

    //     rescaleCaptcha();
    //     $(window).resize(function() {
    //         rescaleCaptcha();
    //     });

    // });
</script>