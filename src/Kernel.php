<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    /**
     * Le cache de prod est commité (pas de SSH chez OVH) et vit dans var/cache/prod-v2.
     * Sur le serveur, var/cache/prod contient des fichiers générés à l'exécution et non
     * suivis par Git : ils ont bloqué tous les déploiements du 2 au 10 septembre 2026.
     */
    public function getCacheDir(): string
    {
        return $this->getProjectDir().'/var/cache/'.$this->environment.'-v2';
    }
}
