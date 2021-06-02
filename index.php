<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="height:90%;">
    <div class="container-fluid    " style="height:90%;">
        <div class="row">
            <div class="col-6  ">
                <div class="col-6" id="update">
                </div>
            </div>
            <div class="col-6  d-flex justify-content-center align-items-center" id="sticky">
                <div class="" id="search_bar">
                    <label for="">search:</label>
                    <input type='text' class='form-control' id='search' value="">
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center" style="height:100vh;width:100%;">
            <div class="col-6">
                <form action="" id="myform" method="GET">
                    <div class="form-group">
                        <label for="text">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="nameid" required autocomplete="off">
                    </div>
                    <button type="submit" id="butid" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6" id="table">
            </div>
            <div class="col-6" id="update">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="jq.js"></script>
</body>

</html>