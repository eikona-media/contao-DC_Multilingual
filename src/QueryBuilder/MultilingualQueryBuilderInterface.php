<?php

declare(strict_types=1);

namespace Terminal42\DcMultilingualBundle\QueryBuilder;

use Doctrine\DBAL\Query\QueryBuilder;

interface MultilingualQueryBuilderInterface
{
    /**
     * Build the query for a simple count query.
     */
    public function buildQueryBuilderForCount();

    /**
     * Build the query for a simple count query.
     */
    public function buildQueryBuilderForCountWithSubQuery(QueryBuilder $queryBuilder);

    /**
     * Build the query builder for a find query.
     *
     * @param string $language
     */
    public function buildQueryBuilderForFind($language);

    /**
     * Get the QueryBuilder instance.
     *
     * @return QueryBuilder
     */
    public function getQueryBuilder();
}
