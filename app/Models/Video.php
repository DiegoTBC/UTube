<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'capa',
        'video'
    ];

    public function getCapa()
    {
        if ($this->capa)
        {
            return Storage::url($this->capa);
        }

        return Storage::url('capa/sem-imagem.jpg');
    }

    public function getVideo()
    {
        return Storage::url($this->video);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
