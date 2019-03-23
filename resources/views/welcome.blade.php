<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Topics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /*Loading*/
            /* Absolute Center Spinner */
            .loading {
              position: fixed;
              z-index: 999;
              height: 2em;
              width: 2em;
              overflow: visible;
              margin: auto;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
            }

            /* Transparent Overlay */
            .loading:before {
              content: '';
              display: block;
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0,0,0,0.3);
            }

            /* :not(:required) hides these rules from IE9 and below */
            .loading:not(:required) {
              /* hide "loading..." text */
              font: 0/0 a;
              color: transparent;
              text-shadow: none;
              background-color: transparent;
              border: 0;
            }

            .loading:not(:required):after {
              content: '';
              display: block;
              font-size: 10px;
              width: 1em;
              height: 1em;
              margin-top: -0.5em;
              -webkit-animation: spinner 1500ms infinite linear;
              -moz-animation: spinner 1500ms infinite linear;
              -ms-animation: spinner 1500ms infinite linear;
              -o-animation: spinner 1500ms infinite linear;
              animation: spinner 1500ms infinite linear;
              border-radius: 0.5em;
              -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
              box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
            }

            /* Animation */

            @-webkit-keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @-moz-keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @-o-keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            @keyframes spinner {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
              }
            }
            /*End Loading*/

            /*alert*/
            #note {
                position: absolute;
                z-index: 101;
                top: 0;
                left: 0;
                right: 0;
                background: #fde073;
                text-align: center;
                line-height: 2.5;
                overflow: hidden; 
                -webkit-box-shadow: 0 0 5px black;
                -moz-box-shadow:    0 0 5px black;
                box-shadow:         0 0 5px black;
            }

            @-webkit-keyframes slideDown {
                0%, 100% { -webkit-transform: translateY(-50px); }
                10%, 90% { -webkit-transform: translateY(0px); }
            }
            @-moz-keyframes slideDown {
                0%, 100% { -moz-transform: translateY(-50px); }
                10%, 90% { -moz-transform: translateY(0px); }
            }
            .cssanimations.csstransforms #note {
                -webkit-transform: translateY(-50px);
                -webkit-animation: slideDown 2.5s 1.0s 1 ease forwards;
                -moz-transform:    translateY(-50px);
                -moz-animation:    slideDown 2.5s 1.0s 1 ease forwards;
            }
            .cssanimations.csstransforms #close {
              display: none;
            }
            /*end alert*/
        </style>
    </head>
    <body>
        <div id="loading" class="loading">Loading&#8230;</div>
        <div id="note">
            <span id="txtalert">Welcome user!</span> <a id="close" style="cursor: pointer;">[close]</a>
        </div>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" style="min-width: 800px">
                <div class="title m-b-md">
                    Topics
                </div>

                <textarea style="width: 90%; text-align: left;" placeholder="Put your topic here" id="input-topic" maxlength="255"></textarea>
                <br/>
                <button id="btn-submit" style="padding: 8px">Submit</button>
                <br/><hr style="width: 90%"/>

                <div id="viewer" style="background-color: #F0F0F0; max-height: 200px;overflow-y:auto;text-align:left;padding-left: 5px;" >
                    Loading...
                </div>


                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

  <script>
    function makeid(length) {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (var i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }

    var theusername = "User";

    if (localStorage.getItem("username") != null && localStorage.getItem("username") != '') {
        theusername = localStorage.getItem("username");
    } else {
        theusername = "User_"+makeid(5);
        localStorage.setItem("username", theusername);
    }

    //start alert
    close = document.getElementById("close");
    note = document.getElementById("note");
    close.addEventListener('click', function() {
        note.style.display = 'none';
    }, false);
    setTimeout(function(){ note.style.display = 'none'; }, 4000);
    // end alert

    function add_item(data, index) {
        // console.log(data, index);
        $("div#viewer").append("<div style=\"width: 100%;padding:10px;text-align:left\">");
        $("div#viewer").append(data.content);
        $("div#viewer").append("<br/><font size=\"1.8\">Created at: "+data.created_at.substring(0, 10)+"</font>");
        $("div#viewer").append("<div style=\"width: 100%;text-align:right\"> <a class=\"voteup upfortopic"+data.id+" \" href=\"#\" data-id=\""+data.id+"\">vote up</a> | <a class=\"votedown downfortopic"+data.id+"\" href=\"#\" data-id=\""+data.id+"\" >vote down</a> </div>");
        $("div#viewer").append("</div>");
    }

    function load_topics() {
        $("div#loading").show();
        axios.get('/api/topics')
        .then(function (response) {
            $("div#viewer").html('');
            response.data.data.forEach(function(data, index){
                add_item(data, index);
            });

            // actions
            $('a.votedown').unbind('click').click(function(){ // down
                axios({
                  method: 'post',
                  url: '/api/topics/'+$(this).data('id')+'/votes',
                  data: {
                    username: theusername,
                    status: 'down'
                  }
                }).then(function () {
                    load_topics();
                });
            });

            $('a.voteup').unbind('click').click(function(){ // up
                axios({
                  method: 'post',
                  url: '/api/topics/'+$(this).data('id')+'/votes',
                  data: {
                    username: theusername,
                    status: 'up'
                  }
                }).then(function () {
                    load_topics();
                });
            });
            
        })
        .catch(function (error) {
            console.log(error);
        })
        .then(function () {

            //load votes
            axios.get('/api/votes/my_votes/'+theusername)
            .then(function (response) {
                response.data.data.forEach(function(data, index){
                    if (theusername == data.username ) {

                        if(data.status== 'up') {
                            // alert("a.upfortopic"+data.id);
                            $("a.upfortopic"+data.topic_id).css('color', 'green');
                            $("a.upfortopic"+data.topic_id).html("👍 " + $("a.upfortopic"+data.topic_id).html())
                        } 

                        if(data.status== 'down') {
                            $("a.downfortopic"+data.topic_id).css('color', 'green');
                            $("a.downfortopic"+data.topic_id).html($("a.downfortopic"+data.topic_id).html() + " 👎");
                        }
                    }
                });
                
            })
            .catch(function (error) {
                console.log(error);
            })
            .then(function () {
                $("div#loading").hide();
                //load vote
            });
        });

    }

    function save(topic) {
        // Send a POST request
        axios({
          method: 'post',
          url: '/api/topics',
          data: {
            username: theusername,
            content: topic
          }
        }).then(function () {
            $("div#loading").hide();
            load_topics();
            $("textarea#input-topic").val('');
        });
    }

    $( document ).ready(function() {
        var btnsubmit = $("#btn-submit");
        var topic = $("textarea#input-topic");

        btnsubmit.click(function(){
            $("div#loading").show();
            save(topic.val());
        });

        load_topics();

        console.log( "app ready!" );
    });
  </script>
</html>
