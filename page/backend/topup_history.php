<div class="container-sm bg-glass mt-5 shadow-sm p-4 mb-4" data-aos="fade-down">
    <center>
        <h1 class="text-white">&nbsp;<i class="fa-duotone fa-coins"></i>&nbsp;ประวัติการเติมเงิน</h1>
    </center>
    <hr>
    <div class="table-responsive mt-3 ">
        <table id="table" class="table mt-2 text-main">
            <thead class="table-white bg-white ">
                <tr class="">
                    <th class="sorting sorting_asc">id</th>
                    <th scope="col" class="text-main">ลิงค์</th>
                    <th scope="col" class="text-main">จำนวนเงิน</th>
                    <th scope="col" class="text-main">ชื่อผู้ใช้</th>
                    <th scope="col" class="text-main">วันที่</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $get_user = dd_q("SELECT * FROM topup_his ORDER BY date DESC");
                    while($row = $get_user->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr >
                        <td><?php echo $row['id'];?></td>
                        <td ><?php echo htmlspecialchars($row['link']);?></td>
                        <td><?php echo htmlspecialchars($row['amount']);?></td>
                        <td><?php echo htmlspecialchars($row['uname']);?></td>
                        <td><?php echo htmlspecialchars($row['date']);?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>