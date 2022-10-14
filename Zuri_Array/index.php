<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri PHP Form</title>
</head>
<body>
    <main>
        <form method="POSt" action="">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter name"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter email"><br>
            <label for="dob">Date of Birth</label><br>
            <input type="date" name="dob" id="date" placeholder="Enter Date of Birth"><br>
            <label for="Gender">Gender</label><br>
            <select>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select><br>
            <label for="country">Country</label><br>
            <input type="country" name="country" id="country" placeholder="Enter Country"><br>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
        <?php
        print_r($_GET);
        ?>
    </main>
</body>
</html>

