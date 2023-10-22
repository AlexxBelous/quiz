




<!--

Вы должны создать функцию maskCreditCard, которая принимает номер банковской карты и возвращает его сокращенную версию с защитой конфиденциальности. Функция должна удалять пробелы из номера, проверять, что длина номера составляет 16 символов, и в случае успеха, скрывать все цифры, кроме последних четырех. Результат должен быть представлен в виде строки с пробелами между блоками цифр

-->


































<!--******************************************-->

<?php

function maskCreditCard($creditCardNumber){
    $cleanNum = str_replace(' ', '', $creditCardNumber);
    $lenNumber = strlen($cleanNum);
    if($lenNumber < 16) {
        return "<span style='color: red;'>Invalid card number.</span>";
    }
    $fourNum = substr($creditCardNumber, -4);
    $maskedPart = str_repeat('*', $lenNumber - 4);
    $maskedPart = implode(' ', str_split($maskedPart, 4));
    $maskedCardNumber = $maskedPart . ' ' . $fourNum;
    return $maskedCardNumber;
}

$creditCardNumber = "1234 5578 9012 3343";
$maskedNumber = maskCreditCard($creditCardNumber);

echo "Original number card: $creditCardNumber<br>";
echo "Hidden number card: $maskedNumber";
?>