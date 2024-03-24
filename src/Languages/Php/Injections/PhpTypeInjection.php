<?php

namespace Tempest\Highlight\Languages\Php\Injections;

use Tempest\Highlight\Escape;
use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Injection;
use Tempest\Highlight\IsInjection;
use Tempest\Highlight\Languages\Php\Types\PhpTypeLanguage;

final readonly class PhpTypeInjection implements Injection
{
    use IsInjection;

    public function getPattern(): string
    {
        return '(?<match>([\w\\\\\|\&\(\)]+))\s\\$';
    }

    public function parseContent(string $content, Highlighter $highlighter): string
    {
        return Escape::injection($highlighter->parse($content, new PhpTypeLanguage()));
    }
}