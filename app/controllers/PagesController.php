<?php

class PagesController extends \BaseController {

     public function showContact()
     {
         return View::make('contact');
     }

    public function showAbout()
    {
        return "about page";
    }

    public function showHome()
    {
        return View::make('home');
    }


}
