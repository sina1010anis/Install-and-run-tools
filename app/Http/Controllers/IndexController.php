<?php

namespace App\Http\Controllers;

use App\ClassF\Object_1;
use App\ClassF\ObjectIntrface;
use App\Events\WebSocket;
use App\Filters\NameFilter;
use App\Models\image_product;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Inertia\Inertia;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class IndexController extends Controller
{
    public function test(Object_1 $object_1){
        //return view('welcome');
        //return $object_1->fn();
        broadcast(new WebSocket('som data'));
        //return Inertia::render('editor');
        return view('welcome');
    }

    public function test_2(){
        return User::whereIn('id' , [1,2])->get();
    }
    public function index(ObjectIntrface $objectIntrface){
        return $objectIntrface->fn();
        // $users = app(Pipeline::class)
        // ->send(User::query())
        // ->through([
        //     NameFilter::class
        // ])
        // ->thenReturn()
        // ->get();

        // return $users;
        // $text = request()->get('name');
        // $results=Search::add(User::class, 'name')->add(image_product::class , 'alt_title')
        // ->beginWithWildcard()
        // ->orderByRelevance()
        // ->get($text);
        //     return $results;
    }
}
