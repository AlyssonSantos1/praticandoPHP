<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeiroProgramaPHP</title>
</head>
<body>
    <?php
    $n1 = 10;
    $n2 = 5;
    $media = ($n1+$n2)/2;

    $media = ($n1+$n2)/2;
    if ($media < 5)
        echo "$media aluno reprovado";
    if ($media == 5)
        echo "$media aluno em recuperaçao";
    elseif ($media > 5)
        echo "$media aluno aprovado";
?>
</body>
</html>