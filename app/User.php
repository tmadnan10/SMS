<?php

namespace App;

use App\Task;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'account_type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get all of the tasks for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Get the teacher row for the user.
     */

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function getID()
    {
        return $this->id;
    }

    /**
     * Get the account type for the user.
     * This Type will be used to redirect the from the log in page
     */

    public function getType()
    {
        return $this->account_type;
    }
}
