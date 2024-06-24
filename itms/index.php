<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items!!</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!--Navbar-start-->
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-2 p-2 fs-1 fw-medium" href="#">Items</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar end-->

    <!--Form-->
    <form action="">
        <div class="container mt-5">
            <div class="border p-4 mx- border-dark rounded-5 shadow">
                <div class="row justify-content-center">
                    <div class="col-sm-2">
                        <p>Itam Name</p>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control border-dark" placeholder="Enter Itam Catogory" id="Name">
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-sm-2">
                        <p>Itam Catogory</p>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control border-dark" placeholder="Enter Itam Catogory"
                            id="Catogory">
                    </div>
                </div>

                <!--Result-->
                <div class="text-center text-warning mt-3" id="result"></div>


                <div class="row justify-content-center mt-3" id="btn">
                    <div class="col-sm2"></div>
                    <div class="col-sm-5">
                        <input type="button" class="form-control text-bg-danger shake-lr" value="Submit" id="submit" onclick="submitform()">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--End of Form-->

    <!--Table-->
    <?php
        include 'database.php';
        $str1 = "select * from items order by iCode";
        $rs1 = $bdd -> query($str1) or die ("error on $str1")
    ?>
    <div class="container">
        <table class="mt-5 table table-striped table-bordered border-dark table-hover table-sm shadow">
            <thead>
                <tr class="text-center fs-5">
                    <th>iCode</th>
                    <th>iName</th>
                    <th>iCatogory</th>
                </tr>
            </thead>
            <tbody>
                    <?php while ($row = $rs1 -> fetch()) {?>
                <tr class="text-center">
                    <td><?php echo $row[0]?></td>
                    <td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>
                    <td><input type="button" class="form-control text-bg-success" value="Edit" id="<?php echo $row["iCode"]?>" onclick="editdt(this.id)"></td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script>
    function submitform(){
        var values = $("input").map(function(){ return $(this).val()}).get()
        $.ajax({
            type : 'post',
            data : { sbvalues : values},
            url : 'submit.php',
            success : function(json){$("#result").html(json)}
        })
    }

    function editdt(iCode){
        $.ajax({
            type : "post",
            data : {values : iCode},
            url : 'find.php',
            success : function(json){ $("#result").html(json)}
        })
    }
</script>

</html>