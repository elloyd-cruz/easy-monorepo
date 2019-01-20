<?php
declare(strict_types=1);

namespace StepTheFkUp\Pagination\Interfaces;

interface PageBasedPaginationDataInterface
{
    /**
     * Get page number.
     *
     * @return int
     */
    public function getPage(): int;

    /**
     * Get number of items per page.
     *
     * @return int
     */
    public function getPerPage(): int;
}