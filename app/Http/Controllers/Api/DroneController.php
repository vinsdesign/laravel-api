<?php

namespace App\Http\Controllers\Api;

//import model Post
use App\Models\drone;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\DroneResource;

class DroneController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $drones = drone::latest()->paginate(5);

        //return collection of posts as a resource
        return new DroneResource(true, 'List Data drone', $drones);
    }
}