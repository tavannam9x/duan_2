<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
    	'name',
    	'phone_number', 'email',
    	'content','date','status'
    ];
    
}