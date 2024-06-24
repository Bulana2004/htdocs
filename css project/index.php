<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/dist/css/bootsrap.min.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    </script>
</head>
<form method="post">

    <body class="bg-info">

        <div class="container">
            <div class="row">
                <div class=" mx-auto">
                    <div class="card card-body text-center mt-3">
                        <h1 class="heading display-6 pb-1">Account</h1>
                        <form>


                                    <div class="row">
                                        <div class="col-6">
                                            <span class="form-control">aname</span>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="aname">
                                        </div>
                                    </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text">acategory</span>
                                    <input type="text" class="form-control" id="acategory">
                                </div>
                            </div>


                            <div class="mb-3">
                                <input type="text" id="acode" value="0"><br>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="new" id="find1" onclick="window.location.reload()"
                                    class="btn btn-secondary">NEW</button>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" id="find2" onclick="find()"
                                    class="btn btn-secondary">SAVE</button>
                            </div>
                            <div class="mb-3">
                                <button type="button" name="refresh" id="find2" onclick="refreshPage()"
                                    class="btn btn-secondary">REFRESH</button>
                            </div>





                        </form>
                        <div id="sheet">......</div>
                        <?php
                            include "dbase.php";
                            $str1="SELECT * FROM account order by acode";
                            $rs1=$bdd->query($str1) or die ("error on $str1");
                        ?>
                        <table border="1" cellpadding="0">
                            <thead>
                                <tr class="bg-secondary text-white">
                                    <th>acode</th>
                                    <th>aname</th>
                                    <th>acategory</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row1=$rs1->fetch()){?>
                                <tr>
                                    <td>
                                        <?php echo $row1[0] ?>
                                    </td>
                                    <td>
                                        <?php echo $row1[1] ?>
                                    </td>
                                    <td>
                                        <?php echo $row1[2] ?>
                                    </td>

                                    <td><input type="button" button class="btn btn-primary" value="Edit"
                                            id="<?php echo $row1[0]?>" onclick="findst(this.id)"></td></button>
                                    <td><input type="submit" button class="btn btn-danger" value="Delete"
                                            id="<?php echo $row1[0]?>" onclick="deletest(this.id)"></td></button>
                                </tr>
                                <?php }  ?>
                            </tbody>
                        </table>
                        <?php
                            /*
                            $stname=$_POST["stname"];echo $stname;
                            $stadd=$_POST["stadd"];
                            $sttel=$_POST["sttel"];
                            $stdob=$_POST["stdob"];

                            $strl="insert into student values(102,'#stname','$stadd','$sttel','$stdob')";
                            $tsl=$bdd->query($strl)or die("error");
                            echo"complete";

                            */
                            ?>

    </body>
    <script type='text/javascript' src='jquery.min.js'></script>
    <script type='text/javascript'>
        function refreshPage() {
            location.reload();
        }
        $(document).ready(function () {
        });
        function find() {
            var vals = $("input").map(function () { return $(this).val(); }).get()
            $.ajax({
                type: 'post',
                data: { pvals: vals },
                url: 'savest.php',
                success: function (json) { $("#sheet").html(json) }

            });
        }
        function findst(acode) {
            $.ajax({
                type: 'post',
                data: { pvals: acode },
                url: 'findst.php',
                success: function (json) { $("#sheet").html(json) }

            })
        }

        function deletest(acode) {
            $.ajax({
                type: 'post',
                data: { pvals: acode },
                url: 'deletest.php',
                success: function (json) { $("#sheet").html(json) }

            })
        }
    </script>

</html>