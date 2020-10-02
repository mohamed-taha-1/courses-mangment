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
<form action="/students/submit" method="post">
     @csrf
    <h1 style="color:blue; text-align: center;">  Add   Student  </h1>

    <div class="form-group">
          <input type="text" class="form-control" placeholder="course name "  name="course_name">
          <br>  

       
          <input type="number" class="form-control" placeholder="student ID"  name="student_id">
          <br>

        
          <input type="number" class="form-control" placeholder="course grade "  name="course_grade">
          <br>
          <button type="submit" class="form-control" class="btn btn-primary  ">Submit</button>
</div>


</form>

</body>
</html>




