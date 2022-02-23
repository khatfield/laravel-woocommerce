<?php

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Facades\Query;
use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

class BulkOrder extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'batch/order';
}
