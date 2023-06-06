<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <div class="container" style="margin: 0 auto; width: 350px; height: 200px;">
        <h1>Registration Form</h1>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <label for='firstname'>First Name :</label><br><br>
            <input type="text" name="firstname" id="firstname"><br><br>

            <label for='lastname'>Last Name :</label><br><br>
            <input type="text" name="lastname" id="lastname"><br><br>

            <label for='gender'>Gender :</label><br><br>
            <input type='radio' name='gender' value='male'>Male<br><br>
            <input type='radio' name='gender' value='female'>Female<br><br>
            <input type='radio' name='gender' value='other'>Other<br><br>

            <label for='nationality'>Nationality :</label><br><br>
            <select>
                <option value='indonesia'>Indonesian</option>
                <option value='malaysian'>Malaysian</option>
                <option value='australian'>Australian</option>
            </select><br><br>

            <label for='language'>Language Spoke :</label><br><br>
            <input type='checkbox' name='bahasa_indonesia' value='bahasa_indonesia'>Bahasa Indonesia<br><br>
            <input type='checkbox' name='english' value='english'>English<br><br>
            <input type='checkbox' name='other' value='other'>Other<br><br>

            <label for='bio'>Bio :</label><br><br>
            <textarea cols='30' rows='9'></textarea><br><br>

            <input type="submit" value="Register"> <br> <br> <br>
        </form>
    </div>
</body>
</html>
