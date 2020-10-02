<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<!--
    Create page to save courses with its details (instructor, room, price, parent course,
     students, and grades of course, start date, days of course, end date).
  -->
<form action="/instructors/submit" method="post">
     @csrf
     <h1 style="color:blue; text-align: center;">  Add   innstructor Information  </h1>

    <div class="form-group">
          <input type="text" class="form-control" placeholder="instructor  name "  name="instructor_name">
          <br>  
          <input type="text" class="form-control" placeholder="course one  name "  name="courseOne_name">
          <br>  
          <input type="text" class="form-control" placeholder="coursee two  name "  name="courseTow_name">
          <br>  

          
          <button type="submit" class="form-control" class="btn btn-primary  ">Submit</button>
</div>


</form>

</body>
</html>




