<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
/**
 * 
 * 
 * @return void
 */
public function __construct()
{
    //
}
/**
 * 
 * 
 * @return \Illuminate\Contracts\View|\Closure|string
 */
public function render()
{
return view('layouts.app');
}

}