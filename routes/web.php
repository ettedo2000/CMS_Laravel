<?php
use App\Post;


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

//Route::resource('posts', 'PostController');



/*
 |--------------------------------------------------------------------------
 |Database Raw SQL Querie
 |--------------------------------------------------------------------------
 */

/*
 * Insert data into Database

   Route::get('/insert', function(){

	DB::insert('Insert INTO posts(title,content) values(?,?)',
		['PHP with Laravel','afdfdfdfds dfdsfds sdf dsf dfd fds fdfdsf']);



});*/

/*
 * Select from Database


Route::get('/read', function(){

	//$results = DB::select('Select * FROM posts WHERE id = ?', [1]);
	$results = DB::select('Select * FROM posts ');

	//foreach($results as $r){
	//	return $r->title;
	//}

	$title = '';
	foreach($results as $r){
		$title .= $r->title.'<br/>';

	}
	return $title;
});* */


/*
 * Update on Database


Route::get('/update', function(){

	$updated = DB::update('UPDATE posts set title = "Update title" WHERE id =?', [1]);

	return $updated;
}); * */


/*
 * Delete on Database


Route::get('/delete', function(){

	$delete = DB::delete('Delete FROM posts WHERE id =?', [1]);

	return $delete;
}); * */


/*
 |-----------------------------------------------------------------------------
 | Eloquent ORM
 |-----------------------------------------------------------------------------
 * */


/*Route::get('/read', function(){

	$post = Post::all();

	foreach($post as $p){
		return $p->title;
	}

});

Route::get('/find', function(){

	$post = Post::find(3);
	//$post = Post::all();

	return $post->title;

});

Route::get('/findwhere', function(){

	$post = Post::where('id',3)->orderBy('id','desc')->take(1)->get();

	return $post;

});

Route::get('/findmore', function(){

	$post = Post::findOrFail(3);
	//$post = Post::where('user_count', '<', 50)->firstOrFail();

	return $post;

});*/



/*
 * Insert with Eloquent ORM
 *
 * Route::get('/basicinsert', function(){

	$post = new Post;

	$post->title = "new Database column title";
	$post->content = "New content for this column Insert";

	$post->save();

});*/

/*
 * Updated with Eloquent ORM a
 *
Route::get('/basicinsert', function(){

	$post = Post::find(3);

	$post->title = "update Database column title";
	$post->content = "Content for this column Update";

	$post->save();

});*/


/*
 * Eloquent ORM with Array this also has a dependency on the
 * Post Module php file, where parameters need to be set.
 * */

Route::get('/create', function(){

	Post::create(['title'=>'PHP create method', 'content'=>'Another created with Array']);


});

Route::get('/update', function(){

	Post::where('id', 2)->where('is_admin',0)->update(['title'=>'PHP update method', 'content'=>'Another updateded contnet with Array']);


});

Route::get('/delete', function(){

	Post::destroy([3,4]);
	Post::where('is_admin',0)->delete();

});





/*
 |-----------------------------------------------------------------------------
 | Application Routes
 |-----------------------------------------------------------------------------
 * */

/*Route::get('/contact', 'PostController@contact');
Route::get('post/{id}/{name}', 'PostController@show_post');*/


/*Route::get('/post/{id}', 'PostController@index');

Route::get('/', function () {
	return view('welcome');
});

Route::get('/post/{id}', function ($id) {
	return 'this is ID '.$id;

});

Route::get('admin/post/example', array('as'=>'admin.home', function () {
	$url = route('admin.home');

	return 'this is '. $url;

}));*/