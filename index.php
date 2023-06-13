
<!DOCTYPE html>
<html>

<head>
  <title>IT Academy Enrollment Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form-container">
    <h2 class="text-center">IT Academy Enrollment Form</h2>
    <form action="submit_form.php" method="POST">
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" class="form-control" id="full_name" name="full_name"required>
      </div>
      <div class="form-group">
        <label for="date-of-birth">Date of Birth</label>
        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"required>
      </div>
      <div class="form-group">
        <label>Sex</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sex" id="male" value="male" required>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sex" id="female" value="female" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <div class="form-group">
        <label for="date-of-stated">Date Enrolled</label>
        <input type="date" class="form-control" id="date_of_stated" name="date_of_stated" required>
      </div>
      <div class="form-group">
        <label for="country">Country of Location</label>
        <input type="text" class="form-control" id="country" name="country" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="contact-number">Contact Number</label>
        <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
      </div>
      <div class="form-group">
        <label for="it_knowledge">IT Knowledge</label><br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="it_knowledge" id="beginner" value="beginner" required>
          <label class="form-check-label" for="beginner">Beginner</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="it_knowledge" id="intermediate" value="intermediate" required>
          <label class="form-check-label" for="intermediate">Intermediate</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="it_knowledge" id="comfortable" value="comfortable" required>
          <label class="form-check-label" for="comfortable">Comfortable</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="it_knowledge" id="advanced" value="advanced" required>
          <label class="form-check-label" for="advanced">Advanced</label>
        </div>
      </div>
      <div class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


