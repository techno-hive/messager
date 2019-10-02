<!DOCTYPE html>
    <html lang="en">
    <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <title>Send Sms</title>
    </head>
        <body>

          <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

          <h3>Send Sms</h3>

          <form action="{{route('sendsms')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Client Name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput" placeholder="John Doe" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" id="exampleFormControlInput1" placeholder="+25471234567" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter Your Message</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
    </body>
    </html>