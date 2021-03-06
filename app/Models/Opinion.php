<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Opinion extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    use HasRoles;

    // protected $appends = ['creator_user'];

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'numberSerie', 'originVehicle', 'curp','folioOpinion',
    ];
    // public function getcreator_userAttribute()
    // {
    //     return  Auth::id();
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    // protected $hidden = [
    //     'creator_user'
    // ];
}
