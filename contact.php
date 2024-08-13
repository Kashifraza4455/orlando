<?php
$page = 'Project | Home';
$pageDesc = '""';
$pageTag = '""';
include 'includes/header.php';
$page = 'Home';
?>
<div class="line2">
  <hr>
</div>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-4 contact2">
                <h4>CONTACT NOW</h4>
                <h2>Asked us Anything </h2>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 col-xxl-7 contact2">
                <form action="">
                    <div class="d-flex contact3">
                        <div class="mb-3 form1">
                            <input type="text" class="form-control" placeholder="Enter your Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 form1">
                            <input type="tell" class="form-control" placeholder="Enter your Phone no" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3 form1 contact5">

                        <input type="email" class="form-control" placeholder="Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 contact7">

                        <textarea class="form-control" placeholder="Type here.." id="exampleFormControlTextarea1" rows="20"></textarea>
                    </div>

                    <button type="submit" class="btn contact6">SUBMIT</button>
                
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'Home';
?>