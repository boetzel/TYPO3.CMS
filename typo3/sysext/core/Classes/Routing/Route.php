<?php
declare(strict_types = 1);

namespace TYPO3\CMS\Core\Routing;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Symfony\Component\Routing\Route as SymfonyRoute;

/**
 * TYPO3's route is built on top of Symfony's route with some special handling
 *
 * @internal as this is tightly coupled to Symfony's Routing and we try to encapsulate this, please note that this might change
 */
class Route extends SymfonyRoute
{
    /**
     * @return array
     */
    public function getArguments(): array
    {
        return $this->getOption('_arguments') ?? [];
    }
}