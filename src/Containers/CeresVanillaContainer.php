<?php

namespace CeresVanilla\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaContainer
{
    public function call(Twig $twig)
    {
        return $twig->render('CeresVanilla::Stylesheet');
    }
}
