<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\addDoctorController;
//use App\Http\Controllers\deletecontroller;
use App\Http\Controllers\DrDeleteController;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Http\Controllers\DeadlineController;
use App\Notification\deadlinenotf;
//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\mail;
// use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\tlController;

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

Route::post('addingdoctor', [Controller::class, 'add_doctor']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sa1', function () {
    return view('sa1');
});

Route::get('/sa2', function () {
    return view('sa2');
});

Route::get('/sa3', function () {
    return view('sa3');
});


Route::get('/specs2/ilos1', function () {
    return view('ilos1');
});

Route::get('/specs2/ilos2', function () {
    return view('ilos2');
});

Route::get('/specs2/ilos3', function () {
    return view('ilos3');
});

Route::get('/specs2/ilos4', function () {
    return view('ilos4');
});


Route::get('/dbconn', function () {
    return view('dbconn');
});


Route::get('doctordetails', [CourseController::class, 'showdoctord']);


Route::resource('ilos', kucontroller::class);

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


    Route::get('admin/checklist', [CourseController::class, 'Checklist']);

    Route::get('admin/adddoctor', function () {
        return view('admin.adddoctor');
    })->name('admin.dashboard');

    Route::get('admin/dashboard/profile', function () {
        return view('dashboard');
    })->name('profile');

    Route::get('admib/adddoctor', function () {
        return view('addDoctor');
    });
});

Route::post('/specs1/updatedaims', [Controller::class, 'update_aims']);
Route::post('/specs2/updatedku', [Controller::class, 'update_ku']);
Route::post('/specs2/updatedis', [Controller::class, 'update_is']);
Route::post('/specs2/updatedpps', [Controller::class, 'update_pps']);
Route::post('/specs2/updatedgts', [Controller::class, 'update_gts']);
Route::post('/specs5/updatedspecs5', [Controller::class, 'update_specs5']);
Route::post('/sa2/updatedmidterm', [Controller::class, 'update_midterm']);



Route::post('specs4/savemethods', [Controller::class, 'saveRecord']);

Route::get('/specs_courseinfo', [Controller::class, 'course_details']);



Route::get('/viewProfile', function () {
    return view('viewProfile');
});

Route::get('/SubmittedAllForms', function () {
    return view('SubmittedAllForms');
});

Route::get('/SubmittedAssignAssmn', function () {
    return view('SubmittedAssignAssmn');
});

Route::get('/SubmittedCourseAssment', function () {
    return view('SubmittedCourseAssment');
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

Route::get('courseAssesment', [CourseController::class, 'courseAssesment']);

Route::get('/specs1', function () {
    return view('specs1');
});

Route::get('/specs1', function () {
    return view('specs1');
});




Route::get('courses', function () {
    return view('Courses');
});

// Route::get('adddoctor', function () {
//     return view('addDoctor');
// });


Route::get('/specs2', function () {
    return view('specs2');
});

Route::get('/specs3', function () {
    return view('specs3');
});
Route::get('/allforms', function () {
    return view('AllForms');
});

Route::get('/submitted', function () {
    return view('submittedForms');
});

Route::get('/assignment0', function () {
    return view('assignment0');
});



Route::get('/viewDr', function () {
    return view('viewDrSup');
});


Route::get('/assignment1', function () {
    return view('assignment1');
});


Route::get('/checklist', function () {
    return view('Checklist');
});

Route::get('specs_courseinfo', [CourseController::class, 'duedates']);

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

// Route::get('/coursesDetails', function () {
//     return view('coursesDetails');
// });


// Route::get('/adddoctor', function () {
//     return view('addDoctor');
// });



Route::get('/message', function () {
    return view('Message');
});

// Route::get('/courseAssesment', function () {
//     return view('courseAssesment');
// });

Route::get('courses', 'CourseController@assign1');
Route::get('courses', 'CourseController@assign1');

// Route::get('courses', 'CourseController@assign1');

Route::get('courses', 'CourseController@assign1');

Route::get('doctordetails', [CourseController::class, 'showDr']);


Route::get('list', [DrDeleteController::class, 'list']);
Route::get('delete/{code}', [DrDeleteController::class, 'delete']);
Route::get('list', [DrDeleteController::class, 'list']);
// Route::resource('list', DrDeleteController::class);


Route::get('delete/{code}', [DrDeleteController::class, 'delete']);

//Auth::route();

// Route::get('/login', function () {
//     return view('login');
// });


Route::get('courses', 'CourseController@assign1');


Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});


Route::post('/specs7/insertformindatabase', [Controller::class, 'insertformindatabase']);
Route::post('/insert2indatabase', [Controller::class, 'insert_indatabase']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('courses', function () {
        return view('courses');
    })->name('courses');
});


Route::GET('add', [addDoctorController::class, 'Adddata']);



Route::GET('add', [addDoctorController::class, 'Adddata']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sa1', function () {
    return view('sa1');
});

Route::get('/sa2', function () {
    return view('sa2');
});

Route::get('/sa3', function () {
    return view('sa3');
});


Route::get('/specs2/ilos1', function () {
    return view('ilos1');
});

Route::get('/specs2/ilos2', function () {
    return view('ilos2');
});

Route::get('/specs2/ilos3', function () {
    return view('ilos3');
});

Route::get('/specs2/ilos4', function () {
    return view('ilos4');
});


Route::get('/dbconn', function () {
    return view('dbconn');
});


Route::get('doctordetails', [CourseController::class, 'showdoctord']);


Route::resource('ilos', kucontroller::class);

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

    Route::get('admin/adddoctor', function () {
        return view('admin.adddoctor');
    })->name('admin.dashboard');

    Route::get('admin/dashboard/profile', function () {
        return view('dashboard');
    })->name('profile');
});

Route::post('/specs1/updatedaims', [Controller::class, 'update_aims']);
Route::post('/specs2/updatedku', [Controller::class, 'update_ku']);
Route::post('/specs2/updatedis', [Controller::class, 'update_is']);
Route::post('/specs2/updatedpps', [Controller::class, 'update_pps']);
Route::post('/specs2/updatedgts', [Controller::class, 'update_gts']);
Route::post('/specs5/updatedspecs5', [Controller::class, 'update_specs5']);
Route::post('/sa2/updatedmidterm', [Controller::class, 'update_midterm']);
Route::post('/updatedassign', [Controller::class, 'update_assign']);


Route::post('specs4/savemethods', [Controller::class, 'saveRecord']);

Route::get('/specs_courseinfo', [Controller::class, 'course_details']);



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



Route::get('/viewDr', function () {
    return view('viewDrSup');
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

Route::get('coursesDetails', [CourseController::class, 'CourseTable']);
Route::get('checklist', [CourseController::class, 'Checklist']);

Route::get('assign1', [CourseController::class, 'show']);

Route::get('/doctordetails', function () {
    return view('doctorDetails');
});

Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});


Route::get('/message', function () {
    return view('Message');
});

// Route::get('/courseAssesment', function () {
//     return view('courseAssesment');
// });


// Route::get('courses', 'CourseController@assign1');





Route::get('courses', 'CourseController@assign1');

Route::get('doctordetails', [CourseController::class, 'showDr']);


Route::get('list', [DrDeleteController::class, 'list']);
Route::get('delete/{code}', [DrDeleteController::class, 'delete']);
Route::get('list', [DrDeleteController::class, 'list']);


Route::get('delete/{code}', [DrDeleteController::class, 'delete']);


Route::get('courses', 'CourseController@assign1');




Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});
Route::post('/specs7/insertformindatabase', [Controller::class, 'insertformindatabase']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('courses', function () {
        return view('courses');
    })->name('courses');
});


Route::GET('add', [addDoctorController::class, 'Adddata']);



Route::GET('add', [addDoctorController::class, 'Adddata']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sa1', function () {
    return view('sa1');
});

Route::get('/sa2', function () {
    return view('sa2');
});

Route::get('/sa3', function () {
    return view('sa3');
});


Route::get('/specs2/ilos1', function () {
    return view('ilos1');
});

Route::get('/specs2/ilos2', function () {
    return view('ilos2');
});

Route::get('/specs2/ilos3', function () {
    return view('ilos3');
});

Route::get('/specs2/ilos4', function () {
    return view('ilos4');
});


Route::get('/dbconn', function () {
    return view('dbconn');
});


Route::get('doctordetails', [CourseController::class, 'showdoctord']);


Route::resource('ilos', kucontroller::class);

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

    Route::get('admin/adddoctor', function () {
        return view('admin.adddoctor');
    })->name('admin.dashboard');

    Route::get('admin/dashboard/profile', function () {
        return view('dashboard');
    })->name('profile');
});

Route::post('/specs1/updatedaims', [Controller::class, 'update_aims']);
Route::post('/specs2/updatedku', [Controller::class, 'update_ku']);
Route::post('/specs2/updatedis', [Controller::class, 'update_is']);
Route::post('/specs2/updatedpps', [Controller::class, 'update_pps']);
Route::post('/specs2/updatedgts', [Controller::class, 'update_gts']);
Route::post('/specs5/updatedspecs5', [Controller::class, 'update_specs5']);
Route::post('/sa2/updatedmidterm', [Controller::class, 'update_midterm']);
Route::post('/updatedassign', [Controller::class, 'update_assign']);


Route::post('specs4/savemethods', [Controller::class, 'saveRecord']);

Route::get('/specs_courseinfo', [Controller::class, 'course_details']);



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



Route::get('/viewDr', function () {
    return view('viewDrSup');
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

Route::get('coursesDetails', [CourseController::class, 'CourseTable']);
Route::get('checklist', [CourseController::class, 'Checklist']);

Route::get('assign1', [CourseController::class, 'show']);

Route::get('/doctordetails', function () {
    return view('doctorDetails');
});

Route::get('/coursesdetails', function () {
    return view('coursesDetails');
});


Route::get('/adddoctor', function () {
    return view('addDoctor');
});



Route::get('/message', function () {
    return view('Message');
});

// Route::get('/courseAssesment', function () {
//     return view('courseAssesment');
// });


// Route::get('courses', 'CourseController@assign1');





Route::get('courses', 'CourseController@assign1');

Route::get('doctordetails', [CourseController::class, 'showDr']);


Route::get('list', [DrDeleteController::class, 'list']);
Route::get('delete/{code}', [DrDeleteController::class, 'delete']);
Route::get('list', [DrDeleteController::class, 'list']);


Route::get('delete/{code}', [DrDeleteController::class, 'delete']);


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

    Route::get('courses', function () {
        return view('courses');
    })->name('courses');
});

Route::get('/send-deadlinenotfc',[DeadlineController::class,'sendtestnotfication']);