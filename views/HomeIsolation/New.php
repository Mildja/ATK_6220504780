<!-- <div Align ="Center">
<br><br>
<img src="https://www.thaihealth.or.th/data/content/2014/02/19697/cms/aehorsuwxyz4.jpg" width="500" height="250">
<br><br>

<form method="get" action="">

<label> HomeIso_ID <input type="text" name="HomeIso_ID"/> </label><br>

<label> แพทย์อาสา <select name="VD_ID">
    <option value="">กรุณาเลือก</option>
    <?php foreach ($HomeIsolation_List as $H) {
        echo "<option value = $H->VD_ID> $H->VD_Name</option>";
    } ?>
</select> </label><br>

<label>โรงพยาบาล <select name="RH_ID">
    <option value="">กรุณาเลือก</option>
    <?php foreach ($HomeIsolation_List as $H) {
        echo "<option value = $H->RH_ID> $H->RH_Name</option>";
    } ?>
</select></label><br>

<label>ผู้ป่วย <select name="ID_Card">
    <option value="">กรุณาเลือก</option>
    <?php foreach ($HomeIsolation_List as $H) {
        echo "<option value = $H->ID_Card> $H->PS_name</option>";
    } ?>
</select></label><br>

<label> อาการเบื้องต้น <input type="text" name="Initial_symptom"/> </label><br>

<label>สถานะการตรวจATK <select name="SatusATK">
      <option value="">กรุณาเลือกสถานะการตรวจATK</option>
      <option value="ตรวจATKกับทางหน่วยงาน">ตรวจATKแล้ว</option>
      <option value="ตรวจด้วยตัวเอง">ยังไม่ได้ตรวจATK</option>
    </select></label><br>

<label>IDผลตรวจATK <select name="ID_ATK">
    <option value="">กรุณาเลือก</option>
    <?php foreach ($HomeIsolation_List as $H) {
        echo "<option value = $H->ID_ATK> $H->ID_ATK</option>";
    } ?>
</select></label><br>

<label>สถานะการรักษา<select name="Satus">
      <option value="">กรุณาเลือกสถานะการรักษา</option>
      <option value="รักษาหายแล้ว">รักษาหายแล้ว</option>
      <option value="อยู่ระหว่างการรักษาที่บ้าน">อยู่ระหว่างการรักษาที่บ้าน</option>
      <option value="เข้ารับการรักษาที่โรงพยาบาล">เข้ารับการรักษาที่โรงพยาบาล</option>
    </select></label><br>

<input type="hidden" name="controller" value = "HomeIsolation"/>
<button type="submit"name="action" value = "index"> Back </button>
<button type="submit"name="action" value= "add"> Save </button>
</form>
</div>
-->
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
                        <br>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">HomeIso_ID(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ไอดีhome isolation" name="HomeIso_ID">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for=" inputState" class="col-sm-5 col-form-label col-form-label-lg">แพทย์อาสา</label>
                            <div class="col-sm-6">
                                <select name="VD_ID" class="form-control">
                                    <option selected>กรุณาเลือก</option>
                                    <?php foreach ($VolunteerDoctor_List as $V) {
                                        echo "<option value = $V->VD_ID> $V->VD_Name</option>";
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
                                        echo "<option value = $R->RH_ID> $R->RH_Name</option>";
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
                                        echo "<option value = $P->PS_id> $P->PS_name</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">อาการเบื้องต้น</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ลักษณะอาการเบื้องต้นของผู้ป่วย" name="Initial_symptom">
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
                                        echo "<option value = $A->ATR_id> $A->ATR_id</option>";
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
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="add">Save</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>