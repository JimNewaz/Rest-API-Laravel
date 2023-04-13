<?php 

namespace App\Filters\Version1;

use App\Filters\ApiFilters;
use Illuminate\Http\Request;



class InvoiceFilter extends ApiFilters{
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

    public function transform(Request $request){
        $eloQuery = [];

        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($parm);

            if(!isset($query)){
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;

            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}