<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Customers</title>
</head>
<body>


<form action="">
    <div class="container">

        <br>
        <h4>Customer Form</h4>

        <hr>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="nic">Nic</label>
                    <input type="text" class="form-control" name="nic" id="nic" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" name="salary" id="salary" required>
                </div>
            </div>

            <div class="col-12">
                <br>
                <button class="btn btn-primary col-12"> Save Customer</button>
            </div>

        </div>
    </div>
</form>

</body>
</html>
