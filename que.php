<!--

Напишите код класса, который создает объект для обработки номера банковской карты, проверяет его валидность и скрывает большую часть номера, оставляя только последние 4 цифры. Код должен включать в себя код класса CreditCard, который выполняет указанные операции.

-->


<!--******************************************-->

<?php

class CreditCard
{
    private $_number, $_cleanedNumber;

    public function __construct($creditCardNumber)
    {
        $this->_number = $creditCardNumber;
        $this->_cleanedNumber = str_replace(' ', '', $creditCardNumber);
    }

    public function isValid()
    {
        return strlen($this->_cleanedNumber) === 16;
    }

    public function mask()
    {
        if (!$this->isValid()) {
            return "Invalid card number.";
        }

        $lastFourDigits = substr($this->_cleanedNumber, -4);
        $maskedPart = implode(' ', str_split(str_repeat('*', 12), 4));

        return $maskedPart . ' ' . $lastFourDigits;
    }
}


$creditCardNumber = "1234 5578 9012 3343";
$creditCard = new CreditCard($creditCardNumber);

echo "Original number card: $creditCardNumber<br>";
echo "Hidden number card: " . $creditCard->mask();


?>