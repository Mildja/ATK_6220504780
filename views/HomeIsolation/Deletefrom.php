<div class="container">
    <div class="row">
    </div class='col-12 col-sm-12'>
    <br><br>
    <img src="https://cdn.teknotut.com/wp-content/uploads/2019/05/menghapus-file-dengan-kondisi-tertentu-di-linux.png" width="500" height="250">
    <br>
    <?php echo "<br>คุณต้องการที่จะลบข้อมูลนี้หริอไม่"; ?><br><br>
    <table style="width:100%">
        <tr bgcolor="lightblue">
            <td>ID</td>
            <td>แพทย์อาสา</td>
            <td>โรงพยาบาล</td>
            <td>ผู้ป่วย</td>
            <td>อาการเบื้องต้น</td>
            <td>สถานะการตรวจATK</td>
            <td>ID_ATK</td>
            <td>สถานะผู้ป่วย</td>

        </tr>
        <?php echo
        "<tr>
                <td>$HomeIsolation->HomeIso_ID</td>
                <td>$HomeIsolation->VD_Name</td>
                <td>$HomeIsolation->RH_Name</td>
                <td>$HomeIsolation->PS_name</td>
                <td>$HomeIsolation->Initial_symptom</td>
                <td>$HomeIsolation->SatusATK</td>
                <td>$HomeIsolation->ID_ATK</td>
                <td>$HomeIsolation->Satus</td>
        </tr>";
        ?>
    </table><br>
    <form method="get" action="">
        <input type="hidden" name="controller" value="HomeIsolation" />
        <input type="hidden" name="HomeIso_ID" value="<?php echo $HomeIsolation->HomeIso_ID; ?>" />
        <button type="submit" name="action" value="Delete">Delete</button>
        <button type="submit" name="action" value="index">Back</button>

    </form>
</div>
</div>
</div>