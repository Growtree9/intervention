<?php

namespace Jacoby\Intervention\Admin\Common\All;

use Jacoby\Intervention\Admin\Support\All\Pagination as PaginationSupport;
use Jacoby\Intervention\Admin\Support\Tabs;
use Jacoby\Intervention\Support\Arr;

/**
 * Common/All/Pagination
 *
 * @package WordPress
 * @subpackage Intervention
 * @since 2.0.0
 *
 * @param
 * [
 *     'common.all.pagination' => (int) $pagination,
 * ]
 */
class Pagination
{
    protected $config;

    /**
     * Initialize
     *
     * @param array $config
     */
    public function __construct($config = false)
    {
        $this->config = Arr::normalizeTrue($config);
        $this->hook();
    }

    /**
     * Hook
     */
    protected function hook()
    {
        if ($this->config->get('common.all.pagination')) {
            PaginationSupport::set('all')->to($this->config->get('common.all.pagination'));
            Tabs::set('all')->remove(['screen-options.pagination']);
        }
    }
}
