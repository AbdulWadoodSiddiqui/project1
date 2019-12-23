<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pc extends Model
{
    protected $fillable = ['pc_model' , 'pc_windows' , 'pc_generation' , 'pc_graphics' , 'pc_core' , 'pc_hard' , 'pc_optical' , 'pc_display' , 'pc_vr' , 'pc_led' , 'price' , 'image'];
}
