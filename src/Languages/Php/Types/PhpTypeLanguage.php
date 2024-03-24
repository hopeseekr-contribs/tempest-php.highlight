<?php

namespace Tempest\Highlight\Languages\Php\Types;

use Tempest\Highlight\Language;

final readonly class PhpTypeLanguage implements Language
{
    public function getInjections(): array
    {
        return [];
    }

    public function getPatterns(): array
    {
        return [
            new IndividualTypePattern(),
        ];
    }
}