<div class="newsletter">
    <strong>Subscribe To Our Weekly NewsLetters</strong>
    <div class="newsletter_form">
        <form action="index.php" method="post">
            <input type="text" name="email_newsletter" placeholder="Enter Your Email Address" id="email_newsletter">
            <input type="submit" value="Subscribe Now" name="newsletter_submit">
        </form>
    </div>
</div>
<?php
    if(isset($_POST["newsletter_submit"])){
        //email php validation
        if (!filter_var($_POST["email_newsletter"], FILTER_VALIDATE_EMAIL)) {
            echo "<script>redTheEmailBox();</script>";
        }
        else{
            echo "<script>doneSubscribe();</script>";
        }
    }
?>
<div class="greycover"></div>
<div class="thank_you_for_subscribing">
    <i class="fa fa-times nav_close" aria-hidden="true" onclick="closeSubscribe()"></i>
    <span>Thank You For Subscribing</span>
</div>
<footer>
    <div class="flex_footer">
        <ul>
            <a href=""><li>About Us</li></a>
            |<a href=""><li>Products & Solutions</li></a>
            |<a href=""><li>Investor</li></a>
            |<a href=""><li>Media</li></a>
            |<a href=""><li>Careers</li></a>
            |<a href=""><li>Contact Us</li></a>
        </ul>
    </div>
    <div class="socialmedia_footer">
        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </div>
    <div class="copyright_Footer">
        &copy; GCW @ 2021
    </div>
    <div class="legal_footer">
        <ul>
            <a href="#"><li>Privacy Policy</li></a>
            |<a href="#"><li>Terms And Conditions</li></a>
            |<a href="#"><li>Legal</li></a>
        </ul>
    </div>
</footer>