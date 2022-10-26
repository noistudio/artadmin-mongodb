<?php


namespace Artadmin\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class UserPermission extends Model
{
    function __construct(array $attributes = [])
    {
        $this->collection= config("artadmin.tables.users_permissions");
    }


}
