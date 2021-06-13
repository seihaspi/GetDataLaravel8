<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<table class="table">
  <div class="container">
    <div class="row">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name:</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{$user->full_name}}</td>
      <td>{{$user->gender}}</td>
      <td>{{$user->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

