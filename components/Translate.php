<?php

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class Translate
{
    private $currentResource = '';
    private $currentLanguageCode = 'hu_HU';

    public $currentLanguageShortCode = 'hu';

    function __construct()
    {
        $this->setCurrentLanguageFromURI();
        $this->setCurrentResource();
    }

    private function setCurrentLanguageFromURI()
    {
        if (count(explode('/', $_SERVER['REQUEST_URI'])) === 2 && $_SERVER['REQUEST_URI'] !== '/') {
            $trimmedURI = trim($_SERVER['REQUEST_URI'], '/');
            $this->currentLanguageShortCode = $trimmedURI;
            $languageCodeFromURI = join('_', [
                $trimmedURI,
                strtoupper($trimmedURI)
            ]);

            if (!file_exists($this->getResourceDestination($languageCodeFromURI))) {
                header('HTTP/1.0 404 Not Found');
                exit();
            }

            $this->currentLanguageCode = $languageCodeFromURI;
        }
    }

    private function setCurrentResource()
    {
        $currentLanguageResourceDestination = $this->getResourceDestination($this->currentLanguageCode);

        if (!file_exists($currentLanguageResourceDestination)) {
            throw new Exception("Resource file missing!");
        }

        $this->currentResource = require $currentLanguageResourceDestination;
    }

    private function getResourceDestination($languageCode)
    {
        return '../resources/' . $languageCode . '.php';
    }

    public function trans($resourceKey)
    {
        return !empty($this->currentResource[$resourceKey]) ? $this->currentResource[$resourceKey] : $resourceKey;
    }
}