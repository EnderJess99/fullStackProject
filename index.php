<?php
    include("database.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>McRaven</title>
    <link href="Style/raven-club-style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Eagle+Lake&family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    


    <style>
      .membershipStyle {
        border: 2px solid #9D50BB;
        border-radius: 10px;
      }
      .membershipStyle h4 {
        text-align: left;
      }
      .membershipStyle li {
        text-align: left;
        font-size: 1.3em;
      }
      form {
        display: flex;
        border-radius: 10px;
        box-shadow:10px 10px 5px #512A61;
        background-color: #1A1A1A;
        width: 80%;
        margin: auto;
        color: white;
        justify-content: space-around;
      }
      #LeftForm {
        display: flex;
        width: 50%;
        justify-content: space-around;
        margin: 2%;
      }
      #RightForm {
        display: flex;
        width: 50%;
        justify-content: space-around;
        margin: 2%;
      }
      input {
        font-size: 0.8em;
      }
      .submitFmBtn {
        background-color: #9D50BB;
        color: white;
        padding: 1%;
        border-radius: 5px;
        cursor: pointer;
      }
      .refreshFmBtn {
        background-color: #9D50BB;
        color: white;
        padding: 1%;
        border-radius: 5px;
        cursor: pointer;
      }

      table {
        background-color:#1A1A1A;
        border-radius: 10px;
        box-shadow: 10px 10px 5px #512A61;
        color: white;
        text-align: center;
        width: 80%;
        margin:2% auto;
      }
      th {
        border: solid 2px white;
        font-size: 1.3em;
        position: sticky;
        z-index: 2;
        top: 0;
        background-color: #1A1A1A;
      }
      tr {
        font-size: 1.2em;
      }
      tr:nth-child(even) {
        background-color: #3C1F47;
      }
      .tableWrapper {
        overflow: hidden;
        overflow-y: scroll;
        height: 500px;
        margin-top: 2%;
        -ms-overflow-style: none;
        scrollbar-width:none;
      }
      .tableWrapper::-webkit-scrollbar {
        display:none;
      }

      @media only screen 
      and (min-device-width: 300px) 
      and (max-device-width: 1200px) 
      and (-webkit-min-device-pixel-ratio: 1) {
      .memberships {
        width: 100%;
      }
      #MemFlex {
        display: block;
        width: 95%;
        margin: auto;
        padding: 2%;
      }
      .membershipStyle h4 {
        text-align: center;
      }
      .membershipStyle ul {
        border: 1px solid white;
      }
      .membershipStyle li {
        list-style-type: circle;
      }
      form {
        display: block;
        margin: auto;
        width: 100%;
        padding: 2%;
      }
      #LeftForm {
        display: block;
        width: 90%;
      }
      #RightForm {
        display: block;
        width: 90%;
      }
      table {
        display: none;
      }
      }
    </style>



  </head>
  <div id="tree">
  <body>
    <header>
      <img src="images/Group 1.png" alt="Raven Logo">
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="events-rewrite.html">Events</a></li>
          <li><a href="history-rewrite.html">History</a></li>
          <li><a href="ghosts-rewrite.html">Ghosts</a></li>
          <li><a href="index.php">Raven Club</a></li>    
             <!--drop down start-->
          <div class="dropdown">
  
            <section class="dropdown-button">
              <li><a href="tickets-rewrite.html">Tickets</a></li>
            </section>
  
            <section class="dropdown-content">
              <li><a href="faq-rewrite.html">FAQs</a></li>
            </section>
          </div>
  
        </ul>    
      </nav>
    </header>
    <main>
      <h1>The Raven Club</h1>
      <section class="memberships">
        <div id="information">
        <h3>What is the Raven Club?</h3>
          <p>
            Join the Raven Club to recieve exclusive membership perks, offers, and news 
            of the Mcraven Tour Home. Just like the house there are three sections.
            <br>
            Compare options below:
          </p>
        </div>
        
        <h3>Raven Club Memberships</h3>
        <div class="membershipStyle" id="MemFlex">
        
          <div>
            <h4>Bobb Membership</h4>
            <ul>
              <li>Mcraven Newsletter</li>
              <li>Access to Raven Club Chat (Public)</li>
            </ul>
          </div>

          <div>
            <h4>Howard Membership</h4>
            <ul>
              <li>Mcraven Newsletter</li>
              <li>Access to Raven Club Chat (Public and Private)</li>
              <li>Access to Mcraven History Blog</li>
              <li>5% Discount on Gift Shop Items</li>
            </ul>
          </div>

          <div>
            <h4>Glass Membership</h4>
            <ul>
              <li>Mcraven Newsletter</li>
              <li>Access to Raven Club Chat (Public and Private)</li>
              <li>Access to Mcraven History Blog</li>
              <li>5% Discount on Gift Shop Items</li>
              <li>10% Discount on Investigation Tickets</li>
            </ul>
          </div>

        </div>
      </section>

      <section class="MemForm">
      <h1>Join The Raven Club Today!</h1>
      <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <fieldset id="LeftForm" style="font-size: 1.3em; padding:1%; border-color:#9D50BB">
          <div id="LeftLeft" style="text-align:right">
          <label for="fname">First Name:</label>
          <input type="text" id="fname" name="fname">
          <br>
          <label for="lname">Last Name:</label>
          <input type="text" id="lname" name="lname">
          <br>
          <label for="email">Email:</label>
          <input type="text" id="email" name="email">
          <br>
          <label for="phone">Phone:</label>
          <input type="text" id="phone" name="phone">
          </div>


          <div id="LeftRight" style="text-align:right;">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address">
          <br>
          <label for="city">City:</label>
          <input type="text" id="city" name="city">
          <br>
          <label for="state">State:</label>
          <input type="text" id="state" name="state">
          <br>
          <label for="zip">Zip Code:</label>
          <input type="text" id="zip" name="zip">
          </div>
        </fieldset>
        <fieldset id="RightForm" style="font-size:1.3em; padding:0.5%;border-color:#9D50BB;">
          <legend style="text-align:left;">Choose a Membership</legend>
          <div> 
            <input type="radio" id="bobb" name="membership" value="1">
            <label for="bobb">Bobb Membership</label>
            <br>
            <input type="radio" id="howard" name="membership" value="2">
            <label for="howard">Howard Membership</label>
            <br>
            <input type="radio" id="glass" name="membership" value="3">
            <label for="glass">Glass Membership</label>
            <br>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit" class="submitFmBtn" style="font-size:1em;margin:1%;">
            <input type="button" name="refresh" value="Refresh Table" class="refreshFmBtn" onclick=location.reload() style="font-size:1em;margin:1%;">
          </div>
        </fieldset>
          
      </form>
    <div class="tableWrapper">
      <table>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Membership Number</th>
          <th>Joined on</th>
        </tr>
    
        <?php

          $sql = "SELECT iduser, first_name, last_name, email, membership, joined FROM mcraven_user_data;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["iduser"] 
              . "</td><td>" . $row["first_name"] 
              . "</td><td>" . $row["last_name"] 
              . "</td><td>" . $row["email"] 
              . "</td><td>". $row["membership"] 
              . "</td><td>" . $row["joined"] . "</td></tr>";
            }
          }
          else {
            echo "No Results";
          }

        ?>
    </div>
      </table>

      </section>

    </main>
    <footer style="text-align:center">
      <p>&copy; Jessica Hasty || Contact Us: manager@mcravenhouse.com | 601-501-1336 || <a href="faq-rewrite.html" style="color: white">Back To Top</a></p>
      <!--social media links here-->
      <a href="https://www.facebook.com/McRavenTourHome/" class="fa fa-facebook" target="_blank" title="facebook website"></a>
      <a href="https://twitter.com/McRavenTourHome" class="fa fa-twitter" target="_blank" title="twitter website"></a>
    </footer>
    </body>
  </div>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
        $state = filter_input(INPUT_POST, "state", FILTER_SANITIZE_SPECIAL_CHARS);
        $zip = filter_input(INPUT_POST, "zip", FILTER_SANITIZE_SPECIAL_CHARS);
        $membership = filter_input(INPUT_POST, "membership", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($fname)){
            echo"Please enter your first name.";
        }
        elseif (empty($lname)) {
            echo"Please enter your last name.";
        }
        elseif (empty($email)) {
            echo"Please enter a valid email address";
        }
        elseif (empty($phone)) {
            echo"Please enter a valid phone number";
        }
        else{

        $sql = "INSERT INTO mcraven_user_data (first_name, last_name, email, phone, address, city, state, zip, membership)
            VALUES ('$fname', '$lname', '$email', '$phone', '$address', '$city', '$state', '$zip', '$membership')"; 
            mysqli_query($conn, $sql);
            echo"You are now registered.";    
        }

       
    }

    mysqli_close($conn);

?>