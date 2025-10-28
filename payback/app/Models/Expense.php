<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'paid_by',
        'amount',
        'currency',
        'description',
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

    // Getter and Setter for paid_by
    public function getPaidBy()
    {
        return $this->paid_by;
    }

    public function setPaidBy($value)
    {
        $this->paid_by = $value;
    }

    // Getter and Setter for amount
    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($value)
    {
        $this->amount = $value;
    }

    // Getter and Setter for currency
    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($value)
    {
        $this->currency = $value;
    }

    // Getter and Setter for description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function payer()
    {
        return $this->belongsTo(User::class, 'paid_by');
    }
}