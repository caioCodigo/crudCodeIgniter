<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>login user</h1>
    <form id="formulario"  method="post">    
        <input type="text" id="user">
        <input type="text" id="pass">
        <input type="hidden" id="base_url" value="<?= base_url() ?>" >
        <button id="btn_form" >Submit</button>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?= base_url();?>assets/js/dados.js"></script>

</body>
</html>