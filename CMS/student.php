<?php
 include 'DBcon.php'; ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>collagte management system</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
 <body>
    <nav class="navbar navber-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="student_index.php">MEBIS</a>
        <button  class="navbar-toggle" type="button" date-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="university.php">University</a></li>
                <li class="nav-item"><a class="nav-link" href="student.php">student</a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php">profile</a></li>
            </ul>
         </div>
         <a class="navbar-brand"></a>
         <form method="post" action="login.php" class="form-inline">
             <button type="submit" name="log_out" class="btn btn-default btn-sm"><span class="glyphocon glyphicon-log-out">Log out</span></button>
             
         </form>
    </nav>  
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a  class="nav-link" id="pastcourese-tab" data-toggle="tab" href="#postcourse" aria-controls="pastcourse" aria-selected="false">Past Courses</a>
        </li>
        <li class="nav-item" id="course-tab" data-toggle="tab" href="#course" aria-controls="course" aria-selected="false">Courses</li>
        <li class="nav-item" id="exam-tab" data-toggle="tab" href="#exam" aria-controls="exam" aria-selected="false">Exam Results</li>
        <li class="nav-item" id="courseselection-tab" data-toggle="tab" href="#courseselection" aria-controls="courseselction" aria-selected="false">Course Selection</li>    
    </ul>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade" id="pastcourse" role="tabpanel" aria-labelledby="pastcourse-tab">
      
      <table class="table table-striped">
          <thead>
            <tr>
                <th scope="col">Course Name</th>
                <td scope="col">Grade</td>
            </tr>
          </thead>
        <tbody>
           <?php
           $cur_email = $_SESSION['email'];
           $query = "SELECT*FROM student WHERE email = '$cur_email'";
           $result = mysqli_query($con , $query);
           $row = mysqli_fetch_array($results);
           $st_id = $row['student_id'];
            
           $query2 = "SELECT * FROM student_past_courese WHERE student_id = '$st_id'";
           $results2 = mysqli_query($con , $query2);
           while ($row = mysqli_fetch_array($results2)) 
           {?>
           <tr>
               <td scope="row"><?php echo $row['course_name'] ?></td>
               <td scope="row"><?php echo $row['final_grade'] ?></td>
           </tr>
               
           <?php } ?>    
    </tbody>
 </table>
</div> 

<div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab">
   <table class="table table-striped">
       <thead>
        <tr>
       <th scope="col">Course Name</th>
       <th scope="col">ALTS</th>
       <th scope="col">Lecturer</th>
       <th scope="col">Course Type</th>   
       </tr>    
       </thead>
       <tbody>
           <?php
           $cur_email = $_SESSION['email'];
           $query = "SELECT * FROM student WHERE email = '$cur_email'";
           $results = mysqli_query($con , $query);
           $row = mysqli_fetch_array($results);
           $st_id = $row['student_id'];

           $query2 = "SELECT * FROM student_current_course WHERE student_id = '$st_id'";
            $results2 = mysqli_query($con , $query2);
            
            while ($row = mysqli_fetch_array($results2)) {
                $course = $row['course_name'];
                $query3 = "SELECT * FROM course WHERE course_name = '$course'";
                $row2 = mysqli_fetch_array($results3); ?>
                
                <tr>
                    <td scope= "row"><?php echo $row2['course_name'] ?></td>
                    <td scope="row"><?php echo $row2['AKTS'] ?></td>
                    <td scope="row"><?php echo $row2['lecturer'] ?></td>
                    <td scope="row"><?php echo $row2['course_type'] ?></td>                   
                </tr>
            <?php } ?>


       </tbody>
   </table> 
</div>
<div class="tab-pane fade" id="courseselection " role="tabpanel" aria-labellledby="coureseselection-tab">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Course Name</th>
            <th scope="col">AKTS</th>
             <th scope="col">Lecturer</th>
            <th scope="col">Course Type</th>
            <th scope="col">Status</th> 
            </tr>
        </thead>

        <?php
         $past_course_names = array();
         $selectable = array();
         $current_course_name = array();
         //$not_past_courses = array();
         //$not_current_courses = array();

         $candidate_courses = array();
         $cur_email = $_SESSION['email'];
         $query = "SELECT * FROM student WHERE email = '$cur_email'";
         $results = mysqli_query($con , $query);
         $row = mysqli_fetch_array($results);
         $st_id = $row['student_id'];


         $query = "SELECT * FROM student_past_courses WHERE student_id = '$st_id'";
         $results = mysqli_query($con , $query);
         
         while ($past_courses = mysqli_fetch_array($results)) {
             array_push($past_courses_name , $past_courses['course_name']);
         }

         $query = " SELECT * FROM  student_current_courses WHERE student_id = '$set_id'";
         $results = mysqli_query($con , $query);

         while ($curr_courses = mysqli_fetch_array($results)) {
            array_push($current_courses_names , $curr_courses['course_name']);
         }

         /*
                $query = "SELECT * FROM course ";
                $results = mysqli_query($db, $query);
                while($course = mysqli_fetch_array($results))
                {
                  $not_in_past=True;
                  foreach($past_course_names as $pastcourse)
                  {
                    if($pastcourse == $course['course_name'])
                    {
                      $not_in_past = False;
                    }
                  }
                  if($not_in_past == True)
                  {
                    array_push($not_past_courses, $course['course_name']);
                  }
                  $not_in_current=True;
                  foreach($current_courses as $current_course)
                  {
                    if($current_course == $course['course_name'])
                    {
                      $not_in_current = False;
                    }
                  }
                  if($not_in_current == True)
                  {
                    array_push($not_current_courses, $course['course_name']);
                  }
                }
                */

                /*
                  foreach($not_current_courses as $not_current_course )
                  {
                      $not_in = True;
                      foreach($not_past_courses as $not_past_course)
                      {
                          if($not_past_course == $not_current_course)
                          {
                              $not_in = False;
                          }
                          array_push($candidate_courses, $not_past_course);
                      }
                      if($not_in == True)
                      {
                        array_push($candidate_courses, $not_current_course);                        
                      }
                  }
                */


                $query = "SELECT * FROM course ";
                $results = mysqli_qeury($con , $query);

                while ($course = mysqli_fetch_array($results)) {
                    if (in_array($course['course_name'], $current_course_names)) {
                        continue;
                    }

                    if (in_array($course['course_name'], $past_curese_names)) {
                          continue;
                    }
                 if (in_array($course['prerequisite'], $past_course_names)) 
                 { ?>
                    <tr>
                        <td><?php echo $course['course_name']; ?></td>
                        <td><?php echo $course['AKTS']; ?></td>
                        <td><?php echo $course['lecturer']; ?></td>
                        <td><?php echo $course['course_type']; ?></td>
                        <td><?php ehco  ?></td>
                    </tr> 
                    <?php 
                      continue;
                 }

                 if ($course['prerequisite'] == 'NULL') 
                 { ?>
                    <tr>
                        <td><?php echo $course['course_name']; ?></td>
                        <td><?php echo $course['AKTS']; ?></td>
                        <td><?php echo $course['lecturer']; ?> </td>
                        <td><?php echo $course['course_type']; ?></td>
                        <td><?php echo $course['preewquisite']; ?></td>
                    </tr>
                    <?php 
                    continue;
                 }
                 
                }
          
?>


    </table>
    
</div>

</div>

 </body>
 </html>