<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Slide;
use App\Team;
use App\Newsletter;
use TCG\Voyager\Models\Page;
use Mail;

class PagesController extends Controller
{
    public function home() {
      $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
      $slides = Slide::orderBy('order', 'asc')->where('status', '=', 'PUBLISHED')->get();

      return view('welcome')->withTestimonials($testimonials)->withSlides($slides);
   }
   public function contact() {
   	
   		return view('pages.contact');
   }
    public function pricing() {
   	
   		return view('pages.pricing');
   }
    public function productions() {
   	
   		return view('pages.productions');
   }
    public function about() {
   	  $members = Team::orderBy('order', 'asc')->get();
      
   		return view('pages.about')->withMembers($members);
   }
    public function searchDisplay() {
    
      return view('posts.search');
   }
    public function showPage(Request $request, $slug) {

      $page = Page::where('slug', '=', $slug)->firstOrFail();
 
      return view('pages.show')->withPage($page);
   }
    public function contactSubmit(Request $request) {

      $this->validate($request, [
          'name'      => 'required',
          'subject'   => 'required',
          'email'     => 'required|email',
          'message'   => 'required|min:20'
      ]);

      $data = [
        'name'          => $request->name,
        'subject'       => $request->subject,
        'email'         => $request->email,
        'message'       => $request->message
      ];

      $response = [
        'name'          => $request->name,
        'email'         => $request->email,
      ];

      Mail::send('emails.contact', $data, function($message) use ($data) {
          $message->from($data['email']);
          $message->to('pagapiou@gmail.com');
          $message->subject('Website contact form submission');
      });

      return response()->json($response);
  }

  public function newsletterSubmit(Request $request) {

      $this->validate($request, [
          'email' =>  'required|email',
      ]);

      $news = new Newsletter;
      $news->email = $request->email;
      $news->save();

      if($news->save()) {
          return response()->json([
              'message' =>  'Thank you for subscribing!',
          ], 200);
      } else {
          return response()->json([
              'message' =>  'An error occured. Please try again!',
          ], 500);
      }
  }
   
}
