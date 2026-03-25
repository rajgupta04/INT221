<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNumeric;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/json', function () {
    return response()->JSON(["Message"=>"How Are You?"]);
});
// Route::get('/{name}', function ($name) {
//     return response()->JSON(["Message"=>"Hello $name"]);
// });
Route::get('user/name/{name}', function ($name) {
    return view('user',['n'=>$name]);
})->where('name', '[A-Z][a-z]+'); // '[]' -> single '[]+' -> mutiple any no of time '[]*' -> multiple but unique digits  where('name', '[A-Za-z\s\-]+');
// Route::get('/{id}', function ($id) {
//     return view('user',['n'=>$id]);
// })->whereNumber('id');
Route::get('user/idname/{id}/{name}', function ($id,$name) {
    return view('user',['n'=>$id,'id'=>$id]);
})->where('name', '[A-Z][a-z]+')->where('id', '[0-9]+');
Route::get('user/id/{id}', function ($id) {
    if(is_numeric($id))
    return view('user',['n'=>$id]);
else return "Only Integer Are Allowed!!";
});

Route::get('student',function(){
    [$name='Parveen',$roll=12,$section="323Ft"];
    return view('student1',['name' =>$name,'roll'=>$roll,'section' => $section]);
});

Route::middleware([\App\Http\Middleware\CheckAge::class])->group(function () {
    Route::get('/student1', function () {
        return view('student1', [
            'name' => request('name', 'Unknown'),
            'roll' => request('roll', 'N/A'),
            'section' => request('section', 'N/A')
        ]);
    });
    
    Route::get('/student2', function () {
        return view('student2', [
            'name' => request('name', 'Unknown'),
            'roll' => request('roll', 'N/A'),
            'section' => request('section', 'N/A')
        ]);
    });
    
    Route::get('/student3', function () {
        return view('student3', [
            'name' => request('name', 'Unknown'),
            'roll' => request('roll', 'N/A'),
            'section' => request('section', 'N/A')
        ]);
    });
});
