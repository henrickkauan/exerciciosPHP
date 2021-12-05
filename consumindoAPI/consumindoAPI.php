<?php
    if(isset($_POST['cep'])){
        include('consultaCEP.php');
    }
?>

<style>
 @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Source Sans Pro', sans-serif;
    }
    p {
        font-size: 27px;
    }
    form {
        width: 40%;
        max-width: 920px;
    }
    input {
        width: 100%;
        padding: 15px 5px;
    }
    input[type="submit"] {
        font-weight: bold;
    }
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
</style>

<form method="POST">
    <div>
        <p>Digite seu CEP:</p>
        <input type=number name=cep required value=<?php if(isset($CEP)) {echo($CEP);}else {echo(" ");}?> >
        <input type=submit value='consultar'>
    </div>
    <div>
        <input type=text value="<?php if(isset($json_data['logradouro'])){
            echo($json_data['logradouro']);
        }?>">
    </div>
    <div>
        <input type=text value="<?php if(isset($json_data['bairro'])){
            echo($json_data['bairro']);
        }?>">
    </div>
    
    <div>
        <input type=text value="<?php if(isset($json_data['localidade'])){
            echo($json_data['localidade']);
        }?>">
    </div>
</form>