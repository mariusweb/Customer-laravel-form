<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pardavimai extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pardavimai';
    protected $fillable = ['darbuotojas_id', 'sutarties_nr', 'rekomendacija', 'greitis', 'aptarnavimas', 'pastabos', 'sutikimas'];
    public $timestamps = false;
}
