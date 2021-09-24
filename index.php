<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <h1 id="title">The Beatles Survey Form</h1>
    <p id="description">Thank you for taking the time to help us improve the platform</p>
    <form id="survey-form" action="survey-form">
        <div class="form-group">
            <label id="name-label" for="name">Name</label>
            <input id="name" type="text" placeholder="enter your name" required>
        </div>

        <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input id="email" type="email" placeholder="enter your email" required>
        </div>

        <div class="form-group">
            <label id="number-label" for="number">Age</label>
            <input id="number" type="number" placeholder="your age" min="17" max="40" required>
        </div>

        <div class="form-group">
            <label id="dropdown-label" for="dropdown">Select Your Role</label>
            <select name="dropdown" id="dropdown" required>
                <option disabled selected value>Select Role</option>
                <option value="student">Student</option>
                <option value="job">Full Time Job</option>
                <option value="parttime">Part Time Job</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="radios">
            <label for="radio">Your Favorit Member :</label>
            <input style="display: inline-block;" type="radio" name="radio" value="lennon">Lennnon </br>
            <input style="display: inline-block;" type="radio" name="radio" value="mccartney">McCartney </br>
            <input style="display: inline-block;" type="radio" name="radio" value="harisson">Harrison </br>
            <input style="display: inline-block;" type="radio" name="radio" value="starr">Starr </br>
        </div>
        <div class="checkbox">
            <label for="checkbox">Your Favorit Albums :</label>
            <input style="display: inline-block;" type="checkbox" name="radio" value="abbey">Abbey Road </br>
            <input style="display: inline-block;" type="checkbox" name="radio" value="let">Let It Be </br>
            <input style="display: inline-block;" type="checkbox" name="radio" value="revol">Revolver </br>
            <input style="display: inline-block;" type="checkbox" name="radio" value="rubber">Rubber Soul </br>
        </div>
        <div class="form-group">
            <label id="dropdown-label" for="textarea">Comment & Sugestion :</label>
            <textarea id="textarea" cols="30" rows="10" style="height: 100px;"></textarea>
        </div>

        <button id="submit" type="submit">Submit</button>
    </form>
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
</body>

</html>