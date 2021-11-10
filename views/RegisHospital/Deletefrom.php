<div class="container">
    <div class="row">
    </div class='col-12 col-sm-12'>
    <br><br>
    <img src="https://cdn.teknotut.com/wp-content/uploads/2019/05/menghapus-file-dengan-kondisi-tertentu-di-linux.png" width="500" height="250">
    <br>
    <?php echo "<br>คุณต้องการที่จะลบข้อมูลโรงพยาบาลอาสานี้หริอไม่"; ?><br><br>
    <table style="width:100%">
        <tr bgcolor="lightblue">
            <td>ID</td>
            <td>Name</td>
            <td>Date</td>
            <td>จำนวนคนที่โรงพยาบาลรับผิดชอบ</td>
            <td>จำนวนคนที่เข้ารับการรักษาในโรงพยาบาล</td>
        </tr>
        <?php echo
        "<tr>
        <td>$RegisHospital->RH_ID</td>
        <td>$RegisHospital->RH_Name</td>
        <td>$RegisHospital->RH_Date</td>
        <td>$RegisHospital->RH_Numall</td>
        <td>$RegisHospital->RH_Numin</td>
        </tr>";
        ?>
    </table><br>
    <form method="get" action="">
        <input type="hidden" name="controller" value="RegisHospital" />
        <input type="hidden" name="RH_ID" value="<?php echo $RegisHospital->RH_ID; ?>" />
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="Delete">Delete</button>
    </form>
</div>
</div>
</div>