<?php

declare(strict_types=1);

namespace Reports\Domain\Database;

class DatabaseTableDto
{
    /**
     * @param string $name
     * @param DatabaseFieldDto[] $fields
     */
    public function __construct(
        public readonly string $name,
        public readonly array $fields
    )
    {
    }
}
