<?php
session_start();

// Hubi in form-ka la buuxiyey
if (!isset($_SESSION["student"])) {
    header("Location: index.php");
    exit;
}

$student = $_SESSION["student"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h2 class="text-center mb-0">Student Registered Successfully</h2>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <img src="<?php echo htmlspecialchars($student["Image"]); ?>"
                     alt="Student Image" width="140" height="140"
                     style="object-fit: cover; border-radius: 50%;">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Information</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($student as $label => $value) { ?>
                        <?php if ($label != "Image") { ?>
                            <tr>
                                <th><?php echo htmlspecialchars($label); ?></th>
                                <td><?php echo htmlspecialchars($value); ?></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <a href="index.php" class="btn btn-primary">Register Another Student</a>
        </div>
    </div>
</div>
</body>
</html>
