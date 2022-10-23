<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Feedback form</title>
</head>

<body>
  <h2>FEED BACK FORM</h2>
  <div class="container">
    <form action="submit.php" method="post">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Your first name.." required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Mail Id</label>
        </div>
        <div class="col-75">
          <input type="email" id="email" name="mailid" placeholder="Your mail id.." required />
        </div>
      </div>
      <div class="row">
        <div class="col-25"></div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="feed_back">Feed Back</label>
        </div>
        <div class="col-75">
          <textarea class="my-text" id="my-text" name="subject" placeholder="Write something.."></textarea>
          <p id="result" class="limitt"></p>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit" />
      </div>
    </form>
  </div>
</body>
<script src="script.js"></script>

</html>