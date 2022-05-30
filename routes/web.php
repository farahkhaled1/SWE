<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DrCrudLarvel;
use App\Http\Controllers\DrDeleteController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dbconn', function () {
    return view('dbconn');
});

// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/main', MainController::class, 'index');

// Route::resource('demo', DemoController::class);



// Route::get('/uploadfile', UploadfileController::class, 'index');
// Route::post('/uploadfile', UploadfileController::class, 'upload');
// Route::post('/main/checklogin', MainController::class, 'checklogin');
// Route::get('main/successlogin', MainController::class, 'successlogin');
// Route::get('main/logout', MainController::class, 'logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'authadmin'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('admin/dashboard/profile', function () {
        return view('dashboard');
    })->name('profile');
});

Route::post('/specs1/create',[Controller::class,'update_profile']);

Route::get('/viewProfile', function () {
    return view('viewProfile');
});


Route::get('/admin', function () {
    return view('AdminMpg');
});

Route::get('/supervisor', function () {
    return view('SupervisorMpg');
});

Route::get('/doctor', function () {
    return view('DoctorMpg');
});

Route::get('/assign1', function () {
    return view('assign1');
});
Route::get('/specs_courseinfo', function () {
    return view('specs_courseinfo');
});
Route::get('/assign2', function () {
    return view('assign2');
});

Route::get('/coursespecs4', function () {
    return view('coursespecs4');
});

Route::get('/coursespecs5', function () {
    return view('coursespecs5');
});

Route::get('/coursespecs6', function () {
    return view('coursespecs6');
});

Route::get('/coursespecs7', function () {
    return view('coursespecs7');
});

Route::get('/courseAssesment', function () {
    return view('courseAssesment');
});

Route::get('/specs1', function () {
    return view('specs1');
});

Route::get('adddoctor', function () {
    return view('addDoctor');
});




Route::get('/specs2', function () {
    return view('specs2');
});

Route::get('/specs3', function () {
    return view('specs3');
});
Route::get('/allforms', function () {
    return view('AllForms');
});

Route::get('/assignment0', function () {
    return view('assignment0');
});

Route::get('/assignment1', function () {
    return view('assignment1');
});


Route::get('/checklist', function () {
    return view('Checklist');
});



Route::get('/test', function () {
    return view('test');
});
//Route::get('courses', [CourseController::class, 'show']);
Route::get('/courses', 'App\Http\Controllers\CourseController@show');
// Route::get('/assign1',[CourseContoller::class,'show']);
Route::get('assign1', [CourseController::class, 'show']);

Route::get('coursesDetails',[CourseController::class,'CourseTable']);
Route::get('checklist',[CourseController::class,'Checklist']);

Route::get('assign1',[CourseController::class,'show']);

Route::get('/doctordetails', function () {
    return view('doctorDetails');
});

Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});


Route::get('/adddoctor', function () {
    return view('addDoctor');
});

Route::get('courses','CourseController@assign1');

Route::get('doctordetails',[CourseController::class,'showDr']);

// Route::get('addDR',[DrCrudLarvel::class ,'index'])->name('dr');
// Route::post('addDR',[DrCrudLarvel::class ,'addDR'])->name('drr');
// Route::post('insert',[DrCrudLarvel::class ,'insert'])->name('drrr');
// //Route::get('/addDR','DrCrudLarvel@addDR');

// Route::resource('list', DrDeleteController::class);


Route::get('list',[DrDeleteController::class,'list']);
Route::get('delete/{code}',[DrDeleteController::class,'delete']);


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/coursesDetails', function () {
//     return view('coursesDetails');
// });




Route::get('courses', 'CourseController@assign1');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
