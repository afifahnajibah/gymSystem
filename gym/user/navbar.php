<?php

   if(isset($_SESSION['musername'])==false) {
?>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="../assets/css/logo.png" alt="" width="100" height="100">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="programmes.php">PROGRAMMES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="instructor.php">INSTRUCTOR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="community.php">COMMUNITY</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="register.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            SIGN UP
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
          LOG IN
         </a>
        </li>
       </ul>

    </div>
  </div>
</nav>

<!--member navbar-->

 <?php } else{ ?>
   <nav class="navbar navbar-expand-lg navbar-light">
     <div class="container-fluid">
       <a class="navbar-brand" href="index.php">
       <img src="../assets/css/logo.png" alt="" width="100" height="100">
       </a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="nav justify-content-end">
           <li class="nav-item">
             <a class="nav-link" aria-current="page" href="index.php">HOME</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="programmes.php">PROGRAMMES</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="instructor.php">INSTRUCTOR</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="aboutus.php">ABOUT US</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="community.php">COMMUNITY</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="payment.php?id=<?php echo $_SESSION['musername']; ?>">PAYMENT</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="myaccount.php?id=<?php echo $_SESSION['musername']; ?>">MYACCOUNT</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="logout.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                 <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
               </svg>
               LOG OUT
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
               <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
               <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
             </svg>
              WELCOME, <?php echo $_SESSION['musername']; ?> !
            </a>
           </li>
          </ul>

       </div>
     </div>
   </nav>

    <?php } ?>
