<?php

namespace App\Http\Controllers;

use Reader;
use App\Http\Requests;
use Illuminate\Http\Request;

class RssFeedController extends Controller
{
    public function getIndex()
    {
        return Reader::read('http://news.google.com/news?cf=all&hl=en&pz=1&ned=ca&output=rss');
    }
}
