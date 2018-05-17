<?php 
namespace App\Http\Controllers;
	
use Validator;
use Redirect;
use Request;
use Session;
use Auth;
use Image;
class ApplyController extends Controller 
{

		public function upload() {
		  // getting all of the post data
		  $file = array('image' => Request::file('image'));
		  // setting up rules
		  $rules = array('image' => 'mimes:jpeg,jpg|required|max:3000' ,); //mimes:jpeg,bmp,png and for max size max:10000
		  // doing the validation, passing post data, rules and the messages
		  $validator = Validator::make($file, $rules);
		  if ($validator->fails()) {
		    // send back to the page with the input data and errors
		    return Redirect::to('dashboard')->withInput()->withErrors($validator);
		  }
		  else {
		  	$user=Auth::user();
		    // checking file is valid.
		    if (Request::file('image')->isValid()) {
		      $destinationPath = 'images/profile'; // upload path
		      $extension = Request::file('image')->getClientOriginalExtension(); // getting image extension
		      $fileName = $user->id.'.'.$extension; // renameing image
		       Image::make(Request::file('image'))->resize(300,300);
		      Request::file('image')->move($destinationPath, $fileName); // uploading file to given path

		       
		                $user->profileimg= $fileName;
		                $user->save();
		      // sending back with message
		      Session::flash('success', 'Upload successfully'); 
		      return Redirect::to('dashboard');
		    }
		    else {
		      // sending back with error message.
		      Session::flash('error', 'uploaded file is not valid');
		      return Redirect::to('dashboard');
		    }
		  }
		}

		public function logoload() {
		  // getting all of the post data
		  $file = array('image' => Request::file('image'));
		  // setting up rules
		  $rules = array('image' => 'mimes:png|required|max:1000' ,); //mimes:jpeg,bmp,png and for max size max:10000
		  // doing the validation, passing post data, rules and the messages
		  $validator = Validator::make($file, $rules);
		  if ($validator->fails()) {
		    // send back to the page with the input data and errors
		    return Redirect::to('setting')->withInput()->withErrors($validator);
		  }
		  else {
		  	$user=Auth::user();
		    // checking file is valid.
		    if (Request::file('image')->isValid()) {
		      $destinationPath = 'images/logo'; // upload path
		      $extension = Request::file('image')->getClientOriginalExtension(); // getting image extension
		      $fileName = $user->id.'.'.$extension; // renameing image
		       Image::make(Request::file('image'))->resize(150,80);
		      Request::file('image')->move($destinationPath, $fileName); // uploading file to given path

		       
		                $user->logo= $fileName;
		                $user->save();
		      // sending back with message
		      Session::flash('success', 'Upload successfully'); 
		      return Redirect::to('setting');
		    }
		    else {
		      // sending back with error message.
		      Session::flash('error', 'uploaded file is not valid');
		      return Redirect::to('setting');
		    }
		  }
		}
}