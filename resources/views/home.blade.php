<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ URL::to('style1.css') }}">
@include('Navbar')

<br /><br />
<p class="simple">Duration of Paper is 1 Hour Only...</p>
<div class="card ml-4">
  <div class="card-header bold text-bold">
    <h5>Exam Form</h5>
  </div>
  <div class="card-body">
    
    <p class="card-text">All Details are mandatory...</p>
    <form action="exam" method="post">
      @csrf
    <div class="form">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="First Name"> <br />
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com"> <br />
    <label for="exampleFormControlInput1" class="form-label">Seat No.</label>
    <input type="text" class="form-control" id="seat" name="seat" placeholder="12345"> <br />
    <button type="submit" class="btn btn-primary mb-3">Confirm</button>

    </div>
    </form>
    
  </div>
  <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>