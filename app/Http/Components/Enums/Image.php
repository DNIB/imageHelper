<?php

namespace App\Http\Components\Enums;

use App\Http\Extends\Enum\Enum;
use Illuminate\Support\Collection;

class Image extends Enum
{
    private const AFRICA = 'img/africa';
    private const HENTAI = 'img/hentai';
    private const NOBOKI = 'img/noBoki';
    private const NOGG = 'img/noGG';
    private const SHIP = 'img/shit';
    private const TITS = 'img/tits';
    private const YUNA = 'img/yuna';

    private const HANDSHAKE = 'gif/handshake';
    private const LIE = 'gif/lie';
    private const TOTOKO = 'gif/totoko';
    private const YUKSU = 'gif/yuksu';

    public static function randomUrl(): string
    {
        return Collection::make(static::toArray())
            ->random();
    }
}
