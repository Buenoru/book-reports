<?php

declare(strict_types=1);

namespace Reports\Interfaces;

use Doctrine\Common\Collections\Collection;
use Reports\Domain\Database\DatabaseTableDto;

/**
 * @todo Неизвестно кто и как будет вызывать.
 *      Отдатим вызывающему самому разбираться с реализацией этого интерфейса, реализовав через DI
 */
interface DatabaseInterface
{
    /**
     * @return Collection<DatabaseTableDto>
     */
    public function queryRows(string $sql): Collection;

}
