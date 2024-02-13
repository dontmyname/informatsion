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
<h2>авторизация</h2>
    <form action="/new_clients" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">имя:</label>
            <input type="name" class="form-control" id="ism" placeholder="ваше имя и фамилия" name="name">
        </div>

        <div class="form-group">
            <label for="email">эмаил:</label>
            <input type="text" class="form-control" id="email" placeholder="ваш эмаил" name="email">
        </div>
        <div class="form-group">
            <label for="email">возрост</label>
            <input type="year" class="form-control" id="year" placeholder="ваш возрост" name="year">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>





</body>
</html>
