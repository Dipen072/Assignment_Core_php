<?php include 'db.php'; ?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Survey Form</title></head>
<body>
  <h2>Event Survey</h2>
  <form method="post" action="submit.php">
    <label>Name: <input type="text" name="name" required></label><br><br>

    <label>Age Group:
      <select name="age_group" required>
        <option value="">--Select--</option>
        <option value="Under 18">Under 18</option>
        <option value="18-25">18-25</option>
        <option value="26-40">26-40</option>
        <option value="40+">40+</option>
      </select>
    </label><br><br>

    <label>Satisfaction Rating:
      <select name="rating" required>
        <option value="">--Select--</option>
        <option value="1">1 - Very Bad</option>
        <option value="2">2 - Bad</option>
        <option value="3">3 - Okay</option>
        <option value="4">4 - Good</option>
        <option value="5">5 - Excellent</option>
      </select>
    </label><br><br>

    <label>Feedback:<br>
      <textarea name="feedback" rows="4" cols="40"></textarea>
    </label><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>
