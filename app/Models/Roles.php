<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Roles extends Model
{
    const ROLE_DEFAULT_SLUG = 'user';
    const ROLE_SUPERADMIN_SLUG = 'superadmin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'order'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];


    public function users()
    {
        return $this->hasMany(Users::class, 'roles_id');
    }
}
