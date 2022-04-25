<?php

declare(strict_types=1);

namespace Reports;

use Doctrine\Common\Collections\Collection;
use Reports\Domain\Database\DatabaseTableDto;
use Reports\Domain\Request\RequestDto;
use Reports\Interfaces\DatabaseInterface;

class DatabaseRequester
{
    public function __construct(
        private readonly DatabaseInterface $db
    ) {
    }

    /**
     * @return Collection<DatabaseTableDto>
     */
    public function getFiltered(RequestDto $request): Collection
    {
        /**
         * @todo тут разные манипуляции с {@see RequestDto}, Заполнение {@see DatabaseTableDto},
         *              корректировка/выброс ошибок, прочие манипуцляции, формирование итогового sql запроса.
         *          Скорее всего для этого понадобятся впомогательные классы.
         *      Именно sql возможно не очень правильно, но, не зная всех деталей проекта, усложнять не хочется.
         */

        $sql = '';
        /** @var Collection<DatabaseTableDto> $collection */
        $collection = $this->db->queryRows($sql);

        return $collection;
    }
}
