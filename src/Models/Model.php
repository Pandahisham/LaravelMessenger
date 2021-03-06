<?php namespace Arcanedev\LaravelMessenger\Models;

use Arcanedev\Support\Database\Model as BaseModel;

/**
 * Class     Model
 *
 * @package  Arcanedev\LaravelMessenger\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class Model extends BaseModel
{
    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->setConnection(
            config('laravel-messenger.database.connection')
        );
        $this->setPrefix(
            config('laravel-messenger.database.prefix')
        );

        parent::__construct($attributes);
    }
}
