<?php

require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/func.php';

if(!empty($_POST)) {
    debug($_POST);
    $fields = load($fields);
    debug($fields);
    if ($errors = validate($fields)) {
        debug($errors);

    }else{
        echo 'OK';
        // mail
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <form method="post">

                <div class="form-group">
                    <label for="Emaill">Email</label>
                    <input name="email" type="email" class="form-control" id="Emaill" placeholder="Введите Email">
                </div>

                <div class="form-group">
                    <label for="name">Имя</label>
                    <input name="name" type="text" class="form-control" id="name" maxlength="20">
                </div>

                <div class="form-group">
                    <label for="comment">Комментарий</label>
                    <textarea name="comment" id="comment"  rows="3" maxlength="500"
                              class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>