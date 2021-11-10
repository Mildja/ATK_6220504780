<!DOCTYPE html>
<html>

<head>
        <style>
                table {
                        border-collapse: collapse;
                        width: 100%;
                }

                th,
                td {
                        padding: 8px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                }

                tr:hover {
                        background-color: #f5f5f5
                }
        </style>
</head>


<body>
        <!--
        <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="RegisHospital"/>
        <button type="submit" name="action" value="search">Search</button>
        </form>

        <table style="width:80%">
        สร้าง<a href=?controller=RegisHospital&action=New>click</a><br>
        <br>-->

        <!--start แถบ-->
        <br><br>
        <div class="container">
                <div class="row">
                </div class='col-12 col-sm-12'>
                <nav class="navbar navbar-light bg-light justify-content-between">

                        <a class="navbar-brand">Hospital</a>
                        <form class="form-inline" method="get" action="">
                                <input class="form-control mr-sm-2" type="text" name="key" placeholder="Search" aria-label="Search">
                                <input type="hidden" name="controller" value="RegisHospital" />
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="action" value="search">Search</button>
                        </form>
                </nav>
        </div>
        </div>
        </div>
        <!--จบ แถบ-->
        <div class="container">
                <div class="row">
                </div class='col-12 col-sm-12'>
                
                <table style="width:100%">
                        <tr bgcolor="lightblue">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Date</td>
                                <td>จำนวนคนที่โรงพยาบาลรับผิดชอบ</td>
                                <td>จำนวนคนที่เข้ารับการรักษาในโรงพยาบาล</td>
                                <td>Update</td>
                                <td>Delete</td>
                        </tr>
                        <?php foreach ($RegisHospital_list as $RegisHospital) {

                                echo "<tr>
                <td>$RegisHospital->RH_ID</td>
                <td>$RegisHospital->RH_Name</td>
                <td>$RegisHospital->RH_Date</td>
                <td>$RegisHospital->RH_Numall</td>
                <td>$RegisHospital->RH_Numin</td>
                <td><a href=?controller=RegisHospital&action=updateFrom&RH_ID=$RegisHospital->RH_ID>Edit</a> </td>
                <td><a href=?controller=RegisHospital&action=deletefrom&RH_ID=$RegisHospital->RH_ID>Delete</a> </td>
                </tr>";
                        }
                        echo "</table>";
                        ?>
                        <br>
                        <a href="?controller=RegisHospital&action=New" class="btn btn-outline-dark btn-lg" role="button" aria-pressed="true">ขึ้นทะเบียนโรงพยาบาล</a>
        </div>
        </div>
        </div>

        <body>

</html>