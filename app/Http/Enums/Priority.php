<?php

namespace App\Enums;

enum Priority: string
{
    case Low = '1';
    case MediumLow = '2';
    case Medium = '3';
    case MediumHigh = '4';
    case High = '5';

    public function label(): string
    {
        return match ($this) {
            self::Low => 'Baixa',
            self::MediumLow => 'Média Baixa',
            self::Medium => 'Média',
            self::MediumHigh => 'Média Alta',
            self::High => 'Alta',
        };
    }
}