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
                <input type="hidden" name="controller" value="Person" />
                <button type="submit" name="action" value="search">Search</button>
        </form>
                
        <table style="width:80%">
                สร้าง<a href=?controller=Person&action=New>click</a><br>
                <br>-->
        <!--start แถบ-->
        
        <br><br>
        <div class="container">
                <div class="row">
                </div class='col-12 col-sm-12'>
                <nav class="navbar navbar-light bg-light justify-content-between">

                        <a class="navbar-brand">Person</a>
                        <form class="form-inline" method="get" action="">
                                <input class="form-control mr-sm-2" type="text" name="key" placeholder="Search" aria-label="Search">
                                <input type="hidden" name="controller" value="Person" />
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
                                <td>address</td>
                                
                        </tr>
                        <?php foreach ($Person_list as $Person) {

                                echo "<tr>
                <td>$Person->PS_id</td>
                <td>$Person->PS_name</td>
                <td>$Person->PS_add</td>
                
                </tr>";
                        }
                        echo "</table>";
                        ?>
                        <br>
                        
        </div>
        </div>
        </div>

        <body>

</html>