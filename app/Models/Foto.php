<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
class Foto extends Eloquent{
    public $titulo;
    public $url;
    
    protected $fillable = ['titulo', 'email'];
}
