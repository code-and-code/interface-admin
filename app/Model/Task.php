<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['date', 'command_id'];
    protected $hidden   = ['updated_at'];

    public function Command()
    {
       return $this->belongsTo(Command::class);
    }
}