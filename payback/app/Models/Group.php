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
    ];

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getInvitationToken()
    {
        return $this->invitation_token;
    }

    public function setInvitationToken($value)
    {
        $this->invitation_token = $value;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}