<?php 
namespace Webriderz\Contactform\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class ContactForm extends Model
{
	
	protected $table='contact';
	protected $fillable=['name','email','message'];
}
