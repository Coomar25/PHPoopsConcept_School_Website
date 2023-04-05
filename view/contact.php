<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">


</head>

<body>
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>Khairahani-5, Parsa Chitwan</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:">056 582236</a>
                        </li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise"
                                href="mailto:">Modernschool24@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.5318851137404!2d84.56841996171818!3d27.605037424826747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e9639c8eaf0d%3A0x8186b3cd014d3bf8!2sModern%20English%20Boarding%20School!5e1!3m2!1sen!2snp!4v1677219516266!5m2!1sen!2snp"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">


                    <form action="<?= $base_url ?>?r=contactmessage" method="POST" id="contactForm"
                        data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <label for="cname">Name</label>
                            <input type="text" name="name" class="form-control-input" id="cname" required>
                        </div>
                        <div class="form-group">
                            <label for="cemail">Email</label>
                            <input type="email" name="email" class="form-control-input" id="cemail" required>
                        </div>
                        <div class="form-group">
                            <label for="cmessage">Message</label>
                            <textarea class="form-control-textarea" name="message" id="cmessage" required></textarea>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree
                            <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms
                                Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>