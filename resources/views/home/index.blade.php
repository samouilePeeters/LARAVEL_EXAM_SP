 @extends('template.index')

 @section('title')
   Home
 @endsection

 @section('content')

  
  @include('works.home_slider', ['works' =>\App\Models\Work::orderBy('created_at', 'DESC')->take(4)->where('inslider', 1)->get()])

  
  @include('works.home_index', ['works' =>\App\Models\Work::orderBy('created_at', 'DESC')->take(6)->get()])

  <hr>

  @include('posts.news')

 @endsection