<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class produitees
 * @package App\Models
 * @version May 16, 2024, 8:41 am UTC
 *
 * @property string $nom
 * @property integer $prix
 * @property string $description
 * @property string $date
 */
class produitees extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'produitees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prix',
        'description',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'prix' => 'integer',
        'description' => 'string',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
