<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('pdfthumbnail', array($this, 'pdfThumbnail')),
            new TwigFilter('categoryempty', array($this, 'categoryEmpty')),
        );
    }

    public function pdfThumbnail($pdf, $projectDir, $path)
    {
        $img = new \Imagick($projectDir.'/public'.$path.'[0]');

        $img->setFormat("png");

        // Create a TMP file of the image with PNG format
        $fileName = uniqid().'.png';

        // Get the path of the temporal image
        $outputImagePath = $projectDir.'/tmp/'.$fileName;

        $img->writeImage($outputImagePath);

        return $outputImagePath;
    }

    public function categoryEmpty($category, $works)
    {
        foreach($works as $work)
        {
            if($work->getCategory() == $category)
            {
                return true;
            }
        }

        return false;
    }
}
