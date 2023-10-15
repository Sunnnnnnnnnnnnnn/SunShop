<div class="container-fluid p-4">
    <div class="container-sm m-auto p-4 pt-0" data-aos="zoom-in">
        <div class="container-fluid ps-4 pe-4 bg-white">
        <center class="m-0"><h2 class="text-main mb-2 mt-4 p-4"><i class="fa-regular fa-history"></i> ประวัติการสั่งซื้อ</h2></center>
        <hr class="mt-1">
            <div class="table-responsive">
                <table class="table table-striped " id="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-main">#</th>
                        <th scope="col" class="text-main">ชื่อรายการ</th>
                        <th scope="col" class="text-main">ของรางวัล</th>
                        <th scope="col" class="text-main">วันที่</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $q = dd_q("SELECT * FROM boxlog WHERE uid = ? ORDER BY id DESC ", [$_SESSION['id']]);
                            $i = 1;
                            while($row = $q->fetch(PDO::FETCH_ASSOC)){
                                
                        ?>


                            <tr>
                                <th class="text-main"><?php echo number_format($i);?></th>
                                <td class="text-main"><?php echo htmlspecialchars($row['category']);?></td>
                                <td class="text-main"><?php echo htmlspecialchars($row['prize_name']);?></td>
                                <td class="text-main"><?php echo htmlspecialchars($row['date']);?></td>
                            </tr>
                        <?php
                                $i++;
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>