<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\StoreItem;

class PagesController extends Controller
{
    public function homePage()
    {
        $news = [
            new News(
                'Rotting Christ TV',
                '15/01/2022',
                'media',
                'Today we celebrate the 15 years of our official ROTTING CHRIST TV channel in Youtube!A channel that updates you with all the audio and video official releases of the band and provide you everything free of charge.',
                asset('img/news/tv.jpg'),
                ''),
            new News(
                'Sleep of the Angels 23 years ago',
                '04/01/2022',
                'album',
                '23 years today since the release of our "Sleep of the Angels"!',
                asset('img/news/angel.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                'tour',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
        ];

        return view('home')->with('newsArray', $news);
    }

    public function newsListPage($page = 1)
    {
        $news = [
            new News(
                'Rotting Christ TV',
                '15/01/2022',
                '1',
                'Today we celebrate the 15 years of our official ROTTING CHRIST TV channel in Youtube!A channel that updates you with all the audio and video official releases of the band and provide you everything free of charge.',
                asset('img/news/tv.jpg'),
                ''
            ),
            new News(
                'Sleep of the Angels 23 years ago',
                '04/01/2022',
                '2',
                '23 years today since the release of our "Sleep of the Angels"!',
                asset('img/news/angel.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '3',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '4',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '5',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '6',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '7',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '8',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                '9',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
                ''
            ),
        ];

        $newsPerPage = 2;
        $startIndex = ($page - 1) * $newsPerPage;
        $numberOfPages = ceil(count($news) / $newsPerPage);
        $pageNews = array_slice($news, $startIndex, $newsPerPage);

        return view('news')
            ->with('newsArray', $pageNews)
            ->with('currentPage', $page)
            ->with('limit', $numberOfPages);
    }

    public function newsPage() {
        return view('news_page');
    }

    public function store() {
        $itemLists = [
            new StoreItem("'666' T-SHIRT", 3999, asset('img/store/list/t-shirt.png')),
            new StoreItem("'666' T-SHIRT", 3999, asset('img/store/list/t-shirt.png')),
            new StoreItem("'666' Long", 3999, asset('img/store/list/long.png')),
            new StoreItem("'666' Long", 3999, asset('img/store/list/long.png')),
            new StoreItem("'666' T-SHIRT", 3999, asset('img/store/list/t-shirt.png')),
        ];

        return view('store')->with('itemList', $itemLists);
    }
}

?>
