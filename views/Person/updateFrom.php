<br><br>
<div class="container">
    <div class="row">
        <div class='col-sm-4'></div>
        <div class='col-sm-6'>

            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header">Person</div>
                <div class="card-body">
                    <h3 class="card-title">แก้ไขข้อมูลประชาชน</h3>
                    <p class="card-text">
                    <form method="GET" action="">


                        <br>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg ">ไอดีบัตรประชาชน(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="รหัสบัตรประชาชน13หลัก" name="PS_id" value=" <?php echo $Person->PS_id; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ชื่อ(name)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ชื่อ-นามสกุล" name="PS_name" value="<?php echo $Person->PS_name; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ที่อยู่(address)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ที่อยู่ปัจจุบัน" name="PS_add" value="<?php echo $Person->PS_add; ?>">
                            </div>
                        </div>



                        <input type="hidden" name="controller" value="Person" /><br>
                        <button type="submit" class="btn btn-outline-danger btn-lg" name="action" value="index">Back</button>
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="update">Edit</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>