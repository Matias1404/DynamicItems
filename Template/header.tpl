<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    
</head>
<body>
    <header>
        <div class="titulo">
            <h1>{$titulo}</h1>
        </div>
        <nav>
            <ul class="nav">
                <li><a href="home">Home</a></li>
                <li><a href="clubes">Clubes</a></li>
                {if !$logged}
                    <li><a href="login">Log In</a></li>
                {else}
                    <li><a href="logout">Log Out</a></li>
                {/if}
            </ul>
        </nav>
    </header>
    