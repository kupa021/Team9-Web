<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <td>
    <button class="btn btn-success"><a href="/Team9-Web/subscriptionpage.php" class="text-light">Home</a></button>
    <button class="btn btn-primary my-5"><a href="/Team9-Web/reviewdisplay.php" class="text-light">Reviewers</a></button>
    <button class="btn btn-danger"><a href="/Team9-Web/newsletterread.php" class="text-light"> Subscribers</a></button>
  </td>
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="Rating">Reviewer</th>
      <th scope="Statement">Statement</th>
      <th scope="Rating">Rating</th>
      <th scope="Operation">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include 'stardbconn.php'; // establishes database connection 
    $sql = "select * from review";
    $result=mysqli_query($conn, $sql);
    if($result) {
        while($row=mysqli_fetch_assoc($result)){
            $ID=$row['ID'];
            $statement=$row['statement'];
            $rating=$row['rating'];
            echo '<tr>
            <th scope="row">'.$ID.'</th>
            <td>'.$statement.'</td>
            <td>'.$rating.'</td>
            <td>
                <button class="btn btn-danger"><a href="reviewdelete.php? deleteid='.$ID.'" class="text-light">Delete</a></button>
                
            </td>
          </tr>';
        }
    }
  ?>

    
  </tbody>
</table>
</div>
</body>
</html>