<?php


namespace App\Helpers\Format;

class Formatting
{
    public static function tel($tel)
    {
        return $tel[0] . "-" . '(' . substr($tel, 1, 3) . ')' . "-" . substr($tel, 4);
    }

    public static function date($date)
    {
        return date("d.m.Y", strtotime($date));
    }

    public static function textLimit($text, $n)
    {
        $str = (string)$text;

        return mb_substr($str, 0, $n) . "...";
    }

    public static function price($price)
    {
        $formatedPrice = "";
        $strPrice = (string)$price;

        while ((integer)($price / 1000) > 0) {
            $digit = mb_strlen((integer)($price / 1000));
            $formatedPrice .= substr($strPrice, 0, $digit) . " ";
            $strPrice = substr($strPrice, 0 + $digit);
            $price %= 1000;

            if ((integer)($price / 1000) <= 0) {
                $formatedPrice .= $strPrice;
            }
        }

        return $formatedPrice;
    }
}
