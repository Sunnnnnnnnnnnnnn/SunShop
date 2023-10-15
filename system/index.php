<?php
session_start();
error_reporting(0);
require_once("system/a_func.php");
if (isset($_SESSION['id'])) {
    $q1 = dd_q("SELECT * FROM users WHERE id = ? LIMIT 1", [$_SESSION['id']]);
    if ($q1->rowCount() == 1) {
        $user = $q1->fetch(PDO::FETCH_ASSOC);
    } else {
        session_destroy();
        $_GET['page'] = "login";
    }
}
$get_static = dd_q("SELECT * FROM static");
$static = $get_static->fetch(PDO::FETCH_ASSOC);
if (isset($_GET['page'])) {
// $config["pri_color"]   = "#FF2B2B";
// $config["sec_color"]  = "#9A0D0D";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta property="og:title" content="<?php echo $config['name']; ?> - ยินดีต้อนรับ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $_SERVER['SERVER_NAME'] ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:image" content="<?php echo $config['bg3']; ?>">
    <meta property="og:description" content="<?php echo $config['des']; ?>">

    <title><?php echo $config['name']; ?></title>
    <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="system/css/second.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- <link rel="stylesheet" href="system/gshake/css/box.css"> -->
    <script type="text/javascript" src="system/js/main.js"></script>
    <link href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Kanit&display=swap" rel="stylesheet">
    <style>
        :root {
            --main: <?php echo $config["main_color"]; ?>;
            --sub: <?php echo $config["sec_color"]; ?>;
            --sub-opa-50: <?php echo $config["main_color"]; ?>80;
            --sub-opa-25: <?php echo $config["main_color"]; ?>;
        }
    </style>
    <link rel="stylesheet" href="system/css/option.css">
    <style>
        .owl-items {
            max-width: 220px;
            max-height: 220px;

        }

        .owl-items img {
            border-radius: 25px !important;
            animation: glow 2s infinite ease-in-out;
        }
        body {
            background-image: url('<?= $config['bg2'] ?>');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            overflow-x: hidden;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white mt-0 shadow-sm mb-0">
        <div class="container-sm  pt-4 pb-4 ps-4 pe-4 ">
            <a class="navbar-brand" href="/?page=home"><img src="<?= $config['logo'] ?>" height="55px" width="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                // if(isset($_SESSION['id'])){
                ?>
                <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-3">
                    <li class="nav-item align-self-center ms-lg-3">
                        <a class="nav-link underline-active align-self-center" aria-current="page" href="/?page=home"><img src="assets/icon/house.png" width="20" class="mb-1">&nbsp;หน้าหลัก</a>
                    </li>
                    <ul class="nav-item align-self-center">
                        <li class="nav-item dropdown" style="list-style: none;">
                            <a class="nav-link dropdown-toggle align-self-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/icon/store.png" width="20" class="mb-1">&nbsp;ร้านค้า</a>
                            <ul class="dropdown-menu shadow-sm p-4 pt-2 pb-2" style="border-radius: 0px;" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item text-dark mb-1" href="?page=shop"><small><img src="assets/icon/shopping-cart.png" width="20" class="mb-1">&nbsp;ซื้อสินค้า</small></a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark mb-1" href="?page=random_wheel"><small><img src="assets/icon/wheel.png" width="20" class="mb-1">&nbsp;สุ่มของ</small></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item align-self-center ms-lg-3">
                        <a class="nav-link underline-active align-self-center" aria-current="page" href="/?page=payment"><img src="assets/icon/credit.png" width="20" class="mb-1">&nbsp;เติมเงิน</a>
                    </li>
                    <li class="nav-item align-self-center ms-lg-3">
                        <a class="nav-link underline-active align-self-center" aria-current="page" href="/?page=history"><img src="assets/icon/history.png" width="20" class="mb-1">&nbsp;ประวัติทั้งหมด</a>
                    </li>
                    
                </ul>
                <?php
                if (!isset($_SESSION['id'])) {
                ?>
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 ">
                        <li class="nav-item ms-3 mb-2 align-self-center">
                            <a class="nav-link underline-active align-self-center" aria-current="page" href="?page=login"><img src="assets/icon/profile.png" width="20" class="mb-1">&nbsp;เข้าสู่ระบบ</a>
                        </li>
                        <li class="nav-item ms-3 mb-2 align-self-center">
                            <a class="nav-link underline-active align-self-center" aria-current="page" href="?page=register"><img src="assets/icon/add-user.png" width="20" class="mb-1">&nbsp;สมัครสมาชิก</a>
                        </li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown" style="list-style: none;">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/icon/profile.png" width="20" class="mb-1"></i>&nbsp; <?php echo htmlspecialchars(strtoupper($user['username'])); ?>
                            </a>
                            <ul class="dropdown-menu shadow-sm p-4 pt-2 pb-2" style="border-radius: 0px;" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark mb-1"><small><img src="assets/icon/dollar.png" width="20" class="mb-1">&nbsp;&nbsp;ยอดคงเหลือ : <?php echo number_format($user["point"]); ?></small></a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item text-dark mb-1" href="?page=profile"><small><img src="assets/icon/profile.png" width="20" class="mb-1">&nbsp;&nbsp;ข้อมูลส่วนตัว</small></a></li>

                                <?php
                                if ($user["rank"] == "1") {
                                ?>
                                    <li><a class="dropdown-item text-dark mb-1" href="?page=backend"><small><img src="assets/icon/manager.png" width="20" class="mb-1">&nbsp;จัดการหลังร้าน</small></a></li>
                                <?php
                                }
                                ?>

                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item text-dark mb-2" href="?page=logout"><small><img src="assets/icon/enter.png" width="20" class="mb-1">&nbsp;ออกจากระบบ</small></a></li>
                            </ul>
                        </li>
                    </ul>

                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <?php
    function admin($user)
    {
        if (isset($_SESSION['id']) && $user["rank"] == "1") {
            return true;
        } else {
            return false;
        }
    }
    if (isset($_GET['page']) && $_GET['page'] == "menu") {
        require_once('page/simple.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == "login" && !isset($_SESSION['id'])) {
        require_once('page/login.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == "logout" && isset($_SESSION['id'])) {
        session_destroy();
        echo "<script>window.location.href = '';</script>";
    } elseif (isset($_GET['page']) && $_GET['page'] == "profile" && isset($_SESSION['id'])) {
        require_once('page/profile.php');

    } elseif (isset($_GET['page']) && $_GET['page'] == "angpao") {
        if (isset($_SESSION['id'])) {
            require_once('page/angpao.php');
        } else {
            require_once('page/login.php');
        }

    } elseif (isset($_GET['page']) && $_GET['page'] == "payment") {
        if (isset($_SESSION['id'])) {
            require_once('page/payment.php');
        } else {
            require_once('page/login.php');
        }
        
    } elseif (isset($_GET['page']) && $_GET['page'] == "connect") {
        if (isset($_SESSION['id'])) {
            require_once('page/connect.php');
        } else {
            require_once('page/login.php');
        }

    } elseif (isset($_GET['page']) && $_GET['page'] == "redeem") {
        if (isset($_SESSION['id'])) {
            require_once('page/redeem.php');
        } else {
            require_once('page/login.php');
        }
        
    } elseif (isset($_GET['page']) && $_GET['page'] == "id") {
        if (isset($_SESSION['id'])) {
            require_once('page/id.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "gp") {
        if (isset($_SESSION['id'])) {
            require_once('page/gp.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "product" && isset($_GET['id'])) {
        if (isset($_SESSION['id'])) {
            require_once('page/product.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "slidebloxfruit") {
        if (isset($_SESSION['id'])) {
            require_once('page/csgo_1.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "id_p" && isset($_GET['id'])) {
        if (isset($_SESSION['id'])) {
            require_once('page/id_p.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "random_wheel") {
        if (isset($_SESSION['id'])) {
            require_once('page/random_wheel.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "play" && isset($_GET['wheel'])) {
        if (isset($_SESSION['id'])) {
            require_once('page/play.php');
        } else {
            require_once('page/login.php');
        }
        
    } elseif (isset($_GET['page']) && $_GET['page'] == "history") {
        if (isset($_SESSION['id'])) {
            require_once('page/history.php');
        } else {
            require_once('page/login.php');
        }

    } elseif (isset($_GET['page']) && $_GET['page'] == "shop") {
        if (isset($_SESSION['id'])) {
            require_once('page/shop.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "buy") {
        if (isset($_SESSION['id'])) {
            require_once('page/buy.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "register" && !isset($_SESSION['id'])) {
        require_once('page/register.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "user_edit") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "topup_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "product_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "stock_manage" && $_GET['id'] != "") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "wheel_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "wheel_cate") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "wheel") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "stock_wheel" && $_GET['id'] != "") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "code_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "category_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_buy_history") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_topup_history") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "carousel_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "recom_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "crecom_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "website") {
        require_once('page/backend/menu_manage.php');
    } else {
        require_once('page/simple.php');
    }
    ?>
    <div class="modal fade" id="buy_count" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title"><i class="fa-duotone fa-cart-shopping-fast"></i>&nbsp;&nbsp;สั่งซื้อสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3 pb-2">
                    <div class="row mt-2">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-auto">จำนวนสินค้าที่จะซื้อ</div>
                        <div class="col">
                            <hr>
                        </div>
                        <div class="mb-2">
                            <!-- <p class="mb-1 text-secondary">กรอกจำนวนที่ต้องการสั่งซื้อ<span class="text-danger">*</span></p> -->
                            <!-- <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button" id="quantity-minus">-</button>
                            </div> -->
                            <input type="number" id="b_count" class="form-control text-center" value="1">
                            <!-- <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="quantity-plus">+</button>
                            </div> -->
                        </div>
                        <div class="d-flex justify-content-between pe-3 ps-3 mt-2">
                            <span class="m-0 align-self-center">สินค้าคงเหลือ <?php echo $count; ?> ชิ้น</span>
                            <span class="m-0 align-self-center" style="color: white; padding: 3.5px 5px; border-radius: 1vh; background-color: var(--main);">ยอดเงินคงเหลือ <?php echo $user["point"]; ?></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="shop-btn" class="btn w-100" style="background-color: var(--main); color: #fff;" onclick="buybox()" data-id="" data-name="" data-price=""><i class="text-black fa-duotone fa-cart-shopping-fast"></i>&nbsp;&nbsp;สั่งซื้้อเลย</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <footer class="bg-white shadow pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 text-center mb-3">
                        <img src="<?php echo $config['logo']; ?>" width="200">
                        <br><?php echo $config['name']; ?><br>
                        <h5></h5>
                        <p><?php echo $config['des']; ?></p>
                    </div>
                    <div class="col-12 col-lg-2 text-center mb-3">
                        <h5>ช่วยเหลือ</h5>
                        <a href="/?page=home" style="text-decoration: none;" class="text-black"><i class="fa-regular fa-house"></i> หน้าหลัก</a><br>
                        <a href="/?page=payment" style="text-decoration: none;" class="text-black"><i class="fa-regular fa-coins"></i> เติมเงิน</a><br>
                        <a href="/?page=redeem" style="text-decoration: none;" class="text-black"><i class="fa-solid fa-code"></i> เติมโค้ด</a><br>
                        <a href="/?page=history" style="text-decoration: none;" class="text-black"><i class="fa-solid fa-clock-rotate-left"></i> ประวัติทั้งหมด</a><br>
                    </div>
                    <div class="col-12 col-lg-2 text-center mb-3">
                        <h5>ช่องทางการติดต่อ</h5>
                        <a href="<?php echo $config['contact2']; ?>" style="text-decoration: none;" class="text-black"><i class="fa-brands fa-facebook"></i> Facebook</a><br>
                        <a href="<?php echo $config['contact']; ?>" style="text-decoration: none;" class="text-black"><i class="fa-brands fa-discord"></i> Discord</a><br>
                    </div>

                    <div class="col-12 col-lg-4 text-center mb-3">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v16.0" nonce="ExHRiLWq"></script>
                        <center>
                            <div class="mb-3 fb-page" data-href="<?php echo $config['facebook']; ?>" data-tabs="timeline" data-width="320" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                            <br>
                            <iframe src="https://discord.com/widget?id=<?php echo $config['widget_discord']; ?>&amp;theme=dark" width="320" height="350" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                        </center>
                    </div>
                </div>
                <hr>
        <center>
            <p class="text-dark mb-1"><strong><i class="fa-regular fa-copyright"></i>&nbsp; 2023 <?php echo $config['name']; ?>, All right reserved.</strong></p>
            <small class="text-dark "></i><i class="fa-solid fa-cog fa-spin"></i>&nbsp; Create By SongKran & Sxdd.<a href="https://discord.gg/overdrive-c" class="text-dark"> ติดต่อเจ้าของร้านไม่ได้ / แจ้งปัญหาร้านค้าโกง</a></small>
        </center>
    </div>
    <script>
        async function shake_alert(status, result) {
            if (status) {
                if (result.salt == "prize") {
                    // await GShake();
                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: result.message
                    }).then(function() {
                        window.location = "?page=history";
                    });
                } else {
                    await GShake();
                    Swal.fire({
                        icon: 'error',
                        title: 'เสียใจด้วย',
                        text: result.message
                    });
                }
            } else {
                if (result.salt == "salt") {
                    // await GShake();
                    Swal.fire({
                        icon: 'error',
                        title: 'เสียใจด้วย',
                        text: result.message
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ผิดพลาด',
                        text: result.message
                    });
                }
            }
        }

        function buybox() {
            var name = $("#shop-btn").attr("data-name");
            var price = $("#shop-btn").attr("data-price");
            var count = $("#b_count").val();
            var formData = new FormData();
            formData.append('id', $("#shop-btn").attr("data-id"));
            formData.append('count', count);
            Swal.fire({
                title: 'ยืนยันการสั่งซื้อ?',
                text: name + " " + count + " ชิ้น " + " ราคา " + price * count + " บาท ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ซื้อเลย'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: 'system/buybox.php',
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $('#btn_buyid').attr('disabled', 'disabled');
                            $('#btn_buyid').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>รอสักครู่...');
                        },
                    }).done(function(res) {
                        console.log(res)
                        result = res;
                        // await GShake();
                        shake_alert(true, result);
                        console.clear();
                        $('#btn_buyid').html('<i class="fas fa-shopping-cart mr-1"></i>สั่งซื้อสินค้า');
                        $('#btn_buyid').removeAttr('disabled');
                    }).fail(function(jqXHR) {
                        console.log(jqXHR)
                        res = jqXHR.responseJSON;
                        shake_alert(false, res);

                        $('#btn_buyid').html('<i class="fas fa-shopping-cart mr-1"></i>สั่งซื้อสินค้า');
                        $('#btn_buyid').removeAttr('disabled');
                    });
                }
            })
        }
    </script>
    <script>
        AOS.init();
        // var options = {
        //     strings: [`<?php //echo $s_info['des']; 
                            ?>`],
        //     typeSpeed: 40,
        //     color: "#fff"
        // };
        // var typed = new Typed('#typing', options);
    </script>
</body>

</html>
<?php
} else {
    require_once('home.php');
}
?>