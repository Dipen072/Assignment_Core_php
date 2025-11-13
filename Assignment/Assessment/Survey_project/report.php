<?php
include 'db.php';  // Database connection include

// 1️⃣ Get overall average rating and total responses
$sql1 = "SELECT ROUND(AVG(rating),2) AS avg_rating, COUNT(*) AS total FROM responses";
$result1 = $mysqli->query($sql1);
$data1 = $result1->fetch_assoc();
$avg_rating = $data1['avg_rating'] ?? 0;
$total = $data1['total'] ?? 0;

// 2️⃣ Get age group breakdown
$sql2 = "SELECT age_group, COUNT(*) AS cnt, ROUND(AVG(rating),2) AS avg_rating 
         FROM responses 
         GROUP BY age_group
         ORDER BY FIELD(age_group, 'Under 18','18-25','26-40','40+')";
$result2 = $mysqli->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Survey Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg p-4 rounded-4">
      <h2 class="text-center mb-4">📊 Survey Report</h2>

      <p><strong>Total Responses:</strong> <?php echo (int)$total; ?></p>
      <p><strong>Average Rating (Overall):</strong> <?php echo htmlspecialchars($avg_rating); ?></p>

      <h4 class="mt-4">Age Group Breakdown</h4>
      <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
          <tr>
            <th>Age Group</th>
            <th>Responses</th>
            <th>Average Rating</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result2->fetch_assoc()): ?>
            <tr>
              <td><?php echo htmlspecialchars($row['age_group']); ?></td>
              <td><?php echo (int)$row['cnt']; ?></td>
              <td><?php echo htmlspecialchars($row['avg_rating'] ?: '0'); ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      <a href="index.php" class="btn btn-primary mt-3">← Back to Survey Form</a>
    </div>
  </div>
</body>
</html>
