<?php
class TextFormatter {
    public static function formatText($text, $maxLength) {
        $words = explode(' ', $text);
        $formattedText = '';
        $currentLine = '';

        foreach ($words as $word) {
            if (strlen($currentLine) + strlen($word) + 1 <= $maxLength) {
                $currentLine .= ($currentLine ? ' ' : '') . $word;
            } else {
                $formattedText .= self::justifyLine($currentLine, $maxLength) . "\n";
                $currentLine = $word;
            }
        }

        if ($currentLine) {
            $formattedText .= $currentLine;
        }

        return nl2br($formattedText);
    }

    private static function justifyLine($line, $maxLength) {
        $words = explode(' ', $line);
        $wordCount = count($words);

        if ($wordCount == 1) {
            return str_pad($line, $maxLength);
        }

        $totalSpaces = $maxLength - strlen(str_replace(' ', '', $line));
        $spaceBetweenWords = floor($totalSpaces / ($wordCount - 1));
        $extraSpaces = $totalSpaces % ($wordCount - 1);

        $justifiedLine = '';
        for ($i = 0; $i < $wordCount - 1; $i++) {
            $justifiedLine .= $words[$i] . str_repeat(' ', $spaceBetweenWords + ($i < $extraSpaces ? 1 : 0));
        }
        $justifiedLine .= $words[$wordCount - 1];

        return $justifiedLine;
    }
}