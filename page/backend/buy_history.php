<div class="container-sm bg-glass mt-5 shadow-sm p-4 mb-4" data-aos="fade-down">
    <center>
        <h1 class="text-white">&nbsp;<i class="fa-duotone fa-history"></i>&nbsp;ประวัติการสั่งซื้อ</h1>
    </center>
    <hr>
    <div class="table-responsive mt-3 ">
        <table id="table" class="text-white table mt-2">
            <thead class="table-white  bg-white ">
                <tr class="">
                    <th scope="col" class="text-main">ไอดี</th>
                    <th scope="col" class="text-main">ชื่อผู้ใช้</th>
                    <th scope="col" class="text-main">ของที่ได้รับ</th>
                    <th scope="col" class="text-main">ชื่อสินค้า</th>
                    <th scope="col" class="text-main">วันที่</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $get_user = dd_q("SELECT * FROM boxlog ORDER BY date DESC");
                    while($row = $get_user->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr >
                        <td><?php echo $row['id'];?></td>
                        <td ><?php echo htmlspecialchars($row['username']);?></td>
                        <td><?php echo htmlspecialchars($row['prize_name']);?></td>
                        <td><?php echo htmlspecialchars($row['category']);?></td>
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