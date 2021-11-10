<?php

namespace App\Repositories;

use App\Models\seafoodresto;
use App\Repositories\BaseRepository;

/**
 * Class seafoodrestoRepository
 * @package App\Repositories
 * @version October 27, 2021, 2:54 pm UTC
*/

class seafoodrestoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CostumerName',
        'CostumerAddress',
        'CostumerOrder',
        'TotalAmount',
        'AmountPaid'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return seafoodresto::class;
    }
}
