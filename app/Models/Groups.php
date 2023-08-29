<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $receive = ['id', 'group_name'];

    public function users() {
        return $this->hasMany(Users::class);

    }


}
