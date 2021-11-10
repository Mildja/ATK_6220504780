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
        <input type="hidden" name="controller" value="HomeIsolation"/>
        <button type="submit" name="action" value="search">Search</button>
        </form>

        <table style="width:80%">
        สร้าง<a href=?controller=HomeIsolation&action=New>click</a><br>
        <br>-->
        <!--start แถบ-->
        <br><br>
        <div Align ="Center" >
                <nav class="navbar navbar-light bg-light justify-content-between" style="width:80%">

                        <a class="navbar-brand">ระบบจับคู่homeIsolation</a>
                        <form class="form-inline" method="get" action="">
                                <input class="form-control mr-sm-2" type="text" name="key" placeholder="Search" aria-label="Search">
                                <input type="hidden" name="controller" value="HomeIsolation" />
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="action" value="search">Search</button>
                        </form>
                </nav>
       
        </div>
        <!--จบ แถบ-->


        <div Align ="Center">
               
                
                <table style="width:80%" >
                        <tr bgcolor="lightblue">
                                <td>ID</td>
                                <td>แพทย์อาสา</td>
                                <td>โรงพยาบาล</td>
                                <td>ผู้ป่วย</td>
                                <td>อาการเบื้องต้น</td>
                                <td>สถานะการตรวจATK</td>
                                <td>ID_ATK</td>
                                <td>สถานะผู้ป่วย</td>
                                <td>Update</td>
                                <td>Delete</td>

                        </tr>
                        <?php foreach ($HomeIsolation_list as $HomeIsolation) {

                                echo "<tr>
                <td>$HomeIsolation->HomeIso_ID</td>
                <td>$HomeIsolation->VD_Name</td>
                <td>$HomeIsolation->RH_Name</td>
                <td>$HomeIsolation->PS_name</td>
                <td>$HomeIsolation->Initial_symptom</td>
                <td>$HomeIsolation->SatusATK</td>
                <td>$HomeIsolation->ID_ATK</td>
                <td>$HomeIsolation->Satus</td>
                <td><a href=?controller=HomeIsolation&action=updateFrom&HomeIso_ID=$HomeIsolation->HomeIso_ID>Edit</a> </td>
                <td><a href=?controller=HomeIsolation&action=deletefrom&HomeIso_ID=$HomeIsolation->HomeIso_ID>Delete</a> </td>
                </tr>";
                        }
                        echo "</table>";
                        ?>
                         <br>
                 <a href="?controller=HomeIsolation&action=New" class="btn btn-outline-dark btn-lg" role="button" aria-pressed="true">จับคู่HomeIsolation</a>
        
        </div>

        <body>

</html>