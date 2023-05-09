<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/teacherlogin.css" rel="stylesheet" />
    <style>
        .form-select option {
            color: azure;
        }
    </style>
</head>

<body>


    <div class="clzbanner">
        <img src="images/Custom_Banner.jpg" alt="">

    </div>

    <div class="Secction pt-4">
        <h2 class="text-center"><span class="scfName ">Modern English</span> <span class="sclName">Boarding
                School</span></h2>
        <div class="loginSectionContent mt-4 mb-5">
            <div class="container container-fluid">
                <div class="row">
                    <form action="<?= $base_url ?>?r=newenrollment" method="POST" class="row g-3 needs-validation"
                        novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-light">Student Full
                                Name</label>
                            <input type="text" name="stdname" class="form-control" id="validationCustom01"
                                Placeholder="Kumar Chaudhary" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label text-light">Student Mother name</label>
                            <input type="text" name="mname" class="form-control" id="validationCustom02"
                                placeholder="Mother Name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label text-light">Student Father
                                Name</label>
                            <div class="input-group has-validation">
                                <input type="text" name="fname" class="form-control" id="validationCustom03"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Enter your father name.
                                </div>
                            </div>
                        </div>


                        <!-- <div class="col-md-6">
                            <label for="validationCustom03" class="form-label text-light">Address</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div> -->

                        <!-- =========================================================================================== -->
                        <!-- =========================================Second Column of Form============================= -->
                        <!-- =========================================================================================== -->


                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label text-light">Enter Your Address</label>
                            <input type="text" name="address" class="form-control" id="validationCustom04" required>
                            <div class="invalid-feedback">
                                Please provide a valid Address.
                            </div>
                        </div>

                        <!-- <div class="col-md-3">
                            <label for="validationCustom05" class="form-label text-light">Age</label>
                            <input type="tel" name="age" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid Age.
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label text-light">Contact Number</label>
                            <input type="tel" name="contact" class="form-control" id="validationCustom05"
                                pattern="9[0-9]{9}" title="Please enter a valid 10-digit contact number starting with 9"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid 10-digit contact number starting with 9.
                            </div>
                        </div>


                        <div class="col-md-3">
                            <label for="validationCustom06" class="form-label text-light">Gender</label>
                            <input type="text" name="gender" class="form-control" id="validationCustom06" required>
                            <div class="invalid-feedback">
                                Please provide a valid Gender.
                            </div>
                        </div>


                        <!-- =========================================================================================== -->
                        <!-- =========================================Third Column of Form============================= -->
                        <!-- =========================================================================================== -->


                        <div class="col-md-4">
                            <label for="validationCustom07" class="form-label text-light">Current School Enrolled
                                In</label>
                            <input type="text" name="csei" class="form-control" id="validationCustom07" required>
                            <div class="invalid-feedback">
                                Please provide a valid School Name.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="exampleFormControlInput2 validationCustom08 "
                                class="form-label text-light">Current Class enrolled
                                in </label>
                            <select class="form-select" name="ccei" aria-label="Default select example"
                                id="validationCustom08" required>
                                <option selected disabled value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                                <option value="6">Six</option>
                                <option value="7">Seven</option>
                                <option value="8">Eight</option>
                                <option value="9">Nine</option>
                                <option value="10">Ten</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid class.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleFormControlInput2 validationCustom09 "
                                class="form-label text-light">Class Enrollment at Modern
                                Englsih Boarding School </label>
                            <select class="form-select" name="cemebs" aria-label="Default select example"
                                id="validationCustom09" required>
                                <option selected disabled value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                                <option value="6">Six</option>
                                <option value="7">Seven</option>
                                <option value="8">Eight</option>
                                <option value="9">Nine</option>
                                <option value="10">Ten</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid class.
                            </div>
                        </div>



                        <!-- =========================================================================================== -->
                        <!-- =========================================Fourth Column of Form============================= -->
                        <!-- =========================================================================================== -->



                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" name="terms" value="Agree" type="checkbox" value=""
                                    id="invalidCheck" required>
                                <label class="form-check-label text-light" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback text-bg-warning">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

</body>

</html>