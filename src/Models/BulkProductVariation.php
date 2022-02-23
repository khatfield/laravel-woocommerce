<?php

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Facades\Query;
use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

class BulkProductVariation extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'batch/product-variation';
}
