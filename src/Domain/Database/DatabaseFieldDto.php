<?php

declare(strict_types=1);

namespace Reports\Domain\Database;

class DatabaseFieldDto
{
    public function __construct(
        public readonly string $name,
        public readonly FieldTypeEnum $type,
    )
    {
    }
}
