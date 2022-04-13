<?php
//start the session
session_start();

//check if thr session variable are set or merong laman an session variables or naga exist sila
//this is to check if naka login pa yung account or hindi man
if (isset($_SESSION['ses_username'])===false){
    header("Location: index.php?logfirst");

} elseif (isset($_REQUEST['logout'])===true){
    session_destroy();
    header("Location: index.php?logout");   
}

?>

<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Portfolio Page</title>

                                <link href='css/bootstrap.min.css' rel='stylesheet'>

                                <script type='text/javascript' src='js/jquery.min.js'></script>

                                <style>.profile-head {
    transform: translateY(5rem)
}
.cover {
    background-image: url('images/cover photo.jpeg');
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh;
    overflow-x: hidden
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-3 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="images/profile pictute.jpg" alt="..." width="130" class="rounded mb-1 img-thumbnail">

                        <a href="?logout" class="btn btn-outline-dark btn-sm btn-block">Sign Out</a>


                    </div>
                    <div class="media-body mb-1 text-white">
                        <h4 class="mt-0 mb-0"> <?php echo $_SESSION['ses_fullname']; ?></h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"> <?php echo $_SESSION['ses_address']; ?>
                         </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">

                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">47K</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">72M</h5><small class="text-muted"> <i class="fas fa-user mr-0"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">24</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                  </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">2M</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Likes</small>
                    </li>
                </ul>
            </div>

            <div class="px-5 py-9">
                <h4 class="mb-0">EXPERTISE </h4>
                <div class="p-2 shadow-sm bg-light">
                    <ul type = "box">
                    <p class="font-italic mb-0">Creativty/Editor</p>
                    <p class="font-italic mb-0">Social Skill</p>
                    <p class="font-italic mb-0">Magmahal sa taong di ako mahal</p>
                     <p class="font-italic mb-0">Umaasa sa wala</p>
                </div>

            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Images</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="images/photo-1.jpg" alt="" class="img-fluid rounded shadow-sm"></div>              
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="images/photo-2.jpg" alt="" class="img-fluid rounded shadow-sm"></div>                
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="images/photo-3.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="images/photo-4.jpg" alt="" class="img-fluid rounded shadow-sm"></div>

                </div> 

            <div class="px-3 py-4">
                <div class="p-1 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2022</p>

            </div>

             </div>
              <div class="px-2 py-3">
                <li class="list-inline-item">
                    <h7 class="font-weight-bold font-italic mb-0 d-block">LEAVING MOTTO</h7><small class="text-muted"><i class="text-center fas fa-image mb-0"></i>"Never Give Up"</small>
                </li>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>