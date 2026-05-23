<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcaaController extends Controller
{
    private function site(): array
    {
        return config('ecaa');
    }

    public function home()
    {
        return view('pages.home', ['site' => $this->site()]);
    }

    public function about()
    {
        return view('pages.about', ['site' => $this->site()]);
    }

    public function equipment()
    {
        return view('pages.equipment', ['site' => $this->site()]);
    }

    public function achievements()
    {
        return view('pages.achievements', ['site' => $this->site()]);
    }

    public function partners()
    {
        return view('pages.partners', ['site' => $this->site()]);
    }

    public function news()
    {
        return view('pages.news', ['site' => $this->site()]);
    }

    public function contact()
    {
        return view('pages.contact', ['site' => $this->site()]);
    }
}
