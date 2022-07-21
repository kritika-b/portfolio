<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kritika's Portfolio | Mail Me</title>
    <link rel="icon" href="img/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/mail.css"/>
  </head>
  <body>
    <div class="nav">
      <a class="home" href="index.html">Home</a>
      <a class="about" href="about.html">About</a>
      <a class="mailme" href="mailMe.php">Mail Me</a>
    </div>

    <div class="bookmark"></div>
<div class = "mailMe">
    <div class="getInTouch">
      <p class="txtGet">Get in touch</p>

      <form action="storeEmailDb.php" method="post" >
        <div class="field">
          <label for="name"></label>
          <input name="name" type="text" placeholder="Name" required />
        </div>
        <div class="field">
          <label for="email"></label>
          <input name="email" type="email" placeholder="Email" required />
        </div>
        <div class="field">
          <label for="message"></label>
          <textarea name="message" placeholder="Message" required></textarea>
        </div>
        <button class="btn" type="submit" name="submit">Send</button>
      </form>

      <div class="verticalLine"></div>
      <div class="circle"></div>
      <div class="mailImage"></div>
      </div>
    </div>
    <footer>
      <p class="connect">
        <span class="txt5">Connect With <strong>ME</strong></span>
        <span class="giveSpace"></span>
        <a href="" class="insta"></a>
        <a href="" class="twitter"></a>
        <a href="" class="linkedin"></a>
      </p>
    </footer>
    <!-- <script>
        let form = document.getElementsByTagName("form")[0];
        form.addEventListener("submit", (e) => {
          e.preventDefault();
          alert("Form Submitted!");
        });
    </script> -->
  </body>
</html>
