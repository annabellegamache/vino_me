<?php

namespace App\Models;

use App\Models\Cellier;
use App\Models\BouteillePersonalize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CelliersBouteilles extends Model
{
    //use HasFactory;

    // Empêche _aucune_ colonne d'être remplie
    protected $guarded = [];

    protected $table = 'vino__cellier_has_vino__bouteille';

    /*Si on ajoute ses colonnes 
    public const CREATED_AT = null;
    public const UPDATED_AT = null;*/

    /*Pour l'instant il n'y en a pas */
    public $timestamps = false;

    public $incrementing = false;
   
}
