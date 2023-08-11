<?php declare(strict_types=1);

namespace Tpay\CodingStandards;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

final class PhpCsFixerConfig extends Config
{
    /**
     * @return Finder
     */
    public function getFinder(): iterable
    {
        return parent::getFinder()
            ->files()
            ->ignoreDotFiles(false);
    }
}
