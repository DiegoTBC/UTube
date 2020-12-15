<?php


namespace App\Services;


use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RemovedorDeVideo
{
    public function removerVideo(int $videoId)
    {
        DB::transaction(function () use($videoId) {
            $video = Video::find($videoId);
            Storage::delete($video->capa);
            Storage::delete($video->video);
            $video->delete();
        });
    }
}
