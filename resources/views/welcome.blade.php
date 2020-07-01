<?php $data = request()->get("data"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome Dude!</title>
    </head>

    <body>
        <h1>SELAMAT DATANG! {{$data['firstname'] . ' ' . $data['lastname']}}</h1>

        <h3>
            Terima kasih telah bergabung di SanberBook. Social Media kita bersama!
        </h3>
    </body>
</html>
