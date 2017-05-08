<!DOCTYPE html>
<html lang="en">
<head>
  <title>ZEN CTM - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {!! Html::style("/vendor/twbs/bootstrap/dist/css/bootstrap.css") !!}
  {!! Html::style("/assets/css/mycss.css") !!}

  {!! Html::script("/vendor/components/jquery/jquery.js") !!}
  {!! Html::script("/vendor/twbs/bootstrap/dist/js/bootstrap.js") !!}

</head>
<body>

@include('components.navigation_top')
<div class="container ">
	<div class="body">
		<h1>Assign</h1>
		<p>A navigation bar is a navigation header that is placed at the top of the page.</p>
		
		<div class="container">
      @yield('content')
    </div>
  		
	</div>
</div>
@include('components.footer')
</body>
</html>