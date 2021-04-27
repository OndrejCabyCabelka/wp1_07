<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = filter_input (INPUT_POST, 'name');
    $lastname = filter_input (INPUT_POST, 'lastname');
    $gender = filter_input (INPUT_POST, 'gender');
    $email = filter_input (INPUT_POST, 'email');
    $otazka = filter_input (INPUT_POST, 'otazka');
    $odpoved = filter_input (INPUT_POST, 'odpoved');
    
    echo "Vaše jméno je $name <br>" ;
    echo "Vaše příjmení je $lastname <br>" ;
    echo "Vaše pohaví je $gender <br>" ;
    echo "Váš email je $email <br>" ;
    echo "Vaše otázka je $otazka <br>" ;
    echo "Vaše odpověď je $odpoved <br>" ;
    ?>
</body>
</html>