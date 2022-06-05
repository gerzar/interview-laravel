<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class UploadImageService
{
    public function uploadFile(UploadedFile $file, string $path): string
    {

        $completedFile = $file->storeAs(
            $path,
            preg_replace('%[^A-Za-z0-9]+%', '', $file->getClientOriginalName()).'.'.$file->extension(),
            'public'
        );
        if (!$completedFile) {
            throw new Exception("File wasn't upload");
        }

        return $completedFile;
    }
}
