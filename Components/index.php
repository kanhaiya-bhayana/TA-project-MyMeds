<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMeds</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section id="home">
        <header>
            <a href="#"><img src="../Public/images/unnamed-removebg-preview.png" alt="" style="height: 40px;padding: 5px;"></a>
            <ul id="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#register">Register</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </header>
        <div class="container text-center my-5 my-5 p-5">

            <div class="row">
                <div class="col-lg-6 my-5">
                    <img src="..//Public/images/undraw_fill_form_re_cwyf.svg" alt="Registration image"
                        style="height:320px;margin:20px;" class="my-5">
                  </div>
                  <div class="col-lg-6 my-5 p-5">
                    <p style="text-align: justify;
                   text-justify: inter-word;" class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Architecto laboriosam sunt rem deserunt exercitationem, suscipit culpa. Ratione eius accusamus
                        cupiditate aliquid repudiandae soluta quaerat voluptates iste quia, voluptas quas sapiente?</p>
                    <p style="text-align: justify;
                   text-justify: inter-word;" class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Architecto laboriosam sunt rem deserunt exercitationem, suscipit culpa. Ratione eius accusamus
                        cupiditate aliquid repudiandae soluta quaerat voluptates iste quia, voluptas quas sapiente?</p>
                    <p style="text-align: justify;
                   text-justify: inter-word;" class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Architecto laboriosam sunt rem deserunt exercitationem, suscipit culpa. Ratione eius accusamus
                        cupiditate aliquid repudiandae soluta quaerat voluptates iste quia, voluptas quas sapiente?</p>
                        <div class="my-5">
                            <button class="btn btn-primary"><a style="text-decoration: none;color: white;" href="#about">Read More</a></button>
                        </div>
                </div>
            </div>
            
        </div>
    </section>
    <section id="register"><div class="p-5">
        <h3 class="my-5">Create Account</h3>
        <form class="p-2" action="accCreate.php" method="POST">
            <div class="mb-3">
                <label  class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fname">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" >
              <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile No.</label>
                <input type="tel" class="form-control" name="mobileNo">
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="passwd" >
            </div>
            
            <button type="submit" name="accsubmit" class="btn btn-primary">Submit</button>
            <br><br>
            <div style="float:right;margin-right: 50px;">
                <p>If already have an account?</p> &nbsp;
                <button type="submit"  class="btn btn-primary">Login</button>

            </div> 
                
          </form>
    </div></section>
    <section id="about">
        <div class="row my-5 p-5">
            <div class="col-lg-6 my-5">
                <p class="my-5 p-5" style="text-align: justify;
                text-justify: inter-word;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi expedita, consequatur commodi ipsum corporis tempore maiores tenetur facere incidunt quidem libero! Perspiciatis explicabo ipsum ea, eum dolorum eveniet aperiam quasi!
                    Neque a sint magnam dolor, hic eos. Deserunt aperiam quibusdam dicta porro laborum optio obcaecati quisquam repellendus omnis est iste neque illo accusantium quam, culpa dolore nobis error. Commodi, voluptates.
                    Id modi fugit, placeat ratione totam quos! Earum ipsum atque repellendus nesciunt minima distinctio, sunt dicta, unde vero ipsam qui laboriosam, corporis praesentium? Quis quam illum, obcaecati nesciunt quidem consectetur!</p>
            </div>
            <div class="col-lg-6 my-5">
                <img class="my-5" src="..//Public/images/undraw_team_spirit_re_yl1v.svg" alt="Registration image"
                        style="height:320px;margin:20px;">
            </div>
        </div>
       </section>
    <section id="contact"><div class="my-5 p-5">
        <h3 class="my-4">Contact Us</h3>
        <form class="p-4">
            <div class="mb-3">
                <label  class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            
            <button type="submit" class="btn btn-primary my-3">Submit</button>
          </form>
    </div>
    <footer id="footer" class="bg-dark text-light py-3 mt-3">
        <p class="text-center" >Copyright &copy; MyMeds.com</p>
        <button
        type="button"
        class="btn btn-primary btn-floating btn-lg"
        id="btn-back-to-top"
        >
  ^
</button>
    </footer>
</section>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>