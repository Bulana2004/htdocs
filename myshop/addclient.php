<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = '';
$email = '';
$phone = '';
$address = '';
$gender = '';

if ($id) {
    include "php/dbconnection.php";
    $str = "SELECT * FROM clients WHERE id = ?";
    $stmt = $bdd->prepare($str);
    $stmt->execute([$id]);
    $client = $stmt->fetch();

    $name = $client['name'];
    $email = $client['email'];
    $phone = $client['phone'];
    $address = $client['address'];
    $gender = $client['gender'];  // Make sure your database has a 'gender' column
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\dist\css\bootstrap.min.css">
</head>
<body class="text-bg-dark">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4"><?php echo $id ? 'Edit' : 'Add'; ?> Client</h1>
                <form method="post" class="bg-light p-5 rounded shadow text-dark">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" value="<?php echo $phone; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" value="<?php echo $address; ?>">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender">
                            <option value="" disabled <?php echo $gender == '' ? 'selected' : ''; ?>>Select Gender</option>
                            <option value="male" <?php echo $gender == 'male' ? 'selected' : ''; ?>>Male</option>
                            <option value="female" <?php echo $gender == 'female' ? 'selected' : ''; ?>>Female</option>
                        </select>
                    </div>
                    <input type="button" class="form-control text-light bg-primary mt-3" value="<?php echo $id ? 'Update' : 'Add'; ?> Client" id="add_client" onclick="saveClient(<?php echo $id; ?>)">
                </form>
                <br>
                <div class="text-center">
                    <a href="index.php" class="btn btn-secondary">Go to index</a>
                    <div id="test"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Bootstrap JS and dependencies (Optional, but recommended) -->
<script src="assets\dist\js\bootstrap.bundle.min.js"></script>
<script src="assets\js\jquery.min.js"></script>

<script type="text/javascript">
    function saveClient(id) {
        var vals = $("input, select").map(function () { return $(this).val(); }).get();
        $.ajax({
            type: 'post',
            data: { pvals: vals, id: id },
            url: 'php/save.php',
            success: function (response) {
                window.location.href = "index.php";
            }
        });
    }
</script>
</html>
