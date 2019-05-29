<?php

namespace App\Providers;
use App\About;
use App\Branch;
use App\Social;
use View;

use App\Aboutus;
use App\Addcompany;
use App\AddProduct;
use App\photo2;
use App\phpoto;
use App\ShopItem;
use App\Model\Slider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');
        $sliders = Slider::orderBy('created_at', 'desc')->get();
        view::share('sliders',$sliders);

        $first=Slider::all()->first();
        view::share('first',$first);

        $depts = ShopItem::orderBy('created_at', 'desc')->get();
        view::share('depts',$depts);

        $photo = phpoto::all()->last();
        $photo1 = phpoto::all()->first();

        view::share('photo',$photo);
        view::share('photo1',$photo1);


        $photo2 = photo2::all()->last();
        $photos2 = photo2::all()->first();

        view::share('photo2',$photo2);
        view::share('photos2',$photos2);

        $products = AddProduct::orderBy('created_at', 'desc')->get();
        view::share('products',$products);


        $productss = AddProduct::orderBy('id', 'desc')->take(8)->get();
        view::share('productss',$productss);

        $companys = Addcompany::orderBy('created_at', 'desc')->get();
        view::share('companys',$companys);

        $abouts = About::orderBy('created_at', 'desc')->take(2)->get();
        view::share('abouts',$abouts);

        $aboutss = About::orderBy('created_at', 'desc')->get();
        view::share('aboutss',$aboutss);

        $aboutee = About::orderBy('created_at', 'desc')->take(8)->get();
        view::share('aboutee',$aboutee);

        $socials = Social::orderBy('created_at', 'desc')->get();
        view::share('socials',$socials);

        $branches = Branch::orderBy('created_at', 'desc')->get();
        view::share('branches',$branches);
    }
}
