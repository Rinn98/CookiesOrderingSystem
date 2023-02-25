<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
class Order extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'order';

    protected $fillable = [
        'id', 'user_id','staff_id','staffname', 'status','item','price', 'total','shipping', 'quantity',
        'name', 'address', 'city', 'state', 'postcode', 'email', 'phoneno', 'paymentInvoice','delivery','remarks', 'paymentMethod'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function routeNotificationForMail($notification)
    {
        // Return email address only...
        return $this->email;
 
        // Return email address and name...
        return [$this->email => $this->name];
    }
}
