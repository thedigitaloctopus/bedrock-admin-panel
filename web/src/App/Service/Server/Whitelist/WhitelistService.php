<?php

declare(strict_types=1);

namespace App\Service\Server\Whitelist;

interface WhitelistService
{
    public function getList(): array;
}