<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up Form</title>
    </head>

    <body>
        <h1>Buat Account Baru!</h1>

        <h3>Sign Up Form</h3>

        {{Form::open(array('action' => 'AuthController@store')) }}
            <p>First Name:</p>
            <!-- <label for="firstname">First name:</label> -->
            <input type="text" id="firstname" name="firstname">

            <p>Last Name:</p>
            <!-- <label for="lastname">Last name:</label> -->
            <input type="text" id="lastname" name="lastname">

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male"> Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female"> Female</label><br>

            <!-- I truly believe there are only two genders in this universe  -->
            <input type="radio" id="otherGender" name="genderGender" value="other">
            <label for="otherGender"> Other</label><br>

            <p>Nationality:</p>
            <!-- <label for="nationality">Nationality :</label> -->
            <select name="nationality" id="nationality">
                <!-- idk how f*cked up this country
                but Indonesia still number one for me -->
                <option value="idn">Indonesia</option>
                <option value="rus">Rusia</option>
                <option value="usa">United State Of America</option>
                <option value="gbr">United Kingdom</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" id="bahasa" name="bahasa" value="bahasa">
            <label for="bahasa"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="english" value="english">
            <label for="english"> English</label><br>
            <input type="checkbox" id="otherLang" name="otherLang" value="other">
            <label for="otherLang"> Other</label><br>

            <p>Bio:</p>
            <!-- <label for="bio">Bio:</label> -->
            <textarea name="bio" rows="8" cols="40"></textarea>

            <br>

            <input type="submit" value="Submit">
        {{Form::close() }}
    </body>
</html>
