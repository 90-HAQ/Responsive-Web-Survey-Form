<?php

$checked1 = array();
$checked2 = array();
$checked3 = array();
$fname = '';
$lname = '';
$phone = '';
$email = '';
$city  = '';
$address = '';
$province = '';
$date = '000-00-00';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname    = isset($_POST['fname'])    && !empty($_POST['fname'])    ? $_POST['fname']    : '';
    $lname    = isset($_POST['lname'])    && !empty($_POST['lname'])    ? $_POST['lname']    : '';
    $phone    = isset($_POST['phone'])    && !empty($_POST['phone'])    ? $_POST['phone']    : '';
    $email    = isset($_POST['email'])    && !empty($_POST['email'])    ? $_POST['email']    : '';
    $city     = isset($_POST['city'])     && !empty($_POST['city'])     ? $_POST['city']     : '';
    $address  = isset($_POST['address'])  && !empty($_POST['address'])  ? $_POST['address']  : '';
    $province = isset($_POST['province']) && !empty($_POST['province']) ? $_POST['province'] : '';
    $date     = isset($_POST['date'])     && !empty($_POST['date'])     ? $_POST['date']     : '';
    $checked1 = isset($_POST['type'])     && !empty($_POST['type'])     ? $_POST['type']     : array();
    $checked2 = isset($_POST['top'])      && !empty($_POST['top'])      ? $_POST['top']      : array();
    $checked3 = isset($_POST['bob'])      && !empty($_POST['bob'])      ? $_POST['bob']      : array();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>CHECKBOXES</title>


    <style>
        input[name="type[]"] {
            filter: hue-rotate(0deg);
            cursor: pointer;
        }

        input[name="top[]"] {
            filter: hue-rotate(130deg);
            cursor: pointer;
        }

        input[name="bob[]"] {
            filter: hue-rotate(270deg) brightness(1);
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="mx-auto p-3">
        <div class="card">
            <div class="card-header text-center">
                <h2>Form Survey</h2>
            </div>
            <div class="card-body">

                <div class="mx-auto p-2">
                    <form id="surveyForm" action="#" method="post">
                        <div class="border border-2 p-2 rounded">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Form Survey</li>
                                </ol>
                            </nav>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="first name" required value="<?php echo isset($fname) && !empty($fname) ? $fname : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="last name" required value="<?php echo isset($lname) && !empty($lname) ? $lname : '' ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="phone number" required value="<?php echo isset($phone) && !empty($phone) ? $phone : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required value="<?php echo isset($email) && !empty($email) ? $email : '' ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" placeholder="home address" required value="<?php echo isset($address) && !empty($address) ? $address : '' ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-control" id="city" placeholder="city name" required value="<?php echo isset($city) && !empty($city) ? $city : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <select class="form-control" name="province" id="province" required>
                                            <option value="">Select Province</option>
                                            <option value="punjab" <?php echo (strcmp($province, "punjab") == 0)       ? 'selected' : ''; ?>>Punjab</option>
                                            <option value="kpk" <?php echo (strcmp($province, "kpk") == 0)          ? 'selected' : ''; ?>>Khyber Pakhtu Khan</option>
                                            <option value="sindh" <?php echo (strcmp($province, "sindh") == 0)        ? 'selected' : ''; ?>>Sindh</option>
                                            <option value="balochistan" <?php echo (strcmp($province, "balochistan") == 0)  ? 'selected' : ''; ?>>Balochistan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" class="form-control" id="date" required value="<?php echo isset($date) && !empty($date) ? $date : '' ?>">
                                    </div>
                                </div>                                
                            </div>

                            <!-- Section-1 -->
                            <div class="border border-2 p-1 rounded">
                                <h2 class="text-secondary text-center mt-2">Which sport do you have intrest in ?</h2>
                                <hr>
                                <div class="form-group">
                                    <input type="button" id="btnSelect1" class="btn btn-secondary mb-2" onclick='selects1()' value="<?php echo isset($checked1) && !empty($checked1) ? "Deselect All" : "Select All"  ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-check ">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck11" value="1" <?php echo in_array('1', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck11">Hockey</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck12" value="2" <?php echo in_array('2', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck12">Cricket</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck13" value="3" <?php echo in_array('3', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck13">Tennis</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck14" value="4" <?php echo in_array('4', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck14">Football</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck15" value="5" <?php echo in_array('5', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck15">Table Tennis</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck16" value="6" <?php echo in_array('6', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck16">Volleyball</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck17" value="7" <?php echo in_array('7', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck17">Martial Art</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck18" value="8" <?php echo in_array('8', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck18">Athletics</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck19" value="9" <?php echo in_array('9', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck19">Dodge Ball</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck110" value="10" <?php echo in_array('10', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck110">Swimming</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck111" value="11" <?php echo in_array('11', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck111">Skating</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck112" value="12" <?php echo in_array('12', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck112">Ice Skating</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck113" value="13" <?php echo in_array('13', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck113">Ice Hockey</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck114" value="14" <?php echo in_array('14', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck114">Rugby</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck115" value="15" <?php echo in_array('15', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck115">Tracking</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="type[]" class="form-check-input" id="exampleCheck116" value="16" <?php echo in_array('16', $checked1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck116">Racing</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- Section-2 -->
                            <div class="border border-2 p-1 rounded">
                                <h2 class="text-secondary text-center mt-2">What type of movies do you like ?</h2>
                                <hr>
                                <div class="form-group">
                                    <input type="button" id="btnSelect2" class="btn btn-secondary mb-2" onclick='selects2()' value="<?php echo isset($checked2) && !empty($checked2) ? "Deselect All" : "Select All"  ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-check ">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck21" value="1" <?php echo in_array('1', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck21">Adventure</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck22" value="2" <?php echo in_array('2', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck22">Action</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck23" value="3" <?php echo in_array('3', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck23">Drama</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck24" value="4" <?php echo in_array('4', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck24">Horror</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck25" value="5" <?php echo in_array('5', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck25">Thriller</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck26" value="6" <?php echo in_array('6', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck26">Crime</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck27" value="7" <?php echo in_array('7', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck27">Science Fiction</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck28" value="8" <?php echo in_array('8', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck28">Comendy</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck29" value="9" <?php echo in_array('9', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck29">Animation</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck210" value="10" <?php echo in_array('10', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck210">Mystery</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck211" value="11" <?php echo in_array('11', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck211">Music</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck212" value="12" <?php echo in_array('12', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck212">Sport</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck213" value="13" <?php echo in_array('13', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck213">Fantasy</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck214" value="14" <?php echo in_array('14', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck214">War</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck215" value="15" <?php echo in_array('15', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck215">Biography</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="top[]" class="form-check-input" id="exampleCheck216" value="16" <?php echo in_array('16', $checked2) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck216">Gang War</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- Section-3 -->
                            <div class="border border-2 p-1 rounded">
                                <h2 class="text-secondary text-center mt-2">What type of video-games do you like ?</h2>
                                <hr>
                                <div class="form-group">
                                    <input type="button" id="btnSelect3" class="btn btn-secondary mb-2" onclick='selects3()' value="<?php echo isset($checked3) && !empty($checked3) ? "Deselect All" : "Select All"  ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-check ">
                                            <input type="checkbox" name="bob[]" class="form-check-input" id="exampleCheck31" value="1" <?php echo in_array('1', $checked3) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck31">Call of duty</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="bob[]" class="form-check-input" id="exampleCheck32" value="2" <?php echo in_array('2', $checked3) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck32">God of war</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="bob[]" class="form-check-input" id="exampleCheck33" value="3" <?php echo in_array('3', $checked3) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck33">GTA-5</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="bob[]" class="form-check-input" id="exampleCheck34" value="4" <?php echo in_array('4', $checked3) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck34">Fortnite</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="bob[]" class="form-check-input" id="exampleCheck35" value="5" <?php echo in_array('5', $checked3) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck35">Resident evil</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="bob[]" class="form-check-input" id="exampleCheck36" value="6" <?php echo in_array('6', $checked3) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="exampleCheck36">League of legends</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn btn-primary" vlaue="Submit">
                                    </div>
                                    <div class="col">
                                        <input type="button" class="btn btn-danger float-right" onclick="resetForm()" value="Clear">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function selects1() {
            var btn = document.getElementById("btnSelect1").value;
            // alert(btn);

            if (btn === "Select All") {
                var ele = document.getElementsByName('type[]');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = true;
                }
                // btn.value = "Deselect All";
                document.getElementById("btnSelect1").value = "Deselect All";

            } else if ((btn === "Deselect All")) {
                var ele = document.getElementsByName('type[]');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = false;

                }
                // btn.innerText = "Select All";
                document.getElementById("btnSelect1").value = "Select All";
            }
        }

        function selects2() {
            var btn = document.getElementById("btnSelect2").value;
            // alert(btn);

            if (btn === "Select All") {
                var ele = document.getElementsByName('top[]');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = true;
                }
                // btn.value = "Deselect All";
                document.getElementById("btnSelect2").value = "Deselect All";

            } else if ((btn === "Deselect All")) {
                var ele = document.getElementsByName('top[]');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = false;

                }
                // btn.innerText = "Select All";
                document.getElementById("btnSelect2").value = "Select All";
            }
        }

        function selects3() {
            var btn = document.getElementById("btnSelect3").value;
            // alert(btn);

            if (btn === "Select All") {
                var ele = document.getElementsByName('bob[]');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = true;
                }
                // btn.value = "Deselect All";
                document.getElementById("btnSelect3").value = "Deselect All";

            } else if ((btn === "Deselect All")) {
                var ele = document.getElementsByName('bob[]');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = false;

                }
                // btn.innerText = "Select All";
                document.getElementById("btnSelect3").value = "Select All";
            }
        }

        function resetForm() {
            var elements = document.getElementsByTagName("input");
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].type == "text") {
                    elements[i].value = "";
                }
                if (elements[i].type == "number") {
                    elements[i].value = "";
                }
                if (elements[i].type == "email") {
                    elements[i].value = "";
                }
                if (elements[i].type == 'checkbox') {
                    elements[i].checked = false;
                }
                if (elements[i].type == 'date') {
                    elements[i].value = "";
                }
            }

            document.getElementById("province").selectedIndex = 0;

            document.getElementById("btnSelect1").value = "Select All";

            document.getElementById("btnSelect2").value = "Select All";

            document.getElementById("btnSelect3").value = "Select All";

            // not working
            // document.getElementById("surveyForm").reset();
        }
    </script>

    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>