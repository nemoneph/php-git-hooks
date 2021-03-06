<?php

namespace PhpGitHooks\Application\Composer;

use PhpGitHooks\Infrastructure\Composer\ProcessorInterface;

class PreCommitProcessor extends PreQualityToolProcessor implements ProcessorInterface
{
    /**
     * @return string
     */
    public function hookName()
    {
        return 'pre-commit';
    }
}
