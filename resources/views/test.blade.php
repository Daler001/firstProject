<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="/save_client" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email">age</label>
                <input type="number" class="form-control" id="milleage" placeholder="Enter milleage" name="age">
            </div>
            <div class="form-group">
                <label for="email">phone</label>
                <input type="number" class="form-control" id="milleage" placeholder="Enter milleage" name="phone">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

</body>

</html>
