<?php


namespace Artadmin\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class Permission extends Model
{
    function __construct(array $attributes = [])
    {
        $this->collection= config("artadmin.tables.permissions");
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
