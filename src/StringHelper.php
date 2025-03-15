<?php

namespace Library;

class StringHelper
{
    /**
     * Metni büyük harfe çevirir
     *
     * @param string $text
     * @return string
     */
    public static function toUpperCase(string $text): string
    {
        return mb_strtoupper($text, 'UTF-8');
    }

    /**
     * Metni küçük harfe çevirir
     *
     * @param string $text
     * @return string
     */
    public static function toLowerCase(string $text): string
    {
        return mb_strtolower($text, 'UTF-8');
    }

    /**
     * Metnin ilk karakterini büyük harf yapar
     *
     * @param string $text
     * @return string
     */
    public static function capitalize(string $text): string
    {
        return mb_convert_case(mb_substr($text, 0, 1, 'UTF-8'), MB_CASE_UPPER, 'UTF-8') . 
               mb_substr($text, 1, null, 'UTF-8');
    }
}