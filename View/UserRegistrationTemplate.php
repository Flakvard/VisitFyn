<?php
require_once "../controller/UserRegistration.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Navn</label>
                <input type="text" name="navn" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $navn; ?>">
                <span class="invalid-feedback"><?php echo $navn_err; ?></span>
            </div>
            <div class="form-group">
                <label>Efternavn</label>
                <input type="text" name="efternavn" class="form-control <?php echo (!empty($efternavn_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $efternavn; ?>">
                <span class="invalid-feedback"><?php echo $efternavn_err; ?></span>
            </div>
            <div class="form-group">
                <label>Telefon/mobil nummer</label>
                <input type="text" name="tlfnr" class="form-control <?php echo (!empty($tlf_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tlf; ?>">
                <span class="invalid-feedback"><?php echo $tlf_err; ?></span>
            </div>
            <div class="form-group">
                <label>Land</label>
                <input type="text" name="land" class="form-control <?php echo (!empty($land_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $land; ?>">
                <span class="invalid-feedback"><?php echo $land_err; ?></span>
            </div>
            <div class="form-group">
                <label>By</label>
                <input type="text" name="by" class="form-control <?php echo (!empty($by_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $by; ?>">
                <span class="invalid-feedback"><?php echo $by_err; ?></span>
            </div>
            <div class="form-group">
                <label>Postnummer</label>
                <input type="text" name="postnr" class="form-control <?php echo (!empty($postnr_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $postnr; ?>">
                <span class="invalid-feedback"><?php echo $postnr_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="../index.php">Login here</a>.</p>
        </form>
    </div>
</body>

</html>