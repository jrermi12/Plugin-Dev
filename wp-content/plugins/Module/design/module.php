<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
    
    <div class="row" style=" padding-top: 100px; padding-left: 10px; ">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Create a new Guide
                </div>
                <div class="card-body">
                    <form class="container">
                        <div class="">
                          <label for="guide" class="visually">Guide Name</label>
                          <input type="text" class="form-control" id="guide">
                        </div>
                        <div class="">
                          <label for="inputPassword2" class="visually">Setting</label>
                          <input type="password" class="form-control" id="inputPassword2" >
                        </div>
                        <div class="" style="padding-top: 10px;" >
                          <button type="submit" class="btn btn-primary mb-3">Create</button>
                        </div>
                      </form>
                 
                </div>
               
            </div>
        </div>
        <div class="col-md-6" >
          <div class="card text-center">
              <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#">Section</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Setting</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link disabled">Embed Code</a>
                  </li>
              </ul>
              </div>
              <div class="card-body">
              <h5 class="card-title">Create Section</h5>
              <form class="row" style="padding-top: 20px;" >
                  <div class="col-md-6">
                    <label for="guide" class="visually">Section Name</label>
                    <input type="text" class="form-control" id="guide">
                  </div>
                  <div class="col-md-6" style="padding-top: 20px;" >
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>

                </form>
              </div>
          </div>
        </div>
    </div>
    <div class="row" style="padding-top: 50px; padding-left: 20px;">
      <div class="card col-md-2">
       
          <nav class="nav flex-column">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled">Disabled</a>
          </nav>
       
       
      </div>  
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            Create a new Guide
          </div>
          <div class="card-body">
              <form class="container">
                  <div class="">
                    <label for="guide" class="visually">Guide Name</label>
                    <input type="text" class="form-control" id="guide">
                  </div>
                 
                  <div class="" style="padding-top: 10px;" >
                    <button type="submit" class="btn btn-primary mb-3">Create</button>
                  </div>
                </form>
           
          </div>
         
        </div>
      </div>
      <div class="col-md-7">
        <div class="card text-center">
          <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="#">Recent Post</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Search</a>
              </li>
          </ul>
          </div>
          <div class="card-body">
            <ul class="list-group" style="align-items: flex-start; " >
              <li class="list-group-item">
                <input class="form-check-input me-1"  type="checkbox" value="" aria-label="...">
                First checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Second checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Third checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Fourth checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Fifth checkbox
              </li>
            </ul>
          </div>
      </div>

      </div>
    </div>
  
   
</body>
</html>