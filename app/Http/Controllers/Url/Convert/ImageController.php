<?php

namespace App\Http\Controllers\Url\Convert;

use App\Http\Controllers\Controller;
use App\Http\Services\Url\ImageService;

class ImageController extends Controller
{
    public function show(
        ImageService $imageService,
        string $imageName
    ) {
        return redirect(
            $imageService->getUrlByImageName(
                strtoupper(
                    explode(',', $imageName)[0]
                )
            )
        );
    }
}
