<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM data";
  $result = $conn->query($sql);
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
        body{
            margin: auto;
        }
        
        #b{
            height: 300px;
            width: 100%;
            background-color:antiquewhite;
            display: none;
            padding:20px;
        }
        #c{
            height: 40px;
            width: 40px;
            background-color:black;
            text-align:center;
            margin-top:10px;
            cursor:pointer;
            margin-left:5px;
        }
        #c h4 {
          color:white;
          margin:0;
          text-align:center;
          justify-content:center;
          margin-top:5px;
        }
        #link {
            color:#65a765;
        }
        #link:hover {
            color:#ADD8E6;
        }
        p {
            font-weight: 700;
         }

    </style>

    <title>Dynamic Form</title>
  </head>
  <body style="padding-bottom:40px;">
    <!-- multistep form -->
    <div class="contain container">
    <form id="msform" method="get" action="form.php">
      <!-- fieldsets -->
        <h2 class="fs-title">Questions List</h2>
        <div class="question" style="text-align: left">
        <div style="display: flex">
          <input type="checkbox" class="form-check-input" onClick="toggle(this)" style="margin-bottom:40px;margin-top:0px;margin-right:10px;">
            <h3 class="fs-subtitle">Toggle all checkboxes</h3>
            <!-- new button for basic questions -->
            <input type="checkbox" class="form-check-input" onClick="toggleBasic(this)" style="margin-bottom:40px;margin-top:0px;margin-right:10px;margin-left:20px;">
            <h3 class="fs-subtitle">Toggle all Basic question</h3>
        </div>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = "que" . $row["question_id"];
                if(isset($_GET[$id])){
                $data = $_GET[$id];
                if($row["question_id"] == $data) {
              ?>
              <div class="question" style="text-align: left">
                  <div style="display: flex;">
                    <input
                      class="form-check-input selector <?php echo $row["category"]?>"
                      type="checkbox"
                      value="<?php echo $row["question_id"]?>"
                      name="que<?php echo $row["question_id"]?>"
                      id="flexCheckDefault"
                      style="margin-right: 10px; margin-top: 0px"
                    />
                    <h3 class="fs-subtitle">Question No. <?php echo $row["question_id"]?></h3>
                  </div>
                  <div>
                  <h5><?php echo $row["question_text"]?></h5>
                  <input class="field" type="<?php echo $row["input_type"]?>" name="<?php echo $row["question_id"]?>" />
                  </div>
                </div>
              <?php
              }
                }
            }
          } else {
            echo "0 results";
          }
          
          $conn->close();
        ?>

        <div style="justify-content:center;text-align:center;">
          <small><a id="link"></a></small>
        </div>
        
        <div style="justify-content:center;text-align:center;">
            <input type="button" name="getlink" class="clipboard action-button" value="Get Link" />
            <p>click the button to copy the URL</p>

        </div>
    </form>
        </div>
      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script src="./custom.js"></script>
    <script language="JavaScript">
    function toggle(source) {
      checkboxes = document.getElementsByClassName('selector');
      for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
      }
    }
    </script>
    <script language="JavaScript">
    function toggleBasic(source) {
      checkboxes = document.getElementsByClassName('basic');
      for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
      }
    }
    </script>
    <script>
        var $temp = $("<input>");
        var $url = $(location).attr('href');
        document.getElementById("link").innerHTML = $url;

        $('.clipboard').on('click', function() {
          $("body").append($temp);
          $temp.val($url).select();
          document.execCommand("copy");
          $temp.remove();
          $("p").text("URL copied!");
        })
    </script>
    <script src="./jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#a").click(function(){
                $("#b").slideDown(500);
            })
        })
        $(document).ready(function(){
            $("#c").click(function(){
                $("#b").slideUp(500);
            })
        })
    </script>
  </body>
</html>