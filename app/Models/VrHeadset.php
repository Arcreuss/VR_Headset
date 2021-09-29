<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrHeadset extends Model {
        protected $fillable = ['brand', 'name', 
        'price', 'releasedate', 'description', 'resolution',
        'refreshrate', 'fov','sensors', 'controllersensor']; // protection laravel, les champs doivent être autorisés dans un tableau fillable dans la classe du model                                                    // sinon erreur "Illuminate\Database\Eloquent\MassAssignmentException" ou "Illuminate\Database\QueryException" (erreur sql du à une contrainte à la création de la table quand un des champs est manquant)
}