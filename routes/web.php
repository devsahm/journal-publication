<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('home');
Route::get('/event', 'PagesController@event')->name('event');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/vision', 'PagesController@about');
Route::get('/mission', 'PagesController@mission');
Route::get('/eventsearch', 'PagesController@eventsearch');
Route::get('/core-values', 'PagesController@values');
Route::get('/journal/publications', 'PagesController@publication')->name('publication');
Route::get('/objective', 'PagesController@objective');
Route::get('/executive/president', 'PagesController@president')->name('executive');
Route::get('/executive/financial-secretary', 'PagesController@financial')->name('executive');
Route::get('/executives', 'PagesController@executive')->name('executive');
Route::get('/executive/internal-auditor', 'PagesController@auditor')->name('executive');
Route::get('/executive/vice-president-1', 'PagesController@vicepresidenta')->name('executive');
Route::get('/executive/vice-president-2', 'PagesController@vicepresidentb')->name('executive');
Route::get('/executive/vice-president-3', 'PagesController@vicepresidentc')->name('executive');
Route::get('/executive/secretary', 'PagesController@secretary')->name('executive');
Route::get('/executive/treasurer', 'PagesController@treasurer')->name('executive');
Route::get('/executive/vice-secretary', 'PagesController@vicesecretary')->name('executive');
Route::get('/executive/publicity-secretary', 'PagesController@publicitysecretary')->name('executive');
Route::get('/executive/ex-officio-1', 'PagesController@exofficioa')->name('executive');
Route::get('/executive/ex-officio-2', 'PagesController@exofficiob')->name('executive');
Route::get('/executive/ex-officio-3', 'PagesController@exofficioc')->name('executive');
Route::get('/executive/assistant-editor-in-chief', 'PagesController@assistanteditor')->name('executive');
Route::get('/members', 'PagesController@members')->name('member');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/executive/editor-in-chief', 'PagesController@editorinchief')->name('executive');
Route::get('/services', 'PagesController@services');
Route::get('/history', 'PagesController@history');
Route::get('/news-list', 'PagesController@newslist');
Route::get('/news-details/{id}', 'PagesController@newsdetails');
Route::get('/event-list', 'PagesController@eventlist');
Route::get('/event-grid', 'PagesController@eventgrid');
Route::get('/event-details/{id}', 'PagesController@eventdetails');
Route::get('/publication/author-guidelines', 'PagesController@guideline');
Route::get('/conference2019', 'PagesController@conference');
Route::get('/comingsoon', 'PagesController@comingsoon');
Route::get('/practicing-license-application', 'PagesController@license');
Route::get('/practicing-license-information', 'PagesController@licenseinformation');
Route::get('/test', 'PagesController@test');



Route::get('/{state}-state', 'StateChapterController@index');
Route::get('/{state}-state/events', 'StateChapterController@eventlist');
Route::get('/{state}-state/executives', 'StateChapterController@executives');
Route::get('/{state}-state/gallery', 'StateChapterController@gallery');
Route::get('/{state}-state/eventsearch', 'StateChapterController@eventsearch');
Route::get('/{state}-state/events/event-details/{id}', 'StateChapterController@eventdetails');
Route::get('/{state}-state/executives/{id}', 'StateChapterController@executivesdetails');
Route::get('/state', 'StateController@index');


Route::get('/{username}-ngo', 'NgoPagesController@index');
Route::get('/{username}-ngo/events', 'NgoPagesController@event');
Route::get('/{username}-ngo/eventsearch', 'NgoPagesController@eventsearch');
Route::get('/{username}-ngo/newsearch', 'NgoPagesController@newsearch');
Route::get('/{username}-ngo/events/{slug}', 'NgoPagesController@eventdetails');
Route::get('/{username}-ngo/news/{slug}', 'NgoPagesController@newsdetails');
Route::get('/{username}-ngo/news', 'NgoPagesController@news');
Route::get('/{username}-ngo/gallery', 'NgoPagesController@gallery');
Route::get('/{username}-ngo/about', 'NgoPagesController@about');




// Route::get('/', 'PagesController@index');
// Route::get('/about', 'PagesController@about');
// Route::get('/contact', 'PagesController@contact');
Route::get('/archives', 'PagesController@archives');
Route::get('/publication/article-detials/{id}', 'PagesController@viewarticle');
Route::get('/volume/volume-list', 'PagesController@volumelist');
Route::get('/issue/issue-list/{id}', 'PagesController@issuelist');
Route::get('/publication/issue/article-list/{id}', 'PagesController@articlelist');
Route::get('/search', 'PagesController@search');
Route::get('/home-search', 'PagesController@homesearch');




Route::get('/writer/submit-article', 'WriterController@submitarticle');
Route::get('/writer/profile', 'WriterController@profile');
Route::patch('/writer/passwordupdate/{id}', 'WriterController@passwordupdate');
Route::patch('/writer/profileupdate/{id}', 'WriterController@profileupdate');




Route::get('/admin', 'AdminController@dashboard');
Route::get('/admin/submitted-article', 'AdminController@submitted');
Route::get('/admin/create-volume', 'AdminController@volumecreate');
Route::get('/admin/publication', 'AdminController@publication');
Route::get('/admin/publication-view', 'AdminController@viewpublication');
Route::get('/admin/article-published', 'AdminController@published');
Route::get('/admin/contact-mail', 'AdminController@contact');
Route::get('/admin/contact-read', 'AdminController@contactread');
Route::get('/admin/contact-trash', 'AdminController@contacttrash');
Route::get('/admin/registered-users', 'AdminController@registered');
Route::get('/admin/send-email/{id}', 'AdminController@sendmail');
Route::post('/admin/confirmation', 'AdminController@emailconfirmation');
Route::get('/admin/news-upload', 'AdminController@newsupload');
Route::get('/admin/news-list', 'AdminController@newslist');
Route::get('/admin/events-upload', 'AdminController@eventsupload');
Route::get('/admin/events-list', 'AdminController@eventslist');
Route::post('/manual', 'AdminController@storearticle');
Route::get('/admin/conference2019', 'AdminController@viewconference');
Route::get('/admin/conference-send-email/{id}', 'AdminController@conferenceemail');
Route::post('/admin/sendmailconference', 'AdminController@mailingconference');


// Route::patch('/admin/message-control/{id}', 'AdminController@messagecontrol'); not working(Read Message)



Route::resource('article', 'ArticleController');
Route::resource('volume', 'VolumeController');
Route::resource('issue', 'IssueController');
Route::resource('contacts', 'ContactController');
Route::resource('blog', 'BlogController');
Route::resource('event', 'EventController');
Route::resource('conference', 'ConferenceController');
Route::resource('license', 'LicensingController');
Route::resource('subscription', 'SubscriptionController');
Route::resource('mregister', 'MemberRegistrationController');
Route::resource('academic', 'AcademicQualificationController');
Route::resource('sponser', 'SponserRefereeController');
Route::resource('payment', 'PaymentController');
Route::resource('passport', 'PassportMemberController');
Route::resource('employment', 'EmploymentController');
Route::resource('training', 'TrainingController');
Route::resource('summary', 'SummaryController');



Route::group(['prefix' => 'state'], function () {
Route::resource('exestate', 'StateExecutivesController');
Route::resource('stagallery', 'StateGalleryController');
Route::resource('staslider', 'StateSliderController');
Route::resource('staevent', 'StateEventController');
Route::resource('stateinfo', 'StateInfoController');
});



Route::group(['prefix' => 'ngo'], function () {
Route::get('/', 'NgoController@index');
Route::resource('galleryngo', 'GalleryngoController');
Route::resource('eventngo', 'EventngoController');
Route::resource('infongo', 'InfongoController');
Route::resource('sliderngo', 'SliderngoController');
Route::resource('newsngo', 'NewsngoController');
Route::resource('aboutngo', 'AboutngoController');
});





Auth::routes();

Route::get('/member', 'MembershipAdminController@index');
Route::get('/membership/member-send-email/{id}', 'MembershipAdminController@loademail');
Route::get('/membership/admin/membership-registration', 'MembershipAdminController@membershipreg');
Route::get('/membership/admin/licensing-registration', 'MembershipAdminController@licensing');
Route::get('/membership/admin/licensing-registration/view/{id}', 'MembershipAdminController@viewlicensing');
Route::get('/membership/admin/membership-registration/view/{id}', 'MembershipAdminController@viewmembership');
Route::get('/membership/downloadpdf/{id}', 'MembershipAdminController@downloadpdf');
Route::get('/generate/downloadpdf/{id}', 'MembershipAdminController@registerpdf');
Route::post('/membersend/email', 'MembershipAdminController@sendmailing');
Route::get('/membership/subscription', 'MembershipAdminController@subscription');



Route::get('/membership/general-information', 'MembershipController@index');
Route::get('/membership/academic-qualification', 'MembershipController@academic');
Route::get('/membership/professional-qualification', 'MembershipController@professional');
Route::get('/membership/employment-history', 'MembershipController@history');
Route::get('/membership/referee', 'MembershipController@referee');
Route::get('/membership/payment', 'MembershipController@payment');
Route::get('/membership/passport-photograph', 'MembershipController@photograph');
Route::get('/membership/registration-summary', 'MembershipController@summary');
Route::get('/congratulations/result', 'MembershipController@congrats');


// Auth::routes(['verify' => true]);



    
    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');
    Route::get('/register/member', 'Auth\RegisterController@showMemberRegisterForm');
    Route::get('/register/state', 'MembershipAdminController@showStateRegisterForm');
    Route::get('/register/ngo', 'MembershipAdminController@showNgoRegisterForm');
    Route::get('/login/member', 'Auth\LoginController@showMemberLoginForm');
    Route::get('/login/state', 'Auth\LoginController@showStateLoginForm');
     Route::get('/login/ngo', 'Auth\LoginController@showNgoLoginForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/writer', 'Auth\RegisterController@createWriter');
    Route::post('/register/member', 'Auth\RegisterController@createMember');
    Route::post('/register/state', 'MembershipAdminController@createState');
    Route::post('/register/ngo', 'MembershipAdminController@createNgo');
    Route::post('/login/member', 'Auth\LoginController@memberLogin');
     Route::post('/login/state', 'Auth\LoginController@stateLogin');
     Route::post('/login/ngo', 'Auth\LoginController@ngoLogin');
    // Route::view('/home', 'home')->middleware('auth');
    // Route::view('/admin', 'admin');
    // Route::view('/writer', 'writer');
