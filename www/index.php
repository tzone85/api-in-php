<?php

if (!empty($_GET["name"])) {

    $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");

    $data = json_decode($response, true);

    //var_dump($data);
    //echo $data["results"][0]["name"]["first"], "\n";

    $age = $data["age"];

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example API</title>
</head>
<body>

<?php if (isset($age)): ?>
    <h3>Age: </h3><?= $age ?>
<?php endif; ?>

<form action="">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <button>Guess Age</button>
</form>
</body>
</html>

calling api from our code
decoding the response from json to asscoc array
checking if the value/figure that we're looking for is within that array and returning it if it's there