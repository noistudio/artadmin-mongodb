<?php


namespace Artadmin\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class Role extends Model
{
    function __construct(array $attributes = [])
    {
        $this->collection= config("artadmin.tables.roles");
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

}
