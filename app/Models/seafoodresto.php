<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class seafoodresto
 * @package App\Models
 * @version October 27, 2021, 2:54 pm UTC
 *
 * @property string $CostumerName
 * @property string $CostumerAddress
 * @property string $CostumerOrder
 * @property integer $TotalAmount
 * @property integer $AmountPaid
 */
class seafoodresto extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'seafoodresto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'CostumerName',
        'CostumerAddress',
        'CostumerOrder',
        'TotalAmount',
        'AmountPaid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'CostumerName' => 'string',
        'CostumerAddress' => 'string',
        'CostumerOrder' => 'string',
        'TotalAmount' => 'integer',
        'AmountPaid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CostumerName' => 'required|string|max:255',
        'CostumerAddress' => 'required|string|max:255',
        'CostumerOrder' => 'required|string|max:255',
        'TotalAmount' => 'required',
        'AmountPaid' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
