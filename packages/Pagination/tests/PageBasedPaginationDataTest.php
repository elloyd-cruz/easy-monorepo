<?php
declare(strict_types=1);

namespace StepTheFkUp\Pagination\Tests;

use StepTheFkUp\Pagination\PageBasedPaginationData;

class PageBasedPaginationDataTest extends AbstractTestCase
{
    /**
     * Pagination data should return same data initially given.
     *
     * @return void
     */
    public function testGetters(): void
    {
        $page = 1;
        $perPage = 15;

        $paginationData = new PageBasedPaginationData($page, $perPage);

        self::assertEquals($page, $paginationData->getPage());
        self::assertEquals($perPage, $paginationData->getPerPage());
    }
}