<?php 

namespace App\Services\version1;

use Illuminate\Http\Request;


class CustomerQuery{
    protected $safeParams = [
        'name' => ['eq'],
        'type'=> ['eq'],
        'email'=> ['eq'],
        'address' => ['eq'],
        'postcode' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'postcode' => 'post_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'lte' => '<=',
        'gte' => '>='
    ];

    
}