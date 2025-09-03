<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4>Create Account</h4>
                <form method="POST"  action="{{ route('register.store') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name">Name</label>
                       <input id="name" type="text" name="name" value="{{ old('name') }}" required class="form-control" autofocus>
              </div>

              <div class="mb-3">
                        <label for="name">Email</label>
                       <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form-control" autofocus>
              </div>


               <div class="mb-3">
                        <label for="name">Password</label>
                       <input id="password" type="password" name="password" value="{{ old('password') }}" required class="form-control" autofocus>
              </div>


                <div class="mb-3">
                        <label for="name">Confirm Password</label>
                       <input id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required class="form-control" autofocus>
              </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>