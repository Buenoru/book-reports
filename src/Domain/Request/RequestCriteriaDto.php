<?php

declare(strict_types=1);

namespace Reports\Domain\Request;

class RequestCriteriaDto
{
    public function __construct(
        public readonly string $field,
        /** search term */ public readonly string $term,
        public readonly RequestCriteriaConditionsEnum $condition,
    ) {
    }
}
