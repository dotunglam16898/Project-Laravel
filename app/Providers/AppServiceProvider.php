<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;


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
     //   if(!Cache::has('categories')){
     //     $categories = Category::all();
     //     Cache::put('categories',$categories,20);
     // }
     // $categories = Cache::get('categories');
       


        $categories = Cache::remember('categories',10,function(){
            return Category::all();


        });
        $categories_parent = Category::where('depth',0)->get();
        $categories_child = Category::where('depth',1)->get();

        View::share([
            'categories' => $categories,
            'categories_parent' => $categories_parent,
            'categories_child' => $categories_child


        ]);
        // dd($categories);
        // \Illuminate\Support\Facades\View::share('categories',$categories);

    }
}
