<?php
// Meelaha lagu kaydinayo fariimaha qaladka
$errors = [];

// Marka Register la riixo
if (isset($_POST["submit"])) {

    // Qaado xogta form-ka
    $name = trim($_POST["name"] ?? "");
    $pob = trim($_POST["pob"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $telephone = trim($_POST["telephone"] ?? "");
    $email = trim($_POST["email"] ?? "");

    $parentName = trim($_POST["parent_name"] ?? "");
    $parentTelephone = trim($_POST["parent_telephone"] ?? "");
    $relationship = trim($_POST["relationship"] ?? "");

    $studentId = trim($_POST["student_id"] ?? "");
    $faculty = trim($_POST["faculty"] ?? "");
    $department = trim($_POST["department"] ?? "");
    $className = trim($_POST["class_name"] ?? "");
    $registrationDate = trim($_POST["registration_date"] ?? "");

    // Hubi in fields-ka qoraalka aysan madhnayn
    $requiredFields = [
        "Name" => $name,
        "Place of Birth" => $pob,
        "Date of Birth" => $dob,
        "Address" => $address,
        "Gender" => $gender,
        "Telephone" => $telephone,
        "Email" => $email,
        "Parent Name" => $parentName,
        "Parent Telephone" => $parentTelephone,
        "Relationship" => $relationship,
        "Student ID" => $studentId,
        "Faculty" => $faculty,
        "Department" => $department,
        "Class" => $className,
        "Registration Date" => $registrationDate
    ];

    foreach ($requiredFields as $field => $value) {
        if (empty($value)) {
            $errors[] = $field . " waa qasab in la buuxiyo.";
        }
    }

    // Magacu waa inuu ka koobnaadaa xarfo iyo spaces oo keliya
    if (!empty($name) && !preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Magaca wuxuu ka koobnaan karaa xarfo iyo spaces oo keliya.";
    }

    // Hubi email-ka
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Fadlan geli email sax ah.";
    }

    // Hubi in sawir la soo geliyey
    if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
        $errors[] = "Fadlan soo geli sawirka ardayga.";
    } elseif ($_FILES["image"]["error"] != UPLOAD_ERR_OK) {
        $errors[] = "Sawirka lama soo gelin karin. Mar kale isku day.";
    } else {
        // Kaliya oggolow image formats-ka la sheegay
        $allowedTypes = ["image/jpeg", "image/png", "image/gif"];
        $imageType = mime_content_type($_FILES["image"]["tmp_name"]);

        if (!in_array($imageType, $allowedTypes)) {
            $errors[] = "Sawirku waa inuu noqdaa JPG, JPEG, PNG ama GIF.";
        }
    }

    // Haddii qalad jirin, sawirka iyo xogta kaydi kadibna u gudub result.php
    if (count($errors) == 0) {
        $uploadFolder = "uploads/";

        if (!is_dir($uploadFolder)) {
            mkdir($uploadFolder, 0777, true);
        }

        // Magac cusub sii sawirka si uusan ula mid noqon file kale
        $extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
        $imageName = uniqid("student_", true) . "." . $extension;
        $imagePath = $uploadFolder . $imageName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            // Xogta ku kaydi session si result.php u akhriyo
            session_start();

            $_SESSION["student"] = [
                "Name" => $name,
                "Place of Birth" => $pob,
                "Date of Birth" => $dob,
                "Address" => $address,
                "Gender" => $gender,
                "Telephone" => $telephone,
                "Email" => $email,
                "Parent Name" => $parentName,
                "Parent Telephone" => $parentTelephone,
                "Relationship" => $relationship,
                "Student ID" => $studentId,
                "Faculty" => $faculty,
                "Department" => $department,
                "Class" => $className,
                "Registration Date" => $registrationDate,
                "Image" => $imagePath
            ];

            // U gudub bogga natiijada
            header("Location: result.php");
            exit;
        } else {
            $errors[] = "Sawirka lama kaydin karin. Hubi folder-ka uploads.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">Student Registration Form</h2>
        </div>
        <div class="card-body">

            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <strong>Fadlan sax qaladaadka:</strong>
                    <ul class="mb-0">
                        <?php foreach ($errors as $error) { ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <form method="post" enctype="multipart/form-data">
                <h4 class="text-primary">1. Personal Information</h4>

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required
                           value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Place of Birth (POB)</label>
                        <input type="text" name="pob" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['pob'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date of Birth (DOB)</label>
                        <input type="date" name="dob" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['dob'] ?? ''); ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" required
                           value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Gender</label>
                    <label class="me-3"><input type="radio" name="gender" value="Male" required> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="tel" name="telephone" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['telephone'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Student Image</label>
                    <input type="file" name="image" class="form-control" accept=".jpg,.jpeg,.png,.gif" required>
                </div>

                <hr>
                <h4 class="text-primary">2. Parent Information</h4>

                <div class="mb-3">
                    <label class="form-label">Parent Name</label>
                    <input type="text" name="parent_name" class="form-control" required
                           value="<?php echo htmlspecialchars($_POST['parent_name'] ?? ''); ?>">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Parent Telephone</label>
                        <input type="tel" name="parent_telephone" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['parent_telephone'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Relationship</label>
                        <input type="text" name="relationship" class="form-control" required
                               placeholder="e.g. Father, Mother"
                               value="<?php echo htmlspecialchars($_POST['relationship'] ?? ''); ?>">
                    </div>
                </div>

                <hr>
                <h4 class="text-primary">3. Academic Information</h4>

                <div class="mb-3">
                    <label class="form-label">Student ID</label>
                    <input type="text" name="student_id" class="form-control" required
                           value="<?php echo htmlspecialchars($_POST['student_id'] ?? ''); ?>">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Faculty</label>
                        <select name="faculty" class="form-select" required>
                            <option value="">Choose Faculty</option>
                            <option value="Computer & IT">Computer & IT</option>
                            <option value="Medicine & Health Science">Medicine & Health Science</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Department</label>
                        <input type="text" name="department" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['department'] ?? ''); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Class</label>
                        <input type="text" name="class_name" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['class_name'] ?? ''); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Registration Date</label>
                        <input type="date" name="registration_date" class="form-control" required
                               value="<?php echo htmlspecialchars($_POST['registration_date'] ?? ''); ?>">
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Register Student</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
