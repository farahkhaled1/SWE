<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DemoController;
//use App\Http\Controllers\deletecontroller;
use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
//use App\Http\Controllers\CourseController;




=======
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DrCrudLarvel;
use App\Http\Controllers\DrDeleteController;
>>>>>>> Stashed changes
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


Route::get('doctordetails', [CourseController::class, 'showdoctord']);


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

Route::post('/specs1/updateaims', [Controller::class, 'update_aims']);
Route::post('/specs2/updateku', [Controller::class, 'update_ku']);
Route::post('/specs2/updateis', [Controller::class, 'update_is']);
Route::post('/specs2/updatepps', [Controller::class, 'update_pps']);
Route::post('/specs2/updategts', [Controller::class, 'update_gts']);



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

Route::get('/specs4', function () {
    return view('specs4');
});

Route::get('/specs5', function () {
    return view('specs5');
});

Route::get('/specs6', function () {
    return view('specs6');
});

Route::get('/specs7', function () {
    return view('specs7');
});

Route::get('/courseAssesment', function () {
    return view('courseAssesment');
});

Route::get('/specs1', function () {
    return view('specs1');
});

Route::get('Checklist', function () {
    return view('checklist');
});

Route::get('courses', function () {
    return view('Courses');
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

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
Route::get('/checklist', function () {
    return view('Checklist');
});


<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
Route::get('/test', function () {
    return view('test');
});
//Route::get('courses', [CourseController::class, 'show']);
Route::get('/courses', 'App\Http\Controllers\CourseController@show');
// Route::get('/assign1',[CourseContoller::class,'show']);
Route::get('assign1', [CourseController::class, 'show']);

Route::get('coursesDetails', [CourseController::class, 'CourseTable']);
Route::get('checklist', [CourseController::class, 'Checklist']);

Route::get('assign1', [CourseController::class, 'show']);

Route::get('/doctordetails', function () {
    return view('doctorDetails');
});

<<<<<<< Updated upstream
Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});


Route::get('/adddoctor', function () {
    return view('addDoctor');
});
=======


>>>>>>> Stashed changes




Route::get('courses', 'CourseController@assign1');

Route::get('doctordetails', [CourseController::class, 'showDr']);

// Route::get('addDR',[DrCrudLarvel::class ,'index'])->name('dr');
// Route::post('addDR',[DrCrudLarvel::class ,'addDR'])->name('drr');
// Route::post('insert',[DrCrudLarvel::class ,'insert'])->name('drrr');
// //Route::get('/addDR','DrCrudLarvel@addDR');

<<<<<<< Updated upstream
// Route::resource('list', DrDeleteController::class);


Route::get('list',[DrDeleteController::class,'list']);
Route::get('delete/{code}',[DrDeleteController::class,'delete']);
=======
Route::get('list', [DrDeleteController::class, 'list']);
>>>>>>> Stashed changes


// Route::get('/login', function () {
//     return view('login');
// });
<<<<<<< Updated upstream


// Route::get('/coursesDetails', function () {
//     return view('coursesDetails');
// });




=======
// Route::get('/coursesDetails', function () {
//     return view('coursesDetails');
// });
>>>>>>> Stashed changes
Route::get('courses', 'CourseController@assign1');

Route::get('/adddoctor', function () {
    return view('addDoctor');
});


Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
