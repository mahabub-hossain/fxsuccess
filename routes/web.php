<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use duncan3dc\Laravel\Dusk;
 use App\Advertisement;
 use App\AdvertisementPage;
 use App\Category;
 use App\Brokerreview;
 use App\Article;
 use App\Analysis;
 use App\Course;
 
 //use App\Http\Controllers\Frontend\Goutte;
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
// Route::get('/', function() {

//     $crawler = Goutte::request('GET', 'http://fxtutor.net/');

//     $crawler->filter('.carouselTicker__list ')->each(function ($node) {

//       $ticker = ($node->html());
//       return $ticker;

//     });
    
     
//                 $cat_Courses = DB::table('courses')
//                 ->select('courses.id','courses.title as coursetitle','courses.cat_id','categories.id as categoryid','categories.title as categorytitle')
//                 ->leftJoin('categories','courses.cat_id','=','categories.id')
//                 ->get()->toArray(); 

//             $newArr = [];
//             foreach($cat_Courses as $course){
//             $newArr[$course->categorytitle][$course->id]['title'] = $course->coursetitle;
//             $newArr[$course->categorytitle][$course->id]['id'] = $course->id;
//             }
//             $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
//             $show_popular = Analysis::popularDay()->take(4)->get();
//             $all_articles = Article::all();
//             $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
//             $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
//             $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();
//             $left_advertisement = Advertisement::where('position','=','Head->Bottom->Left')->orderBy('id','DESC')->take(3)->get()->toArray();
//             $first_img = array_shift($left_advertisement);

//             return view('Front_End.Front_Page1',compact('newArr','recent_analysis','show_popular','all_articles','first_broker','second_broker','third_broker','first_img','left_advertisement','ticker'));
// });

//Route::resource('scrape','WebScraperController');
//Frontpart
Route::resource('/','Frontend\FxHomeController');
Route::resource('fxarticle','Frontend\FrontArticleController');
Route::resource('fxquestion','Frontend\FxQuestionController');
//Route::resource('brokerreviewresource','Frontend\BrokerReviewController');
Route::get('allbrokers','Frontend\BrokerReviewController@index');
Route::get('summary/{id}','Frontend\BrokerReviewController@summarydata');

Route::post('store-broker','Frontend\BrokerReviewController@store');
Route::get('/show-broker/{id}','Frontend\BrokerReviewController@show');
//Route::get('/brokerexpand/','Frontend\BrokerReviewController@create');




Route::get('/brokerlist','Frontend\BrokerReviewController@brokerlist');
Route::get('/brokerlist/{id}','Frontend\BrokerReviewController@changestatus');
Route::get('/brokerlistdeact/{id}','Frontend\BrokerReviewController@deactivebroker');
Route::get('/showbroker/{id}','Frontend\BrokerReviewController@showbroker');
Route::patch('/updatebroker/{id}','Frontend\BrokerReviewController@updatebroker');
Route::delete('deletebroker/{id}','Frontend\BrokerReviewController@destroy');
Route::post('softdeletebroker/{id}','Frontend\BrokerReviewController@softdelete');
Route::get('Trash/','Frontend\BrokerReviewController@showtrash');
Route::post('restore/{id}','Frontend\BrokerReviewController@restorebroker');

Route::get('/addreview/{id}','Frontend\BrokerReviewController@reviewadd');
Route::post('/storereview/{id}','Frontend\BrokerReviewController@reviewstore');

Route::get('/addprocon/{id}','Frontend\BrokerReviewController@proconadd');
Route::post('/storeprocon/{id}','Frontend\BrokerReviewController@storeprocon');

Route::get('/addvideo/{id}','Frontend\BrokerReviewController@videoadd');
Route::post('/storevideo/{id}','Frontend\BrokerReviewController@videostoe');
Route::get('/editvideo/{id}','Frontend\BrokerReviewController@editvideo');
Route::post('/videoupdate/{id}','Frontend\BrokerReviewController@updatevideo');
Route::get('/updaterank/{id}/{rank}','Frontend\BrokerReviewController@rankupdate');


Route::get('/singlecourse/{crsid}','Frontend\FxHomeController@coursebyid');
Route::get('/test','Frontend\TestController@index');
Route::get('/test/{id}','Frontend\TestController@show');
Route::get('/fxanaysis','Frontend\FrontAnalysisController@index');
Route::get('/fxanaysis/{id}','Frontend\FrontAnalysisController@show');
Route::get('/contact/','Frontend\ContactController@index');
Route::post('/contact/','Frontend\ContactController@store');

Route::get('/social/facebook/', 'Frontend\SocialController@redirectToProvider');
Route::get('/social/facebook/callback/', 'Frontend\SocialController@handleProviderCallback');
Route::post('/socialstore', 'Frontend\SocialController@store');
Route::post('/social/reviewstore/', 'Frontend\SocialController@storereview');
Route::post('/like/{id}/act', 'Frontend\SocialController@actOnChirp');
Route::get('/articlelike/{id}/act', 'Frontend\SocialController@articleactOnChirp');
Route::get('/analysislike/{id}/act', 'Frontend\SocialController@analysisactOnChirp');
Route::get('/analysiseditcmt/{id}', 'Frontend\SocialController@anacmtedit');
Route::patch('/updateanacmt', 'Frontend\SocialController@anacmtupdate');
Route::get('/articleeditcmt/{id}', 'Frontend\SocialController@artcmtedit');
Route::patch('/updateartcmt', 'Frontend\SocialController@artcmtupdate');
Route::get('/revieweditcmt/{id}','Frontend\SocialController@editreview');
Route::patch('/updatereview', 'Frontend\SocialController@reviewupdate');

Route::post('/social/storearticle/', 'Frontend\SocialController@storearticle');
Route::get('/social/linkedin/', 'Frontend\SociallinkController@redirectToLinkedin');
Route::get('/social/linkedin/callback/', 'Frontend\SociallinkController@handleLinkedinCallback');


Auth::routes();
//Admin Pannel
Route::get('/admin-panel', 'HomeController@index')->name('home');
Route::resource('category','Admin\CategoryController');
Route::resource('question','Admin\QuestionController');
Route::resource('course','Admin\CourseController');
Route::post('softdeletecourse/{id}','Admin\CourseController@softdelete');
Route::post('restorecourse/{id}','Admin\CourseController@restorecourse');
Route::get('coursetrash/','Admin\CourseController@showtrash');
Route::resource('article','Admin\ArticleController');
Route::post('softdelarticle/{id}','Admin\ArticleController@softdelete');
Route::get('articletrash','Admin\ArticleController@showtrash');
Route::post('restorearticle/{id}','Admin\ArticleController@restorearticle');
Route::resource('analysis','Admin\AnalysisController');
Route::post('softdelanalysis/{id}','Admin\AnalysisController@softdelete');
Route::post('restoreanalysis/{id}','Admin\AnalysisController@restoreanalysis');
Route::get('analysistrash','Admin\AnalysisController@showtrash');
Route::get('/catbyid/{id}', 'Admin\CategoryController@edit');
Route::resource('message','Admin\MessageController');
Route::get('/singlemsg/{id}','Admin\MessageController@show');
Route::resource('Press_Release','Admin\RecentPressReleaseController');
Route::resource('advertisement','Admin\AdvertisementController');
Route::get('themeoption/{id}','Admin\QuestionController@changetheme');

Route::resource('fxsignal','Admin\ForexSignalController');
Route::resource('currency','Admin\CurrencypairController');
Route::post('/storecurrency','Admin\CurrencypairController@store');
Route::post('/updateItem','Admin\CurrencypairController@itemUpdate');
Route::post('/deleteItem','Admin\CurrencypairController@destroy');
Route::resource('signalcat','Admin\SignalCatController');
Route::post ( '/addItem', 'Admin\SignalCatController@store' );
Route::post ( '/editItem', 'Admin\SignalCatController@editItem');
Route::post ( '/deleteItem', 'Admin\SignalCatController@deleteItem');

