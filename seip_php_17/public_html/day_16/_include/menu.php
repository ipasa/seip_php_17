<nav class="navbar navbar-default">
  <div class="container-fluid">
      
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Info</a>
    </div>
      
    <ul class="nav navbar-nav navbar-right">
        <li class="<?php if ($status == 'addStudent') {echo 'active'; }?>">
            <a href="add_student.php">Add Student</a>
        </li>
        <li class="<?php if ($status == 'viewStudent') {echo 'active'; }?>">
            <a href="show_student.php">View Student</a>
        </li> 
    </ul>
      
  </div>
</nav>
