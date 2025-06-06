<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

        <div class="container">
      <div>
        <h3>Personal</h3>
        <h5><span>10</span> / Mo</h5>
        <p><span>free</span> weekly meeting</p>
        <p><span>1x</span> monthly call</p>
        <p><span>unlimited</span> messenger chats</p>
        <p><span>free</span> control panel access</p>
        <p><span>1x</span> face to face meeting</p>
        <button type="button">buy now</button>
      </div>
      <div>
        <!-- Sticky "Most Popular" Badge -->
        <div class="head">most popular</div>
        <h3>business</h3>
        <h5><span>15</span> / Mo</h5>
        <p><span>free</span> weekly meeting</p>
        <p><span>1x</span> monthly call</p>
        <p><span>unlimited</span> messenger chats</p>
        <p><span>free</span> control panel access</p>
        <p><span>1x</span> face to face meeting</p>
        <button type="button">buy now</button>
      </div>
      <div>
        <h3>enterprise</h3>
        <h5><span>20</span> / Mo</h5>
        <p><span>free</span> weekly meeting</p>
        <p><span>1x</span> monthly call</p>
        <p><span>unlimited</span> messenger chats</p>
        <p><span>free</span> control panel access</p>
        <p><span>1x</span> face to face meeting</p>
        <button type="button">buy now</button>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: capitalize;
      }

      @media (max-width: 768px) {
        .container > div {
          min-width: 80%;
        }
      }

      /* Flexbox container for responsive layout */
      .container {
        margin: 30px auto;
        padding: 40px 10px;
        max-width: 1000px;
        min-width: 200px;
        background-color: #eee;
        display: flex;
        flex-flow: wrap;
        justify-content: center;
        align-items: center;
        gap: 30px;
      }

      .container > div {
        max-width: calc(100% / 3);
        min-width: 300px;
        height: 380px;
        background-color: #fff;
        text-align: center;
      }

      h3 {
        margin: 40px 0 10px;
      }

      h5 {
        color: grey;
        margin-bottom: 20px;
      }

      h5 > span {
        font-size: 30px;
        color: #00b7ff;
        &::before {
          content: "$";
          font-size: smaller;
          vertical-align: top;
        }
      }

      p {
        color: gray;
        margin-bottom: 15px;
      }

      button {
        all: initial;
        background-color: #00b7ff;
        padding: 10px 20px;
        margin-top: 10px;
        border-radius: 20px;
        color: white;
      }

      button:hover {
        background-color: #0084ff;
        transform: scale(1.05);
        transition: all 0.3s ease;
      }

      /* the sticky header */

      div:nth-child(2) {
        position: relative;
        & .head {
          position: absolute;
          background-color: #00b7ff;
          color: white;
          width: 80%;
          height: 30px;
          padding: 5px;
          font-size: 0.8em;
          top: -15px;
          left: 50%;
          transform: translateX(-50%);
          &::before,
          &::after {
            content: "";
            position: absolute;
            transform: rotate(45deg);
            border: 10px solid #0084ff;
          }
          &::before {
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            left: -10px;
          }
          &::after {
            border-left-color: transparent;
            border-bottom-color: transparent;
            border-right-color: transparent;
            right: -10px;
          }
        }
      }
    </style>
</body>

</html>