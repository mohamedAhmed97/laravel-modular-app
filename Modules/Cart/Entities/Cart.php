<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Customer\Entities\Customer;
use Modules\Product\Entities\Product;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        "customer_id",
        "product_id",
        "quantity"
    ];

    // /**
    //  * Get the user that owns the ShoppingCart
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the product that owns the ShoppingCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    protected static function newFactory()
    {
        return \Modules\Cart\Database\factories\CartFactory::new();
    }
}
