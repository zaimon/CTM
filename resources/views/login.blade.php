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

  <style>
    body{background: #eee url({{ asset('/assets/img/sativa.png') }});}
html,body{
    position: relative;
    height: 100%;
}

.login-container{
  display: none;
    position: relative;
    /*width: 300px;*/
    /*margin: 80px auto;*/
    /*padding:  40px;*/
    padding: 5% 15% 10%;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: fixed;
    width: 100%;
    top: 0px;
    left: 0;
    color: #fff;
}

#output:hover{ cursor: pointer }

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 150px;height: 150px;
    margin: 10px auto 30px;
    border-radius: 100%;
    padding:10px;
    border: 3px solid #aaa;
    background-size: cover;
    background-image :;
}
.avatar img{
  height: 100%;
  width: 100%;
}

.form-box input:not([type="checkbox"]){
    width: 100%;
    padding: 10px;
    /* text-align: center; */
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}
.form-box input[type="checkbox"]{
    margin-top:15px;
    float: left;
}
.lbl_remember{
  float: left;
  line-height: 3;
  margin-left: 10px
}
.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}


.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}


.my-valid-banger { border-left:5px solid red !important;margin-left: -5px}
 
@media screen and (min-width: 376px) and (max-width: 667px){
  .login-container{padding:20px ;width: 80%;margin-left:10%;}
  .avatar{margin-top: 5px;margin-bottom: 15px; width: 100px; height: 100px;}
}

@media screen and (min-width: 320px) and (max-width: 375px){
  .login-container{padding:10px;}
}
  </style>
</head>
<body>

  <div class="container">
    
    <div class="login-container col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 ">
        
      @if(Session::has('message'))
      <div id="output" class="alert alert-danger animated fadeInUp" role="alert">
        {{Session::get('message')}}
      </div>
      @endif

      <div class="avatar"><img src="{{ asset('/assets/img/brand.png') }}" alt=""></div>
      <div class="form-box">
          {{ Form::open(array('url' => 'loginProcess')) }}
              <input name="username" type="text" placeholder="Username" class="{!!$errors->first('username', 'my-valid-banger')!!}" autocomplete="off">
              {{-- {!!$errors->first('username', '<span class="control-label color-red" for="username">*:message</span>')!!} --}}
              <input name="password" type="password" placeholder="Password" class="{!!$errors->first('password', 'my-valid-banger')!!}" autocomplete="off">
              {{-- {!!$errors->first('password', '<span class="control-label color-red" for="password">*:message</span>')!!} --}}
              <input name="remember" type="checkbox" value="Remember Me"><span class="lbl_remember">Remember Me</span>
              <button class="btn btn-info btn-block login" type="submit">Login</button>
          {{ Form::close() }}
      </div>
    </div>
        
  </div> 
  <script>
    $(function(){

      

      /*var textfield = $("input[name=user]");
      $('button[type="submit"]').click(function(e) {
        e.preventDefault();
        //little validation just to check username
        if (textfield.val() != "") {
            //$("body").scrollTo("#output");
            $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
            $("#output").removeClass(' alert-danger');
            $("input").css({
            "height":"0",
            "padding":"0",
            "margin":"0",
            "opacity":"0"
            });

            //change button text 
            $('button[type="submit"]').html("continue")
            .removeClass("btn-info")
            .addClass("btn-default").click(function(){
            $("input").css({
            "height":"auto",
            "padding":"10px",
            "opacity":"1"
            }).val("");
            });
            
            
        } else {
            //remove success mesage replaced with error message
          // $("#output").removeClass(' alert alert-success');
          $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
        }
          //console.log(textfield.val());
      });*/

      setCenter();
      
      $('#output').click(function(){ $(this).removeClass("fadeInUp").fadeOut()});
      $('.my-valid-banger').keydown(function(){
        $(this).removeClass('my-valid-banger');
      });
      $(window).resize(function(){setCenter();});

      function setCenter(){
        var w =$(window).height();
        var b =parseInt($('.login-container').css("height"));

        var pt=parseInt($('.login-container').css("padding-top"));
        var pb=parseInt($('.login-container').css("padding-bottom"));

        console.log('w -> '+w);
        console.log('b -> '+b);


        if(b>=w){
          t =0; 
        }else if(b<w){
          t = (w-b)/2;
        }

        $('.login-container').css('margin-top',t).fadeIn();

      }
   });

  </script>
</body>
</html>