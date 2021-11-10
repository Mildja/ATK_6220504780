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
        <!--start แถบ-->
        <br><br>
        <div class="container">
                <div class="row">
                </div class='col-12 col-sm-12'>
                <nav class="navbar navbar-light bg-light justify-content-between">

                        <a class="navbar-brand">แพทย์อาสา</a>
                        <form class="form-inline" method="get" action="">
                                <input class="form-control mr-sm-2" type="text" name="key" placeholder="Search" aria-label="Search">
                                <input type="hidden" name="controller" value="VolunteerDoctor" />
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
                                <td>จำนวนผู้ป่วยที่แพทย์รับดูแล</td>
                                <td>Update</td>
                                <td>Delete</td>
                        </tr>
                        <?php foreach ($VolunteerDoctor_list as $VolunteerDoctor) {


                                echo "<tr>
                <td>$VolunteerDoctor->VD_ID</td>
                <td>$VolunteerDoctor->VD_Name</td>
                <td>$VolunteerDoctor->VD_Date</td>
                <td>$VolunteerDoctor->VD_Numall</td>
                <td><a href=?controller=VolunteerDoctor&action=updateFrom&VD_ID=$VolunteerDoctor->VD_ID>Edit</a> </td>
                <td><a href=?controller=VolunteerDoctor&action=deletefrom&VD_ID=$VolunteerDoctor->VD_ID>Delete</a> </td>
                </tr>";
                        }
                        echo "</table>";
                        ?>
                <br>
                 <a href="?controller=VolunteerDoctor&action=New" class="btn btn-outline-dark btn-lg" role="button" aria-pressed="true">ขึ้นทะเบียนแพทย์อาสา</a>
        </div>
        </div>
        </div>

        <body>

</html>

</div>