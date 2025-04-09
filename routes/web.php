<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'showHome']);
Route::get('/usernamedivan',[PageController::class,'allUsers'])->name('usernamedivan');
Route::get('/newview',[PageController::class,'newController']);
Route::get('/user/{id}',[PageController::class,'showUser']);
Route::get('/contactsalternative',[PageController::class,'contactsAlternative'])->name('contactsAlternative');
Route::get('/showform',[PageController::class,'showForm'])->name('showForm');
Route::post('/handleform',[PageController::class,'handleForm'])->name('handleForm');


Route::get('/post',function() {

    $postDesc = "Lorem ipsum dolor sit amet consectetur adipisicing elit";
    $author = "Ivan Duane";
    return view('post', [
            'postDesc' => $postDesc, 
            'author' => $author
    ]);
});


function getContacts() {
    $contacts = [
        ['name'=>'FirstIvan' , 'phone'=>'974525272', 'city'=>'Dasmarinas'],
        ['name'=>'SecondIvan' , 'phone'=>'974525272', 'city'=>'Manila'],
        ['name'=>'ThirdIvan' , 'phone'=>'974525272', 'city'=>'Pangasinan'],
        ['name'=>'FourthIvan' , 'phone'=>'974525272', 'city'=>'Iloilo']
    ];
    return $contacts;
}

Route::get('/contacts', function() {
    return view('contacts', [
        'contacts' => getContacts()
    ]);
});

Route::get('/contact/{id}', function($id) {
    $contacts = getContacts();
    $contact = $contacts[$id];
    return view('contact', ['id'=>$contact]);
});




// function getUsers() {
//     return [
//         1 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Dasmarinas'],
//         2 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Manila'],
//         3 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Pangasinan'],
//         4 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Iloilo']
//     ];
// }

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/users', function () {
//     $names = [
//         1 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Dasmarinas'],
//         2 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Manila'],
//         3 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Pangasinan'],
//         4 => ['name'=>'Ivan' , 'phone'=>'974525272', 'city'=>'Iloilo']
//     ];

//     return view('users', [
//         'user'=>$names,
//         'city'=>'Manila'
//     ]);
// });

// Route::get('/user/{id}', function ($id) {
    
//     $users = getUsers();
//     $user = $users[$id];
//     abort_if(!isset($users[$id]), 404);

//     return view('user', ['id' => $user]);
// })->name('view.user');



// Route::prefix('page')->group(function () {
//     Route::get('/pageabout', function () {
//         return "<h1>Page about</h1>";
//     });
//     Route::get('/pagegallery', function () {
//         return "<h1>Page gallery</h1>";
//     });
//     Route::get('/pagefirst/firstpage', function () {
//         return "<h1>Page first</h1>";
//     });
// });





// Route::get('/post/{id?}', function (string $id = null) {
//     if ($id) {
//         return "<h1>Post ID: " . $id;
//     }
//     else {
//         return "NO ID";
//     }
// })->where('id', '[0-9]+'); 


// // ->whereNumber('id')
// // ->whereAlphaNumeric('id')

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
//     if ($id) {
//         return "<h1>Post ID: " . $id . "</h1><h2>Comment is " . $comment . "</h2>";
//     }
//     else {
//         return "NO ID";
//     }
// })->where('id', '[0-9]+')->whereAlpha('commentid');
