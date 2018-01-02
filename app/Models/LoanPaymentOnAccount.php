<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanPaymentOnAccount extends Model
{
    //
	use SoftDeletes;
	protected $table = "loan_payment_on_accounts";

	public function loan()
	{
		return $this->hasOne(Loan::class, 'id', 'loan_id');
	}
}
