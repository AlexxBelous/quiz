<!--

Напишите PHP класс `TextAnalyzer`, который позволяет анализировать текст, разбивая его на слова и предоставляя возможность выбора формата вывода результата. Класс должен предоставлять метод `analyzeText`, который принимает текст и формат (1, 0 или 2) и возвращает соответствующий результат (массив слов, количество слов или ассоциативный массив слов и их позиций в тексте). Класс также должен иметь конструктор, который принимает текст для анализа.

-->














































<!--******************************************-->

<?php


$text = "Under the shimmering moonlight, the night was filled with secrets. A gentle breeze rustled the leaves, whispering stories of distant lands. Stars adorned the velvety sky, like diamonds in the abyss. Nature's symphony played on, as creatures of the night began their nocturnal dances. An owl hooted in the distance, a mysterious serenade to the moon. The world slept, unaware of the magic that unfolded under the celestial canvas. Dreams took flight on the wings of imagination, weaving tales of wonder and enchantment. In this timeless night, possibilities were as boundless as the cosmos, and the universe held its breath, awaiting the next chapter of the unknown.";


class TextAnalyzer
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function analyzeText($format = 1)
    {
        switch ($format) {
            case 0:
                return $this->countWords();
            case 2:
                return $this->getWordPositions();
            case 1:
            default:
                return $this->getWordsArray();
        }
    }

    private function getWordsArray()
    {
        return str_word_count($this->text, 1);
    }

    private function countWords()
    {
        return str_word_count($this->text, 0);
    }

    private function getWordPositions()
    {
        $words = str_word_count($this->text, 2);
        return $words;
    }
}

$analyzer = new TextAnalyzer($text);

// Вывод массива слов
$wordsArray = $analyzer->analyzeText(1);
print_r($wordsArray);

// Вывод количества слов
$countWords = $analyzer->analyzeText(0);
echo "Количество слов: $countWords\n";

// Вывод ассоциативного массива слов и их позиций
$wordPositions = $analyzer->analyzeText(2);
print_r($wordPositions);
?>