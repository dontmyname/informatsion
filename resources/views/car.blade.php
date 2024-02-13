<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    </style>
</head>

<body>






    <div class="container text-center">
        <h2>маквин</h2>
        <form action="/car" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">имя:</label>
                <input type="name" class="form-control" id="name" placeholder="имя" name="name">
            </div>
            <div class="form-group">
                <label for="email">цвет</label>
                <input type="color" class="form-control" id="color" name="color">
            </div>

            <div class="form-group">
                <label for="email">скорость:</label>
                <input type="text" class="form-control" id="speed" placeholder="скорость маквин" name="speed">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>





</body>

</html>
