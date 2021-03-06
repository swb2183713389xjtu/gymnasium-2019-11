<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * Class Model
 * @package App\Models
 *
 * @method static static create(array $content)
 *
 * @property int id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Model extends BaseModel
{
    /** @var array 无法批量赋值的字段 */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
