<!-- <div Align ="Center">
<form method = "get" action = "">

    <label>รหัสโรงพยาบาล(ID)<input type="text" name="RH_ID"/></label><br>
    <label>ชื่อโรงพยาบาล (name)<input type="text" name="RH_Name"/></label><br>
    <label>วันเดือนปีที่สมัคร(Date)<input type="date" name="RH_Date" value="<?php echo date("Y-m-d"); ?>"/>
    </label><br>

    <input type="hidden" name="controller" value="RegisHospital"/><br>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="add">Save</button>
</form>

</div>
-->
<br><br>
<div class="container">
    <div class="row">
        <div class='col-sm-4'></div>
        <div class='col-sm-6'>

            <div class="card bg-light mb-3" style="max-width: 100%; box-shadow: 10px 10px 5px #888888;">
                <div class="card-header">RegisHospital</div>
                <div class="card-body">
                    <h3 class="card-title">ขึ้นทะเบียนโรงพยาบาล</h3>
                    <p class="card-text">
                    <form method="get" action="">
                        <br>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">รหัสโรงพยาบาล(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="รหัสโรงพยาบาล" name="RH_ID">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ชื่อโรงพยาบาล (name)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ชื่อโรงพยาบาล" name="RH_Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">วันเดือนปีที่สมัคร(Date)</label>
                            <div class="col-sm-6">
                                <input input type="date" class="form-control form-control-lg" id="colFormLabelLg" name="RH_Date">
                            </div>
                        </div>



                        <input type="hidden" name="controller" value="RegisHospital" /><br>
                        <button type="submit" class="btn btn-outline-danger btn-lg" name="action" value="index">Back</button>
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="add">Save</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>