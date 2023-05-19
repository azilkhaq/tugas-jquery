<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <style>
        .container-fluid {
            padding-top: 50px;
        }

        .text-add {
            padding-bottom: 10px;
        }

        label.error {
            color: red;
            margin-left: 5px;
            font-size: 14px;
        }

        input.error {
            border: 1px solid red;
            font-weight: 300;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container-fluid">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-add">Tambah Customer</h4>
                        <form action="proses.php" id="my_form" method="post">
                            <div class="form-outline mb-4">
                                <input type="text" name="firstName" id="firstName" class="form-control" />
                                <label class="form-label">First Name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="lastName" id="lastName" class="form-control" />
                                <label class="form-label">Last Name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control" />
                                <label class="form-label">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="number" name="phone" id="phone" class="form-control" />
                                <label class="form-label">Phone</label>
                            </div>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                                <label class="form-label">Address</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
<script>
    $(document).ready(function() {
        $("#my_form").validate({
            rules: {
                firstName: {
                    required: true,
                },
                lastName: {
                    required: true,
                },
                email: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                address: {
                    required: true,
                },
            },
            messages: {
                firstName: "Empty first name",
                lastName: "Empty last name",
                email: "Empty email",
                phone: "Empty phone",
                address: "Empty address",
            }
        });
    });
</script>