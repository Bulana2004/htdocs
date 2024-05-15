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
                    <input type="submit" class="form-control text-bg-primary" value="Submit" name="stsave">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="button" class="form-control text-bg-primary" value="Test" id="test" onclick="find()">
                </div>
            </div>
        </form>
    </div>


    <?php
    /*
    $stname = $_POST["stname"];
    $stadd = $_POST["stadd"];
    $sttel = $_POST["sttel"];
    $stdob = $_POST["stdob"];

    echo $stname;

    include 'dtbase.php';
    $str1="insert into student values(101,'$stname','$stadd','$sttel','$stdob')";
    $ts1 = $bdd->query($str1) or die("error");
    echo "Complete";
    */
    ?>

</body>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script>
        
    </script>

</html>