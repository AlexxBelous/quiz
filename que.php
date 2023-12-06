




<!--

Напиши function, которая принимает два параметра $text и $wordsPerMinute которая определяет скорость чтения в словах в минуту. Функция должна вычислять время чтения текста, округляя вверх, и возвращает результат.

-->







































<!--*******************92***********************-->
<?php

$text = "The sun dipped below the horizon, casting a warm glow across the landscape. The air was filled with the sweet scent of blooming flowers, creating a tranquil atmosphere. Birds chirped in the distance as a gentle breeze rustled the leaves of the trees.
In the heart of the bustling city, people hurriedly walked down the crowded streets, each lost in their own thoughts. Skyscrapers towered above, reflecting the last rays of sunlight. Car horns honked, and the distant hum of traffic filled the air with a constant buzz.
Meanwhile, in a quaint little cafe, the barista expertly crafted lattes and cappuccinos. The aroma of freshly ground coffee beans wafted through the air, enticing passersby to step inside. The low hum of conversation and the clinking of coffee cups created a cozy ambiance.
A group of friends gathered in a park, spreading out a picnic blanket under the shade of a large oak tree. Laughter echoed as they shared stories and enjoyed a delicious spread of sandwiches and snacks. The sun played peek-a-boo through the leaves, creating dappled patterns on the ground.
As evening fell, the city's skyline transformed into a dazzling display of lights. Neon signs flickered to life, and the cityscape became a canvas of vibrant colors. Street performers entertained the crowd with music and dance, adding to the lively atmosphere.
Back at home, a bookworm curled up with a captivating novel, escaping into a world of imagination. The soft glow of a reading lamp illuminated the pages as the reader journeyed through the twists and turns of the plot. Outside, the stars began to emerge, painting the night sky with their twinkling brilliance.
In this diverse tapestry of moments, life unfolded in its myriad forms, each scene contributing to the rich mosaic of experiences that define our existence.
";


function readingTimeCalc($text, $wordsPerMinute) {
    $wordCount = str_word_count($text);
    $readingTime = ceil($wordCount / $wordsPerMinute);
    return $readingTime;
}



$wordsPerMinute = 50;

$readingTime = readingTimeCalc($text, $wordsPerMinute);

echo "Time to read the article: $readingTime minutes";

