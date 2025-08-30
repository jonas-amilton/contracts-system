<?php
class Formatter
{

    public static function dateBR($date)
    {
        if (!$date) return '';
        return date('d/m/Y', strtotime($date));
    }

    public static function moneyBR($value)
    {
        if (!is_numeric($value)) return $value;
        return 'R$ ' . number_format($value, 2, ',', '.');
    }
}
