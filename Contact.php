<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container mx-auto">
   <!-- Wrapper container -->
<div class="container py-4">
<!-- Bootstrap 5 starter form -->
<form id="contactForm">
<h1 class="my-5">Contact Form</h1>
  <!-- Name input -->
  <div class="mb-3">
    <label class="form-label" for="name">Name</label>
    <input class="form-control" id="name" type="text" placeholder="Enter Your Full Name" data-sb-validations="required" />
    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
  </div>
  <!-- Email address input -->
  <div class="mb-3">
    <label class="form-label" for="emailAddress">Email Address</label>
    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>
  <!-- Message input -->
  <div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" id="message" type="text" placeholder="Message Your Query Here" style="height: 10rem;" data-sb-validations="required"></textarea>
    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
  </div>
  <!-- Form submissions success message -->
  <div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">Form submission successful!</div>
  </div>
  <!-- Form submissions error message -->
  <div class="d-none" id="submitErrorMessage">
    <div class="text-center text-danger mb-3">Error sending message!</div>
  </div>
  <!-- Form submit button -->
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
  </div>
</form>
</div>
    </div>

    </body>
</html>