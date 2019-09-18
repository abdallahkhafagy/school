<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Regular Tables - Tables are the backbone of almost all web applications.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Tables are the backbone of almost all web applications.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link href="/assets/css/main.css" rel="stylesheet"></head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/assets/css/style.css" type="text/css"  />
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      <div class="app-header header-shadow">
          <div class="app-header__logo">
              <div class="logo-src"></div>
              <div class="header__pane ml-auto">
                  <div>
                      <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                          <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                          </span>
                      </button>
                  </div>
              </div>
          </div>
          <div class="app-header__mobile-menu">
              <div>
                  <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                      <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                      </span>
                  </button>
              </div>
          </div>
          <div class="app-header__menu">
              <span>
                  <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                      <span class="btn-icon-wrapper">
                          <i class="fa fa-ellipsis-v fa-w-6"></i>
                      </span>
                  </button>
              </span>
          </div>    <div class="app-header__content">

              <div class="app-header-left">



                          </div>

          </div>
      </div>
               <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                                  <div class="row justify-content-center">



                            <div class="col-lg-9">

                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Students Grades Task</h5>

                                      <div class="input-group md-form form-sm form-1 pl-0">
                              <div class="input-group-prepend">
                                <span class="input-group-text cyan lighten-2" id="basic-text1">
                                  <i class="fa fa-search text-white"aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control my-0 py-1" id="search_field"type="text" placeholder="Search" aria-label="Search">
                            </div>
                            <br>
                                        <table class="mb-0 table table-dark">
                                            <thead>

                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th> Edit Grades</th>
                                            </tr>
                                            </thead>
                                            <tbody id="students_table">

                                              <?php
                                              $counter=1;

                                          foreach($students as $student){
                                          echo "<tr>
                                          <th scope='row'>$counter</th>
                                          <td>".$student["name"]."</td>
                                          <td> <button type='button' type='button' class='btn btn-info edit_student'sid='".$student["id"]."' >Edit</button></td>

                                          </tr>";
$counter++;
                                          }

                                               ?>


                                            </tbody>
                                        </table>
                                        <div class="row justify-content-center mt-30" style="margin-top:20px;">
                                          <nav aria-label="...">
  <ul class="pagination">

    <?php
    if($page+2>1){
echo '<li class="page-item ">
  <a class="page-link previous_link"page ="'.($page+1).'" href="'.($page+1).'" tabindex="-1">Previous</a>
</li>' ;

    }
    else{
      echo '<li class="page-item disabled">
        <a class="page-link previous_link" href="#" tabindex="-1">Previous</a>
      </li>';
    }
    $counter = 0;
    for($i=0;$i<=4;$i++){
      if($page+$i>0&&$page+$i<=ceil($total_rows/10)){
        if($i==2)
        echo '
          <li class="page-item active">
            <a class="page-link link_page"page="'.($page+$i).'" href="/ci/students/get_student/'.($page+$i).'">'.($page+$i).' <span class="sr-only">(current)</span></a>
          </li>';
        else {
          echo'     <li class="page-item"><a class="page-link link_page" page="'.($page+$i).'"href="/ci/students/get_student/'.($page+$i).'">'.($page+$i).'</a></li>
';

        }


      }
      else{
        $counter++;
      }
    }
    if($page+2<ceil($total_rows/10)){

echo '  <li class="page-item">
    <a class="page-link next_link" page="'.($page+3).'"href="'.($page+3).'">Next</a>
  </li>';
    }
    else{

      echo '  <li class="page-item disabled">
          <a class="page-link next_link" href="#">Next</a>
        </li>';
    }
     ?>







  </ul>
</nav>


                                        </div>

                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                       </div>
        </div>
    </div>


    <!-- Modal -->

      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

<?php
echo '<form method="post" action="/students/submit_grades"id="grades_form">';

$data = array(
        'type'  => 'hidden',
        'name'  => 'sid',
        'id'    => 'student_id',
        'class' => 'sid'
);

echo form_input($data);
echo '<table class="mb-0 table table-light">
    <thead>

    <tr>
        <th>Name</th>
        <th>Work</th>
        <th> Oral</th>
        <th> Exam</th>

    </tr>
    </thead>
    <tbody>';
    $counter =  1;

foreach($courses as $course){

  echo '<tr><td>'. $course["name"].'</td> <td>
  <input class="grade_input" id="work_'.$course["id"].'" style="max-height:20px;"name="work_'.$course["id"].'" type="number" min="0" max="'.$course["work"].'">  </td>
       <td><input class="grade_input" id="oral_'.$course["id"].'"  style="max-height:20px;" name="oral_'.$course["id"].'" type="number" min="0" max="'.$course["oral"].'"></td>
          <td><input class="grade_input" id="exam_'.$course["id"].'"  style="max-height:20px;"name="exam_'.$course["id"].'" type="number" min="0" max="'.$course["exam"].'"></td>   </tr>';

$counter++;
}
echo '    </tbody>
</table>';


echo "</form>";



 ?>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" form="grades_form" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript" src="/assets/scripts/main.js"></script>
<script type="text/javascript">
   var page = '<?php echo $page; ?>';
   var total_rows = '<?php echo $total_rows; ?>';
  var total_pages = Math.ceil(total_rows/6)
</script>
<script src="/assets/scripts/edit_students.js" ></script>

<script>

</script>

</body>
</html>
