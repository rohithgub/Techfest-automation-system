<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <br>
    <br>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="rollno">Roll NO</label>
                <input
                  type="text"
                  class="form-control"
                  id="rollno"
                  name="rollno"
                />
              </div>
             
              
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Department</label>
                <input
                  type="text"
                  class="form-control"
                  id="department"
                  name="department"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <div class="form-group">
                <label for="eventname">Event Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="eventname"
                  name="eventname"
                />
              </div>
              <div class="form-group">
                <label for="teamtype">Teamtype</label>
                <div>
                  <label for="single" class="radio-inline"
                    ><input
                      type="radio"
                      name="teamtype"
                      value="s"
                      id="single"
                    />Single</label
                  >
                  <label for="group" class="radio-inline"
                    ><input
                      type="radio"
                      name="teamtype"
                      value="g"
                      id="group"
                    />Group</label
                  >
                  
                </div>
              </div>
              <div class="form-group">
                <label for="teamname">Team Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="teamname"
                  name="teamname"
                />
              </div>
              <div class="form-group">
                <label for="collegename">College Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="collegename"
                  name="collegename"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
   
   
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  
</div>
  </body>
</html>
