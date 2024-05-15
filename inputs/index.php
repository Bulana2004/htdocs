<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test inputs!</title>
    <!--Bootstrap link-->
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
            <!--St data-->
            <div class="text-center mt-3" id="stdata"></div>

            <div class="row mt-4">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="button" class="form-control text-bg-primary" value="Test" id="test" onclick="find()">
                </div>
            </div>
        </form>
    </div>

</body>
<!--Bootstrap js file and jquery file-->
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<!--Java part-->
<script>
    function find() {
        var val = $("input").map(function () { return $(this).val() }).get()
        $.ajax({
            type: 'post',
            data: { input: val },
            url: 'input.php',
            success: function (json) { $("#stdata").html(json) }
        })
    }
</script>

</html>