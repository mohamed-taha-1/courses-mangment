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
        </style>
    </head>
    <body class="antialiased">
       <div>
            <h1 class="main-text">

                welcome to  courses managment system 
            </h1>
            <a href="{{ url('courses') }}" class="btn btn-xs btn-info pull-right">
                     <button>
                           add  new course
                      </button>
              </a>
                     <!-- <div class="form-group row mb-0">
                         <div class="col-md-6 offset-md-4">
                             <button type="submit" class="btn btn-primary">
                                Add New Course
                             </button>
                         </div>
                    </div> -->
        </div>
    </body>
</html>
