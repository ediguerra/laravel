<?php

namespace ProjetoTarefas;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name','responsible','email','address','obs'];
}
