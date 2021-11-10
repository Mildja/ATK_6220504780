<br><br>
<div class="container">
    <div class="row">
        <div class='col-sm-4'></div>
        <div class='col-sm-6'>

            <div class="card bg-light mb-3" style="max-width: 100%;  box-shadow: 10px 10px 5px #888888;">
                <div class="card-header">RegisHospital</div>
                <div class="card-body">
                    <h3 class="card-title">แก้ไขข้อมูลโรงพยาบาล</h3>
                    <p class="card-text">
                    <form method="GET" action="">

                        <br>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">รหัสโรงพยาบาล(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="รหัสโรงพยาบาล" name="RH_ID" value="<?php echo $RegisHospital->RH_ID; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ชื่อโรงพยาบาล (name)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ชื่อโรงพยาบาล" name="RH_Name" value="<?php echo $RegisHospital->RH_Name; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">วันเดือนปีที่สมัคร(Date)</label>
                            <div class="col-sm-6">
                                <input input type="date" class="form-control form-control-lg" id="colFormLabelLg" name="RH_Date" value="<?php echo date("Y-m-d", strtotime($RegisHospital->RH_Date)); ?>">
                            </div>
                        </div>


                        <input type="hidden" name="controller" value="RegisHospital" /><br>
                        <button type="submit" class="btn btn-outline-danger btn-lg" name="action" value="index">Back</button>
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="update">Edit</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>