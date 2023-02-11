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

    <title>Dynamic Form</title>
  </head>
  <body>
    <!-- multistep form -->
    <form id="msform" method="get" action="">
      <!-- progressbar -->
      <ul id="progressbar">
        <li class="active">Questions</li>
        <li>Form Design</li>
        <li>Copy LInk</li>
      </ul>
      <!-- fieldsets -->
      <fieldset>
        <h2 class="fs-title">Questions List</h2>
        <div class="question" style="text-align: left">
          <div style="display: flex">
            <input
              class="form-check-input"
              type="checkbox"
              value="<div class='question' style='text-align: left'>
              <h3 class='fs-subtitle'>Question No. 1</h3>
              <h5>Why do you wnat to apply for this internship.</h5>
              <input class='field' type='text' name='wantToDo' />
              </div>"
              name="que1"
              id="flexCheckDefault"
              style="margin-right: 10px; margin-top: 0px"
            />
            <h3 class="fs-subtitle">Question No. 1</h3>
          </div>
          <h5>Why do you wnat to apply for this internship.</h5>
        </div>
        <div class="question" style="text-align: left">
          <div style="display: flex">
            <input
              class="form-check-input"
              type="checkbox"
              value="que2"
              id="flexCheckDefault"
              style="margin-right: 10px; margin-top: 0px"
            />
            <h3 class="fs-subtitle">Question No. 2</h3>
          </div>
          <h5>Why do you wnat to apply for this internship.</h5>
        </div>
        <div class="question" style="text-align: left">
          <div style="display: flex">
            <input
              class="form-check-input"
              type="checkbox"
              value="que3"
              id="flexCheckDefault"
              style="margin-right: 10px; margin-top: 0px"
            />
            <h3 class="fs-subtitle">Question No. 3</h3>
          </div>
          <h5>Why do you wnat to apply for this internship.</h5>
        </div>
        <div class="question" style="text-align: left">
          <div style="display: flex">
            <input
              class="form-check-input"
              type="checkbox"
              value="que4"
              id="flexCheckDefault"
              style="margin-right: 10px; margin-top: 0px"
            />
            <h3 class="fs-subtitle">Question No. 4</h3>
          </div>
          <h5>Why do you wnat to apply for this internship.</h5>
        </div>
        <div class="question" style="text-align: left">
          <div style="display: flex">
            <input
              class="form-check-input"
              type="checkbox"
              value="que5"
              id="flexCheckDefault"
              style="margin-right: 10px; margin-top: 0px"
            />
            <h3 class="fs-subtitle">Question No. 5</h3>
          </div>
          <h5>Why do you wnat to apply for this internship.</h5>
        </div>
        <!-- <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="Password" />
        <input type="password" name="cpass" placeholder="Confirm Password" /> -->
        <input type="submit" name="next" class="action-button" value="Submit" />
        <input
          type="button"
          name="next"
          class="next action-button"
          value="Next"
        />
      </fieldset>
      <fieldset>
        <h2 class="fs-title">Form Design</h2>
        <?php 
        echo $_GET['que1'];

        ?>
        <!-- <input type="text" name="twitter" placeholder="Twitter" />
        <input type="text" name="facebook" placeholder="Facebook" />
        <input type="text" name="gplus" placeholder="Google Plus" /> -->
        <input
          type="button"
          name="previous"
          class="previous action-button"
          value="Previous"
        />
        <input
          type="button"
          name="next"
          class="next action-button"
          value="Next"
        />
      </fieldset>
      <fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <input type="text" name="phone" placeholder="Phone" />
        <textarea name="address" placeholder="Address"></textarea>
        <input
          type="button"
          name="previous"
          class="previous action-button"
          value="Previous"
        />
        <a
          href="https://twitter.com/GoktepeAtakan"
          class="submit action-button"
          target="_top"
          >Submit</a
        >
      </fieldset>
    </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script src="./custom.js"></script>
  </body>
</html>
