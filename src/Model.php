<?php

namespace Endrika73\LaravelModel;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as BaseModel;


/**
 * Laravel Model
 *
 * @method static static make(array $attributes = [])
 * @method static static create(array $attributes = [])
 * @method static static forceCreate(array $attributes = [])
 * @method static static firstOrNew(array $attributes = [], array $values = [])
 * @method static static firstOrFail(array $columns = ['*'])
 * @method static static firstOrCreate(array $attributes, array $values = [])
 * @method static static firstOr($columns = ['*'], Closure $callback = null)
 * @method static static firstWhere(array $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static static updateOrCreate(array $attributes, array $values = [])
 * @method static null|static first($columns = ['*'])
 * @method static static findOrFail($id, array $columns = ['*'])
 * @method static static findOrNew($id, array $columns = ['*'])
 * @method static null|static find($id, array $columns = ['*'])
 * @method static static where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static static whereNotIn($column, $values, $boolean = 'and')
 * @method static static orWhereNotIn($column, $values)
 * @method static static latest($column = null)
 * @mixin Builder
 */
class Model extends BaseModel
{

}