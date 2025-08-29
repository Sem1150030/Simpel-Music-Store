<?php

namespace App\Livewire\Home;

use App\Models\Album;
use App\Models\Order;
use DB;
use Livewire\Component;

class TrendingList extends Component
{
    public $trendingAlbums;
    public function mount()
    {
        $this->getTrendingAlbums();
    }

    public function getTrendingAlbums(){
    $trendingAlbumIds = DB::table('order_album')
    ->join('albums', 'albums.id', '=', 'order_album.album_id')
    ->select('albums.id', DB::raw('SUM(order_album.quantity) as total_quantity'))
    ->groupBy('albums.id')
    ->orderByDesc('total_quantity')
    ->take(4)
    ->pluck('id'); // Only get the IDs

// Step 2: Get Album models for these IDs
    $this->trendingAlbums = Album::whereIn('id', $trendingAlbumIds)
    ->orderByRaw("FIELD(id, " . $trendingAlbumIds->implode(',') . ")") // preserve order
    ->get();
    }


    public function render()
    {
        return view('livewire.home.trending-list');
    }
}
