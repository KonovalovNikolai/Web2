<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class News
{
    public $title;
    public $date;
    public $tag;
    public $body;
    public $img;
    public $url;

    public function __construct($title, $date, $tag, $body, $img, $url)
    {
        $this->title = $title;
        $this->date = $date;
        $this->tag = $tag;
        $this->body = $body;
        $this->img = $img;
        $this->url = $url;
    }
}

class StoreItem
{
    public $name;
    public $cost;
    public $img;

    public function __construct($name, $cost, $img)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->img = $img;
    }
}

class HomeController extends Controller
{
    public function index()
    {
        $news = DB::table('news')
            ->orderBy('date')
            ->limit(3)
            ->get();

        return view('index')->with('newsArray', $news);
    }

    public function newsListPage($page = 1)
    {
        $newsPerPage = 5;
        $startIndex = ($page - 1) * $newsPerPage;

        $numberOfPages = ceil(DB::table('news')->count() / $newsPerPage);

        $news = DB::table('news')
            ->orderBy('date')
            ->skip($startIndex)
            ->limit($newsPerPage)
            ->get();


        return view('news')
            ->with('newsArray', $news)
            ->with('currentPage', $page)
            ->with('limit', $numberOfPages);
    }

    public function newsPage()
    {
        return view('news_page');
    }

    public function storePage()
    {
        $itemLists  = DB::table('store_items')->get();

        return view('store')->with('itemList', $itemLists);
    }

    public function storeItemPage()
    {
        return view('store_item');
    }
}
