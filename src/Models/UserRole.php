<?php


namespace Artadmin\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class UserRole extends Model
{
    function __construct(array $attributes = [])
    {
        $this->collection= config("artadmin.tables.users_roles");
    }


}
