<?php

namespace App\Twig;

use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function __construct(private readonly RequestStack $requestStack) {}

    public function getFunctions(): array
    {
        return [new TwigFunction("asset", [$this, "getAssetUrl"])];
    }

    public function getAssetUrl(string $path): string
    {
        // Si l'URL est absolue, la retourner telle quelle
        if (preg_match("#^(https?:)?//#", $path)) {
            return $path;
        }

        // Récupérer le base path depuis la requête courante
        // Ex: /AP/Agora/public
        $basePath = "";
        $request = $this->requestStack->getCurrentRequest();
        if ($request !== null) {
            $basePath = $request->getBasePath();
        }

        // Assurer que le chemin commence par le base path suivi d'un slash
        return rtrim($basePath, "/") . "/" . ltrim($path, "/");
    }
}
