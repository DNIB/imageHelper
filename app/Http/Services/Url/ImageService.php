<?php

namespace App\Http\Services\Url;

use App\Http\Components\Enums\Image;

class ImageService
{
    private const IMAGE_HOST = "https://raw.githubusercontent.com/DNIB/atar-talking/main/";

    public function getUrlByImageName(
        string $imageName
    ): string {
        return Image::isValidKey($imageName)
            ? self::IMAGE_HOST . Image::from($imageName)->getValue()
            : self::IMAGE_HOST . Image::randomUrl();
    }
}