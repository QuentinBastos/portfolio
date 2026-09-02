<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private const BIRTH_DATE = '2003-03-29';

    public function getFunctions(): array
    {
        return [
            new TwigFunction('age', [$this, 'getAge']),
        ];
    }

    /**
     * Âge courant, recalculé à chaque rendu.
     */
    public function getAge(): int
    {
        $birth = new \DateTimeImmutable(self::BIRTH_DATE);

        return $birth->diff(new \DateTimeImmutable('today'))->y;
    }
}
