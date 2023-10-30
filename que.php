




<!--

Напишите код, который позволяет разбить данный текст на слова и затем проверить, содержит ли этот текст слово 'nocturnal'. Если слово найдено, выведите сообщение 'The word 'nocturnal' is found in the text', в противном случае выведите 'The word 'nocturnal' is not found in the text'."

-->


































<!--******************************************-->

<?php


$text = "Under the shimmering moonlight, the night was filled with secrets. A gentle breeze rustled the leaves, whispering stories of distant lands. Stars adorned the velvety sky, like diamonds in the abyss. Nature's symphony played on, as creatures of the night began their nocturnal dances. An owl hooted in the distance, a mysterious serenade to the moon. The world slept, unaware of the magic that unfolded under the celestial canvas. Dreams took flight on the wings of imagination, weaving tales of wonder and enchantment. In this timeless night, possibilities were as boundless as the cosmos, and the universe held its breath, awaiting the next chapter of the unknown.";


$words = str_word_count($text, 1);


// Ищем слово "nocturnal" в массиве слов
if (in_array("nocturnal", $words, true)) {
    echo "The word 'nocturnal' is found in the text";
} else {
    echo "The word 'nocturnal' is not found in the text";
}
?>