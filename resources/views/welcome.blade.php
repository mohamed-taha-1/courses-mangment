<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
        <style>
            body {
                font-family: 'Nunito';
            }

            .main-text{
                text-aligne:center;
                color:black;
            }

            .elements{
                text-align: center;
                color:blude;
            }

            
        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            }

            .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            }

                .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                .button:hover span {
                padding-right: 25px;
                }

                .button:hover span:after {
                    opacity: 1;
                    right: 0;
                }

                .btn{
                    display:inlin-block;
                }
        </style>
    </head>
    <body class="antialiased">
       <div  class="elements">
            <h1 class="main-text">

                welcome to  courses managment system 
            </h1>
            <div>
              <a href="{{ url('courses') }}" class="btn btn-xs btn-info pull-right">
                     <button class="button btn">
                     <span>Add  new Course</span>
                           
                      </button>
              </a>
            </div>
       
            <div>
                        <a href="{{ url('student') }}" class="btn btn-xs btn-info pull-right">
                                <button class="button btn">
                                
                                    <span>  Add   Student  </span>
                                </button>
                        </a>
              </div>

              <div>
              
                        <a href="{{ url('instructor') }}" class="btn btn-xs btn-info pull-right">
                                <button class="button btn">
                                <span>Add  Instructor</span>
                                    
                                </button>
                        </a>
              
              </div>


        </div>
    </body>
</html>
