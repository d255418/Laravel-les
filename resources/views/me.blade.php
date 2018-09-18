<?php
/**
 * Created by PhpStorm.
 * User: Laura
 * Date: 11-9-2018
 * Time: 13:50
 */
?>

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Me</title>
</head>


<style>
    .container {
        background-color: lightgreen;

        width: 50%;
        margin: auto;
        padding: 0 35px;

        border: solid;
        border-width: 20px;
        border-color: darkolivegreen;

        color: darkolivegreen;
    }

    .header {
        background-color: darkolivegreen;
        color: white;

        padding: 15px;
        margin: 5%;
        text-align: center;
    }

    .nav a {
        text-decoration: none;
        color: white;

        border-right: solid;
        border-color: white;
        padding: 0 10px;
    }

    .age{
        width: 30%;
        margin: 0 auto;
        padding: 1%;
        border: solid;
        border-color: darkolivegreen;
        text-align: center;

        @if ($age >= 18)
                background-color: orangered;
                color: lightgreen;
        @elseif ($age < 18)
                background-color: greenyellow;
                color: darkred;
    @endif
}
</style>


<body>
    <div class="container">
        <div class="header">
            <h1>{{ $name }}</h1>
            <div class="nav">
                <a href="">Home</a>
                <a href="">Settings</a>
            </div>
        </div>

        <div class="main">
            <a id="wagen" href="Winkelwagen"></a>
            <div class="ïnfo">
                <div class="age">
                    <p>
                    @if ($age >= 18)
                        This person needs to pay taxes now!
                    @elseif ($age < 18)
                        : )
                    @endif
                    </p>
                </div>
                <h3>Description : </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium eius excepturi
                    explicabo fuga impedit laborum maxime minima mollitia natus nemo obcaecati, similique sint soluta
                    temporibus vero voluptate voluptates voluptatum.</p>
                <h3>Interests : </h3>
                <ul>
                    @foreach ($interests as $interest)
                        <li> {{ $interest }}</li>
                    @endforeach
                </ul>
                <h3>Email : </h3>
                <p>laurakruidhof@gmail.com</p>
            </div>
        </div>
    </div>
</body>
</html>
