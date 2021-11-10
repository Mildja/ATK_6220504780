<br><br>
<div class="container">
    <div class="row">
        <div class='col-sm-4'></div>
        <div class='col-sm-6'>

            <div class="card bg-light mb-3" style="max-width: 100%;  box-shadow: 10px 10px 5px #888888;">
                <div class="card-header">Person</div>
                <div class="card-body">
                    <h3 class="card-title">แก้ไขข้อมูลแพทย์อาสา</h3>
                    <p class="card-text">

                    <form method="GET" action="">

                        <br>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">รหัสแพทย์อาสา(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="รหัสแพทย์อาสา" name="VD_ID" value="<?php echo $VolunteerDoctor->VD_ID; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ชื่อแพทย์(name)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ชื่อ-นามสกุล" name="VD_Name" value="<?php echo $VolunteerDoctor->VD_Name; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">วันเดือนปีที่สมัคร(Date)</label>
                            <div class="col-sm-6">
                                <input input type="date" class="form-control form-control-lg" id="colFormLabelLg" name="VD_Date" value="<?php echo date("Y-m-d", strtotime($VolunteerDoctor->VD_Date)); ?>">
                            </div>
                        </div>


                        <input type="hidden" name="controller" value="VolunteerDoctor" /><br>
                        <button type="submit" class="btn btn-outline-danger btn-lg" name="action" value="index">Back</button>
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="update">Edit</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>