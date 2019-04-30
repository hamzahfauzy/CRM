<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function items()
    {
    	return $this->hasMany(TransactionItem::class);
    }
}
