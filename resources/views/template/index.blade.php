<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

@include('template.partials._head')

</head>

<body>
        

@include('template.partials._header')


@include('template.partials._slider')

@include('works.index')





		

<hr>

<!-- Our Articles -->
<div class="section">
  <div class="container">
    <div class="row">
      
    @include('posts.index')


      <!-- Latest News FB -->
      <div class="col-sm-6 latest-news">
        <h2>Lastest FaceBook/Twitter News</h2>
        <div class="row">
          <div class="col-sm-12">
            <div class="caption"><a href="full-width.html">Donec elementum mi vitae enim fermentum lobortis.</a></div>
            <div class="date">16 May 2013 </div>
            <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <a href="full-width.html">Read more...</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="caption"><a href="full-width.html">In hac habitasse platea dictumst.</a></div>
            <div class="date">14 May 2013 </div>
            <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="full-width.html">Read more...</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="caption"><a href="full-width.html"> Nam condimentum laoreet sagittis.</a></div>
            <div class="date">14 May 2013 </div>
            <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="full-width.html">Read more...</a></div>
          </div>
        </div>
      </div>
      <!-- End Featured News -->
    </div>
  </div>
</div>

	    <!-- Footer -->
	    @include('template.partials._footer')

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../resources/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="resources/js/bootstrap.min.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="../resources/js/jquery.easing.min.js"></script>
		<script src="../resources/js/scrolling-nav.js"></script>

    </body>
</html>
