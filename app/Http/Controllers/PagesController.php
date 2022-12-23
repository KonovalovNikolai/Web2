<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

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

    public function newsPage($page = 0)
    {
        $newsPerPage = 2;

        $news = [
            new News(
                'Rotting Christ TV',
                '15/01/2022',
                'media',
                'Today we celebrate the 15 years of our official ROTTING CHRIST TV channel in Youtube!A channel that updates you with all the audio and video official releases of the band and provide you everything free of charge.',
                asset('img/news/tv.jpg'),
                ''
            ),
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
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                'tour',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
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
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                'tour',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
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
            new News(
                'Rotting Christ on Tour',
                '06/12/2021',
                'tour',
                'Thank you Finlandia for a great response to our show.',
                asset('img/news/tour.jpg'),
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

        $pageNews = array_slice($news, $newsPerPage * $page, $newsPerPage * $page + $newsPerPage);

        return view('news')->with('newsArray', $pageNews)->with('page', $page);
    }
}

?>
