<?php
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM customer ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <style>
        .container-fluid {
            padding-top: 50px;
        }

        .btn-add {
            margin-bottom: 20px;
            float: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-add">Data Customer</h4>
                    <a href="add.php" class="btn btn-primary btn-add">Tambah Data</a>
                    <table id="tableData" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (mysqli_num_rows($query) > 0) { ?>
                                <?php
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data["first_name"] ?></td>
                                        <td><?php echo $data["last_name"] ?></td>
                                        <td><?php echo $data["email"] ?></td>
                                        <td><?php echo $data["phone"] ?></td>
                                        <td><?php echo $data["address"] ?></td>
                                    </tr>
                        </tbody>
                    <?php $no++;
                                } ?>
                <?php } ?>
                </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#tableData').DataTable();
    });
</script>