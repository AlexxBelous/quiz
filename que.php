




<!--

Напишите function на PHP с названием `cutString`, которая обрезает заданный текст до определенного количества слов, при этом гарантируя, что обрезание происходит на границе слов для сохранения их целостности?



-->







































<!--******************************************-->

<?php


$text = "Under the shimmering moonlight, the night was filled with secrets. A gentle breeze rustled the leaves, whispering stories of distant lands. Stars adorned the velvety sky, like diamonds in the abyss. Nature's symphony played on, as creatures of the night began their nocturnal dances. An owl hooted in the distance, a mysterious serenade to the moon. The world slept, unaware of the magic that unfolded under the celestial canvas. Dreams took flight on the wings of imagination, weaving tales of wonder and enchantment. In this timeless night, possibilities were as boundless as the cosmos, and the universe held its breath, awaiting the next chapter of the unknown.";


function cutString($text, $wordCount)
{
    $words = explode(' ', $text);
    if (count($words) <= $wordCount) {
        return $text;
    } else {
        $truncatedText = array_slice($words, 0, $wordCount);
        $finalText = implode(' ', $truncatedText);
        return $finalText;
    }
}


echo cutString($text, 10);
?>