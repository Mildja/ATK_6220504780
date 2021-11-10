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
            <td>Name</td>
            <td>address</td>

        </tr>
        <?php echo
        "<tr>
        <td>$Person->PS_id</td>
        <td>$Person->PS_name</td>
        <td>$Person->PS_add</td>
        </tr>";
        ?>
    </table><br>
    <form method="get" action="">
        <input type="hidden" name="controller" value="Person" />
        <input type="hidden" name="RH_ID" value="<?php echo $Person->RH_ID; ?>" />
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="Delete">Delete</button>
    </form>
</div>
</div>
</div>