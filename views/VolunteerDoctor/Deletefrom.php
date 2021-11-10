<div class="container">
    <div class="row">
    </div class='col-12 col-sm-12'>
    <br><br>
    <img src="https://cdn.teknotut.com/wp-content/uploads/2019/05/menghapus-file-dengan-kondisi-tertentu-di-linux.png" width="500" height="250">
    <br>
    <?php echo "<br>คุณต้องการที่จะลบข้อมูลแพทย์อาสานี้หริอไม่"; ?><br><br>
    <table style="width:100%">
        <tr bgcolor="lightblue">
            <td>ID</td>
            <td>Name</td>
            <td>Date</td>

        </tr>
        <?php echo
        "<tr>
        <td>$VolunteerDoctor->VD_ID</td>
        <td>$VolunteerDoctor->VD_Name</td>
        <td>$VolunteerDoctor->VD_Date</td>
        </tr>";
        ?>
    </table><br>
    <form method="get" action="">
        <input type="hidden" name="controller" value="VolunteerDoctor" />
        <input type="hidden" name="VD_ID" value="<?php echo $VolunteerDoctor->VD_ID; ?>" />
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="Delete">Delete</button>
    </form>
</div>
</div>
</div>