<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop project</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\dist\css\bootstrap.min.css">
</head>
<body class="text-bg-dark">
    <div class="container my-5">
        <h1>Welcome!</h1>
        <a href="addclient.php" class="btn btn-primary">Add Client</a>
    </div>
    <!-- Table for get database data -->
    <div class="container mt-5">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <!-- PHP Part -->
            <?php
                include "php/dbconnection.php";
                $str1 = "SELECT * FROM clients ORDER BY id";
                $rs1 = $bdd -> query($str1) or die ("error in $str1");
            ?>
            <tbody>
                 <?php while ($row = $rs1 -> fetch()) {?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["phone"]?></td>
                    <td><?php echo $row["address"]?></td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <input type="button" value="Edit" class="btn btn-primary" id="<?php echo $row[0]?>" onclick="editClient(this.id)">
                            <input type="button" value="Delete" class="btn btn-danger" id="<?php echo $row[0]?>" onclick="deleteClient(this.id)">
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    
</body>
<!-- Bootstrap JS and dependencies (Optional, but recommended) -->
<script src="assets\dist\js\bootstrap.bundle.min.js"></script>
<script src="assets\js\jquery.min.js"></script>

<script type="text/javascript">
    /* Delete function */
    function deleteClient(id){
        /* alert("ok! ID: " + id); */
        $.ajax({
            type: "post",
            data:{did : id},
            url: "php/delete.php",
            success: function(response){
                location.reload();
            }
        })
    }

    function editClient(id){
        window.location.href = "addclient.php?id=" + id;
    }
</script>
</html>
