<!DOCTYPE html>
<hmtl>
    <head>
        <title>ENP</title>
        <meta lang="en" charset="UTF-8">
        <link rel="icon" href="a.ico" type="image/x-icon"/>
        <link rel=stylesheet href="css/register.css"/>
    </head>
    <body>
        <form action="../../controllers/register.php" method="post">
            <div class="user-pass-block">
                <label><p>Name*</p></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><p>Surname*</p></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <p>Sex: </p>
                <input type="radio" name="sex" value="male" required>Male
                <br>
                <input type="radio" name="sex" value="female" required>Female

                <p>Sex: </p>
                <input type="radio" name="sex" value="male" required>Male
                <br>
                <input type="radio" name="sex" value="female" required>Female
                <br>
                <input type="radio" name="sex" value="non-binary" required>Non-Binary
                <br>
                <input type="radio" name="sex" value="agender" required>Agender
                <br>
                <input type="radio" name="sex" value="other" required>Not in list
                <input type="text" placeholder="Specify your gender" name="uname">

                <label><p>Mail*</p></label>
                <input type="text" placeholder="Enter Password" name="passwd" required>
                <label><p>Confirm Mail*</p></label>
                <input type="text" placeholder="Enter Password" name="passwd" required>

                <label><p>Password*</p></label>
                <input type="password" placeholder="Enter Password" name="passwd" required>

                <label><p>Password*</p></label>
                <input type="password" placeholder="Enter Password" name="passwd" required>

                <label><p>Address*</p></label>
                <input type="text" placeholder="Enter Address" name="address" required>

                <label><p>City*</p></label>
                <input type="text" placeholder="Enter city" name="city" required>

                <label><p>Postal Code*</p></label>
                <input type="text" placeholder="Enter Postal Code" name="cp" required>

                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</hmtl>