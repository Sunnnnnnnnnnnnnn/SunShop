<nav class="navbar navbar-expand-lg navbar-dark" style="z-index: 55;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="?page=backend">แดชบอร์ด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="?page=website">จัดการเว็บไซต์</a>
            </li>
            <li class="nav-item dropdown" style="list-style: none;">
                <a class="nav-link text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                จัดการเติมเงิน
                </a>
                <ul class="dropdown-menu shadow-sm p-4 pt-2 pb-2" style="border-radius: 0px;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark mb-1" href="?page=angpao_manage"><img src="assets/icon/wallet.png" width="20"> จัดการเติมเงินวอเลท</a>
                    <a class="dropdown-item text-dark mb-1" href="?page=code_manage"><img src="assets/icon/gift-card.png" width="20"> จัดการเติมโค้ด</a>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="?page=carousel_manage">จัดการรูปภาพสไลด์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="?page=user_edit">จัดการผู้ใช้</a>
            </li>
            <li class="nav-item dropdown" style="list-style: none;">
                <a class="nav-link text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                จัดการร้านค้า
                </a>
                <ul class="dropdown-menu shadow-sm p-4 pt-2 pb-2" style="border-radius: 0px;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark mb-1" href="?page=category_manage"><img src="assets/icon/application.png" width="20"> จัดการหมวดหมู่</a>
                    <a class="dropdown-item text-dark mb-1" href="?page=product_manage"><img src="assets/icon/shopping-cart.png" width="20"> จัดการสินค้า</a>
                    <a class="dropdown-item text-dark mb-1" href="?page=wheel_cate"><img src="assets/icon/wheel.png" width="20"> จัดการวงล้อ</a>
                </ul>
            </li>
            <li class="nav-item dropdown" style="list-style: none;">
                <a class="nav-link text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                จัดการแนะนำ
                </a>
                <ul class="dropdown-menu shadow-sm p-4 pt-2 pb-2" style="border-radius: 0px;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark mb-1" href="?page=crecom_manage"><img src="assets/icon/application.png" width="20"> จัดการหมวดหมู่แนะนำ</a>
                    <a class="dropdown-item text-dark mb-1" href="?page=recom_manage"><img src="assets/icon/shopping-cart.png" width="20"> จัดการสินค้าแนะนำ</a>
                </ul>
            </li>
            <li class="nav-item dropdown" style="list-style: none;">
                <a class="nav-link text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ประวัติทั้งหมด
                </a>
                <ul class="dropdown-menu shadow-sm p-4 pt-2 pb-2" style="border-radius: 0px;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark mb-1" href="?page=backend_topup_history"><img src="assets/icon/history.png" width="20"> ประวัติการเติมเงิน</a>
                    <a class="dropdown-item text-dark mb-1" href="?page=backend_buy_history"><img src="assets/icon/history.png" width="20"> ประวัติการสั่งซื้อ</a>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<?php
if (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend") {
    require_once('page/backend/dashboard.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "user_edit") {
    require_once('page/backend/user_edit.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "angpao_manage") {
    require_once('page/backend/angpao_manage.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "category_manage") {
    require_once('page/backend/category.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "wheel_cate") {
    require_once('page/backend/wheel_cate.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "wheel") {
    require_once('page/backend/wheel.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "product_manage") {
    require_once('page/backend/product.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "stock_manage" && $_GET['id'] != "") {
    require_once('page/backend/stock.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "wheel_manage") {
    require_once('page/backend/wheel.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "stock_wheel" && $_GET['id'] != "") {
    require_once('page/backend/stock_wheel.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "code_manage") {
    require_once('page/backend/code_manage.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_buy_history") {
    require_once('page/backend/buy_history.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_topup_history") {
    require_once('page/backend/topup_history.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "website") {
    require_once('page/backend/website.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "carousel_manage") {
    require_once('page/backend/carousel_manage.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "recom_manage") {
    require_once('page/backend/recom_manage.php');
} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "crecom_manage") {
    require_once('page/backend/crecom_manage.php');
}
?>