<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadHelper
{
    /**
     * Store an uploaded file publicly and return its URL.
     */
    public static function uploadPublicImage(UploadedFile $file, string $folder = 'images'): string
    {
        // Store the file in the specified folder on the 'public' disk
        $path = $file->store($folder, 'public');

        // Return the full URL to the file
        return Storage::url($path);
    }

    /**
     * Store an avatar and optionally delete the old one.
     */
    public static function uploadAvatar(UploadedFile $file, ?string $oldAvatarUrl = null): string
    {
        if ($oldAvatarUrl) {
            self::deletePublicImage($oldAvatarUrl);
        }

        return self::uploadPublicImage($file, 'avatars');
    }

    /**
     * Delete an image from public storage given its URL.
     */
    public static function deletePublicImage(?string $url): void
    {
        if (!$url) {
            return;
        }

        $storageUrl = Storage::url('');

        // Check if the URL belongs to our local storage
        if (str_starts_with($url, $storageUrl) || str_starts_with($url, '/storage/')) {
            $path = str_replace([$storageUrl, '/storage/'], '', $url);
            $path = ltrim($path, '/');
            
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }
}
