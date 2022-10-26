<?php


namespace Artadmin\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class RolePermission extends Model
{
    function __construct(array $attributes = [])
    {
        $this->collection= config("artadmin.tables.roles_permissions");
    }


}
