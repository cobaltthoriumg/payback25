<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'user_id',
    ];

    // Getter and Setter for group_id
    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId($value)
    {
        $this->group_id = $value;
    }

    // Getter and Setter for user_id
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($value)
    {
        $this->user_id = $value;
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setData(int $groupId, int $userId): void
    {
        $this->fill([
            'group_id' => $groupId,
            'user_id' => $userId,
        ]);
    }
}