<?php

namespace Hyder\Zipify\Services;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;

class ZipFacadeService
{
    private $directoryPath;

    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $abilities
     * @param  \DateTimeInterface|null  $expiresAt
     * @return \Laravel\Sanctum\NewAccessToken
     */

    public function create($fileName, $explodeBy)
    {
        // Initialize archive object
        if (file_exists($fileName)) {
            unlink($fileName);
        }

        $zip = new ZipArchive();
        $zip->open($fileName, ZipArchive::CREATE | ZipArchive::OVERWRITE);
        if (is_dir($this->directoryPath) === true) {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->directoryPath), RecursiveIteratorIterator::SELF_FIRST);
            foreach ($files as $file) {
                $file = realpath($file);

                if (is_file($file) === true) {
                    $zip->addFromString(explode($explodeBy, $file)[1], file_get_contents($file));
                }
            }
        }

        $zip->close();

        return $this;
    }
}
