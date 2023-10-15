

            
                <!-- <?php
                if ($user["rank"] == "1") {
                ?>
                    <div class="container-fluid pt-0">
                        <a href="?page=backend" class="btn bg-main-gra text-white btn-lg mt-2 w-100">
                            <h1><img src="assets/icon/manager.png" width="50" class="mb-1"></i></h1>    
                        จัดการหลังร้าน</a>
                    </div>
                <?php
                }
                ?>
                <div class="container-fluid pt-0">
                    <a href="?page=logout" class="btn bg-main-gra text-white btn-lg mt-2 w-100">
                        <h1><img src="assets/icon/enter.png" width="50" class="mb-1"></i></h1>    
                    ออกจากระบบ</a>

                </div> -->
            </div>
            <div class="col-lg-12 ">
                <div class="container-fluid shadow-sm bg-white pt-4 pb-4 ps-4 rounded mb-2" style="border-radius: 50px;">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="<?php echo htmlspecialchars($config['logo']); ?>" class="img-fluid">
                        </div>
                        <div class="col-lg-3">
                        <h5 class="text-main m-0 mt-2"><i class="fa-duotone fa-user-circle"></i> Username : <span class="text-main"><?php echo htmlspecialchars($user["username"]);?></span></h5>
                            <h5 class="text-main m-0 mt-2"><i class="fa-duotone fa-coins"></i> Points : <span class="text-main"><?php echo $user["point"];?></span></h5>
                        <h2 class="text-main text-uppercase text-strongest mt-5"><?php echo htmlspecialchars($dt['username']);?></h2>

                        </div>
                    </div>
                </div>
                    <?php 
                    if(isset($_GET['subpage']) && $_GET['subpage'] == "cpass"){
                        require_once('page/cpass.php'); 
                    }elseif(isset($_GET['subpage']) && $_GET['subpage'] == "topuphis"){
                        require_once('page/topuphis.php');
                    }elseif(isset($_GET['subpage']) && $_GET['subpage'] == "buyhis" ){
                        require_once('page/buyhis.php');
                    }else{
                        require_once('page/cpass.php');
                    }
                    ?>
            </div>
    </div>
</div>