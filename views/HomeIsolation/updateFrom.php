<br><br>
<div class="container">
    <div class="row">
        <div class='col-sm-4'></div>
        <div class='col-sm-6'>

            <div class="card bg-light mb-3" style="max-width: 100%;  box-shadow: 10px 10px 5px #888888;">
                <div class="card-header">HomeIsolation</div>
                <div class="card-body">
                    <h3 class="card-title">จับคู่HomeIsolation</h3>
                    <p class="card-text">
                    <form method="get" action="">

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">HomeIso_ID(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ไอดีhome isolation" name="HomeIso_ID" value="<?php echo $HomeIsolation->HomeIso_ID; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">แพทย์อาสา</label>
                            <div class="col-sm-6">
                                <select name="VD_ID" class="form-control">
                                    <option selected>กรุณาเลือก</option>
                                    <?php foreach ($VolunteerDoctor_List as $V) {
                                        echo "<option value=$V->VD_ID";
                                        if ($V->VD_ID == $HomeIsolation->VD_ID) {
                                            echo " selected='selected'";
                                        }
                                        echo ">$V->VD_Name</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">โรงพยาบาล</label>
                            <div class="col-sm-6">
                                <select name="RH_ID" class="form-control">
                                    <option selected>กรุณาเลือก</option>
                                    <?php foreach ($RegisHospital_List as $R) {
                                        echo "<option value=$R->RH_ID";
                                        if ($R->RH_ID == $HomeIsolation->RH_ID) {
                                            echo " selected='selected'";
                                        }
                                        echo ">$R->RH_Name</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">ผู้ป่วย</label>
                            <div class="col-sm-6">
                                <select name="ID_Card" class="form-control">
                                    <option selected>กรุณาเลือก</option>
                                    <?php foreach ($Person_List as $P) {
                                        echo "<option value=$P->PS_id";
                                        if ($P->PS_id == $HomeIsolation->ID_Card) {
                                            echo " selected='selected'";
                                        }
                                        echo ">$P->PS_name</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">อาการเบื้องต้น</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ลักษณะอาการเบื้องต้นของผู้ป่วย" name="Initial_symptom" value="<?php echo $HomeIsolation->Initial_symptom; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">สถานะการตรวจATK</label>
                            <div class="col-sm-6">
                                <select name="SatusATK" class="form-control">
                                    <option selected>กรุณาเลือกสถานะการตรวจATK</option>
                                    <option value="ตรวจATKกับทางหน่วยงาน">ตรวจATKกับทางหน่วยงาน</option>
                                    <option value="ตรวจด้วยตัวเอง">ตรวจด้วยตัวเอง</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">IDผลตรวจATK</label>
                            <div class="col-sm-6">
                                <select name="ID_ATK" class="form-control">
                                    <option selected>กรุณาเลือก</option>
                                    <?php foreach ($AtkTestResult_List as $A) {
                                        echo "<option value=$A->ATR_id";
                                        if ($A->ATR_id == $HomeIsolation->ID_ATK) {
                                            echo " selected='selected'";
                                        }
                                        echo ">$A->ATR_id</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">สถานะการรักษา</label>
                            <div class="col-sm-6">
                                <select name="Satus" class="form-control">
                                    <option selected>กรุณาเลือกสถานะผู้ป่วย</option>
                                    <option value="รักษาหายแล้ว">รักษาหายแล้ว</option>
                                    <option value="อยู่ระหว่างการรักษาที่บ้าน">อยู่ระหว่างการรักษาที่บ้าน</option>
                                    <option value="เข้ารับการรักษาที่โรงพยาบาล">เข้ารับการรักษาที่โรงพยาบาล</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="controller" value="HomeIsolation" /><br>
                        <button type="submit" class="btn btn-outline-danger btn-lg" name="action" value="index">Back</button>
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="update">Edit</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>