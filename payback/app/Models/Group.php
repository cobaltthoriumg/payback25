<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'invitation_token',
        'created_by',
    ];

    // Getter and Setter for name
    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    // Getter and Setter for invitation_token
    public function getInvitationToken()
    {
        return $this->invitation_token;
    }

    public function setInvitationToken($value)
    {
        $this->invitation_token = $value;
    }

    // Getter and Setter for created_by
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    public function setCreatedBy($value)
    {
        $this->created_by = $value;
    }

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}