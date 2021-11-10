<!-- <div Align ="Center">
<form method = "get" action = "">

    <label>รหัสบัตรประชาชน(ID)<input type="text" name="PS_id"/></label><br>
    <label>ชื่อ(name)<input type="text" name="PS_name"/></label><br>
    <label>ที่อยู่(address)<input type="text" name="PS_add"/></label><br>

    <input type="hidden" name="controller" value="Person"/><br>
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


            <div class="card bg-light mb-3" style="max-width: 100%;  box-shadow: 10px 10px 5px #888888;">
                <div class="card-header">Person</div>
                <div class="card-body">
                    <h3 class="card-title">ขึ้นทะเบียนโรงพยาบาล</h3>
                    <p class="card-text">
                    <form method="get" action="">
                        <br>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">รหัสบัตรประชาชน(ID)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="รหัสบัตรประชาชน13หลัก" name="PS_id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ชื่อ(name)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ชื่อ-นามสกุล" name="PS_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">ที่อยู่(address)</label>
                            <div class="col-sm-6">
                                <input input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ที่อยู่ปัจจุบัน" name="PS_add">
                            </div>
                        </div>



                        <input type="hidden" name="controller" value="Person" /><br>
                        <button type="submit" class="btn btn-outline-danger btn-lg" name="action" value="index">Back</button>
                        <button type="submit" class="btn btn-outline-success btn-lg" name="action" value="add">Save</button>
                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>