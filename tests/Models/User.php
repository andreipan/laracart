<?php

namespace LukePOLO\LaraCart\Tests\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User.
 */
class User extends Authenticatable
{
    public $id = '1';
    public $cart_sessoin_id;

    public function save(array $options = [])
    {
    }
}
