<?php include '../nav/header.php'; ?>

<div class="container"
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3"><b>Contact Us!!!</b></h1>
            <p class="col-lg-10 fs-4">Send us an enquiry, or rate us! By sending with us your feedback we can improve our services talored with your needs.</p>
        </div>

        <div class="col-md-10 mx-auto col-lg-5">
            <form action="../page/contact.php?function=sendSms" class="p-4 p-md-5 border rounded-3 bg-light" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name (optional):">
                    <label>Name (optional)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="mssg" placeholder="Message/Feedback"></input>
                    <label>Message/Feedback</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <label>Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="contact" placeholder="Contact Number">
                    <label>Contact No.</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="send_msg">Send</button>
                <hr class="my-4">
                <small class="text-muted">By clicking Send, you agree to the terms of use.</small>
            </form>
        </div>
    </div>
</div>


<hr class="featurette-divider">

<!-- Team Section -->
<div class="row">
    <div class="col-lg-4 text-center">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://thumbs.dreamstime.com/b/print-339754759.jpg" alt="Alexa">
        <h2>Mr.Jan</h2>
        <p>Founder</p>
        <p>Mr.Jan is the person who establishes the group of Philippine TouristD.</p>
    </div>
    <div class="col-lg-4 text-center">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://static.vecteezy.com/system/resources/previews/004/439/690/non_2x/doodle-girl-character-drawing-vector.jpg" style="border:1px solid gray;" alt="Jared">
        <h2>Ms.Maine</h2>
        <p>Executive Directo</p>
        <p>Ms.Maine is the senior manager of the Philippine TouristD group, usually a non-profit, who is responsible for overseeing day-to-day operations and ensuring that the organization meets its goals.They manage staff, implement programs, and often report to a board of directors.</p>
    </div>
    <div class="col-lg-4 text-center">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://img.pikbest.com/origin/06/48/72/059pIkbEsTrz7.jpg!w700wp" style="border:1px solid gray;" alt="Mika">
        <h2>Ms.Jane</h2>
        <p>Manager</p>
        <p>Ms.Jane is the person that responsible for controlling or administering all or part of a company, organization, or project. They oversee the activities and performance of others, often making key decisions and directing resources to achieve specific goals.</p>
    </div>
</div>

</div>