@extends ('layout.header')

@section ('content')

    <h1 class="content-header grey-back">Register Player</h1>

    <form method="POST" action="/players">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">
        
        <div class="object-div grey-back">

            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>

            <div class="form-group">
                <label for="yearEntered">Year Entered:</label>
                <input type="text" class="form-control" id="yearEntered" name="yearEntered" required>
            </div>            

            <div class="form-group">
                <label for="playerRating">Player Rating:</label>
                <input type="text" class="form-control" id="playerRating" name="playerRating" required>
            </div>            

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position" required>
            </div>

            <div class="form-group">
                <label for="schoolId">School ID:</label>
                <input type="text" class="form-control" id="schoolId" name="schoolId" required>
            </div>

            <div class="form-group">
                <label for="teamId">Team ID:</label>
                <input type="text" class="form-control" id="teamId" name="teamId" required>
            </div>
            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

    </div>
    </div>
    </form> 


@endsection
