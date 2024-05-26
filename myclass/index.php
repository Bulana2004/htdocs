<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php project 1 !</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>

<body>
    <!--form-->
    <div class="container mt-5">
        <form method="post">
            <div class="row">
                <div class="col-sm-6">
                    <p>Student Name</p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control border-dark" placeholder="Enter name" name="stname"
                        id="stname" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Student address</p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control border-dark" placeholder="Enter address" name="stadd"
                        id="stadd" minlength="10">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Teliphone number</p>
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control border-dark" placeholder="Teliphone number" name="sttel"
                        id="sttel">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Date of Birth</p>
                </div>
                <div class="col-sm-6">
                    <input type="date" class="form-control border-dark" placeholder="Date of birth" name="stdob"
                        id="stdob">
                </div>
            </div>

            <div class="text-center mt-3" id="stdata"></div>

            <div class="row mt-4">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="button" class="form-control text-bg-primary" value="Test" id="test" onclick="find()">
                </div>
            </div>
        </form>
        <?php 
        include "dtbase.php";
        $str1 = "select * from student order by stindex";
        $rs1= $bdd->query($str1) or die("error on $str1"); 
        ?>
        <table class="mt-5 table table-striped table-bordered">
            <thead class="text-center">
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone number</th>
                    <th>Date of Birth</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row1 = $rs1 -> fetch()) {?>
                <tr>
                    <td><?php echo $row1[0]?></td>
                    <td><?php echo $row1[1]?></td>
                    <td><?php echo $row1[2]?></td>
                    <td><?php echo $row1[3]?></td>
                    <td><?php echo $row1[4]?></td>
                    <td><input type="button" value="Edit" class="form-control text-bg-dark" id="<?php echo $row1["stindex"]?>" onclick="findst(this.id)"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script>
    function find() {
        var vals = $("input").map(function () { return $(this).val() }).get()
        $.ajax({
            type: 'post',
            data: { pvals: vals },
            url: 'stsave.php',
            success: function (json) { $("#stdata").html(json) }
        })
    }

    function findst(stindex){
        $.ajax({
            type : 'post',
            data : { pvals: stindex },
            url : 'findst.php',
            success : function (json) { $("#stdata").html(json)}
        })
    }
</script>

</html>