<?php     
if($_SERVER["REQUEST_METHOD"] == "POST") {
$to_email = 'jevlopez47@gmail.com';
$subject = 'Customer inquiry';
$message = $_REQUEST['message'];
$sender = $_REQUEST['email'];
$headers = 'From: '.$sender;
mail($to_email,$subject,$message,$headers);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/34a54bc82b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>TurboStaff</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" aria-current="page" href="#who-we-are">WHO WE ARE</a>
            <a class="nav-link" href="#what-we-offer">WHAT WE OFFER</a>
            <a class="nav-link" href="#contact">CONTACT</a>
            <a class="nav-link contact text-accent" href="#contact-nums"><i class="fas fa-phone-alt me-2"></i>027-980-1411</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="banner section d-flex flex-column pb-5">
      <h1 class="display-1 align-self-center mt-5 pt-5 text-primary text-center" style="text-shadow: 2px 2px 12px black;">WE PROVIDE HIGH-QUALITY SERVICE</h1>
      <i class="fas fa-arrow-down align-self-center mt-auto text-accent"></i>
    </div> 

    <div id="who-we-are" class="who-we-are section container-fluid bg-primary">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="container-fluid">
            <div class="row justify-content-center g-3">
              <div class="col-2 col-md-1 col-lg-2"><hr class="hr-title"></div>
              <div class="col-4 col-sm-3 col-md-2 col-lg-3 col-xl-2">
                <h6 class="text-center section-title">WHO WE ARE</h6>
              </div>
              <div class="col-2 col-md-1 col-lg-2"><hr class="hr-title"></div>
            </div>
          </div>
          <h1 class="text-center text-primary my-5">ECONOMICAL SERVICE WITHOUT COMPROMISE.</h1>
          <p class="text-white">
            <strong>TURBOSTAFF SERVICES</strong> is a sole proprietorship business that provides a full range of messenger services in Metro Manila and some provinces of Luzon, Visayas, and Mindanao
            that focuses on providing professional, classified, high-quality service, customer satisfaction, and reliable partner for all your needs. We offer economical service without compromising the quality of our service.
          </p>
          <p class="text-white">We find ways to improve our ability to add value to our services. We search for every possible opportunity to reduce costs and increase productivity. We take great pride in being a customer-oriented organization, making sure that our customers are satisfied with the tasks we execute for them. Every client is treated not just as customers but as partners, with this approach it has led them to be the preferred vendor for their needs.</p>
        </div>
      </div>
    </div>

    <div class="section">
        <div class="container-md mission text-center">
            <div class="row justify-content-around mb-4 g-4">
                <div class="col-sm-4">
                    <i class="fas fa-crosshairs text-secondary"></i>
                    <h4 class="my-4 text-secondary">Mission</h4>
                    <p class="text-dark">To become the most economical messenger service provider
                    that is fast, efficient and reliable.</p>
                </div>
                <div class="col-sm-4">
                    <i class="far fa-lightbulb text-secondary"></i>
                    <h4 class="my-4 text-secondary">Vision</h4>
                    <p class="text-dark">Our vision is to become the leading messenger service provider nationwide. To provide unrivaled courier services with the aim of providing high-quality standards that meets the changing nature of the industry.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <i class="fas fa-medal text-secondary"></i>
                    <h4 class="my-4 text-secondary">Core Values</h4>
                    <p class="text-dark">We strive to provide great customer service. This includes listening to our clients' needs and taking responsibility. We are committed to becoming the best in the industry and we always strive for excellence.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="banner2">
        <div class="layer section d-flex align-items-center justify-content-center">
            <h1 class="text-accent" style="text-shadow: 2px 2px 10px black;">TURBOSTAFF IS TRUE TO SERVICE</h1>
        </div>
    </div>

    <div id="what-we-offer" class="what-we-offer section container-fluid bg-secondary">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
                  <div class="col-4 col-md-3 col-lg-4 col-xl-3 col-xxl-2">
                    <h6 class="text-center section-title text-secondary">WHAT WE OFFER</h6>
                  </div>
                  <div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
                </div>
              </div>
              <h1 class="text-center text-primary my-5">WE ALWAYS AIM TO EXCEED CLIENT'S EXPECTATIONS.</h1>
              <p class="text-center text-secondary">
                No matter what business you have, our team can do everything for you.
              </p>
            </div>
          </div>
          <div class="row offers mt-5 justify-content-center gy-5">
              <div class="col-sm-5 text-center px-5">
                  <img src="images/sc1.png" class="img-fluid">
                  <h4 class="my-4 text-secondary">Transactions</h4>
                  <p class="text-secondary">We transact for notary and permit submissions to FDA,BOQ, OMB and other
                  Government Agencies.</p>
              </div>
              <div class="col-sm-5 text-center px-5">
                  <img src="images/sc2.png" class="img-fluid">
                  <h4 class="my-4 text-secondary">Printing</h4>
                  <p class="text-secondary">For your documents, we print and photocopy for
                  your site needs.</p>
              </div>
              <div class="col-sm-5 text-center px-5">
                  <img src="images/briefcase.png" class="img-fluid">
                  <h4 class="my-4 text-secondary">Insurance</h4>
                  <p class="text-secondary">We guarantee optimum
                  protection for your
                  valuable items.</p>
              </div>
              <div class="col-sm-5 text-center px-5">
                  <img src="images/fast-delivery.jpg" class="img-fluid">
                  <h4 class="my-4 text-secondary">Nationwide</h4>
                  <p class="text-secondary">We deliver to all major sites and hospitals in the Philippines.</p>
              </div>
              
          </div>
        </div>

        <div id="contact" class="contact-us section container-fluid">
              <div class="row justify-content-center mb-4">
                <div class="col-lg-7">
                  <div class="container-fluid">
                    <div class="row justify-content-center">
                      <div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
                      <div class="col-3 col-md-2 col-lg-4 col-xl-3 col-xxl-2">
                        <h6 class="text-center section-title text-secondary">CONTACT US</h6>
                      </div>
                      <div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
                    </div>
                  </div>
                  <h1 class="text-center text-accent my-5">READY TO SEE WHAT TURBOSTAFF CAN DO?</h1>
                  <p class="text-center text-secondary">
                    Let us show you what our team of professionals
                    can do for you and your business.
                  </p>
                </div>
              </div>
              <div class="container mt-5">
                  <div class="row justify-content-center">
                      <div class="col-md-6 p-5">
                          <h2 id="contact-nums" class="text-secondary">Contact Us</h2>
                          <p class="text-secondary">Your opinions are important to us. Whether it is a simple question or a valuable suggestion, we are here 24/7. You can call us by phone or email us directly.</p>
                          <hr>
                          <i class="fas fa-phone-alt"></i>
                          <p class="d-inline ms-2">027-980-1411</p><br>
                          <i class="fas fa-phone-alt text-secondary"></i>
                          <p class="d-inline ms-2">0917-962-2205</p><br>
                          <i class="fas fa-envelope"></i>
                          <p class="d-inline ms-2">turbostaff.ph@gmail.com</p><br>
                          <i class="fas fa-envelope text-secondary"></i>
                          <p class="d-inline ms-2">book@turbostaffservices.com</p><br>
                      </div>
                      <div class="col-md-6 email p-4">
                          <h5 class="mb-3">EMAIL US</h5>
                          <form method="post" action="index.php">
                            <div class="mb-3">
                              <label for="name" class="form-label">Name*</label>
                              <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email*</label>
                              <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                              <label for="message" class="form-label">Your Message*</label>
                              <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                            </div>
                            
                            <div class="d-grid"><button type="submit" class="btn btn-primary rounded-pill fw-bolder">SUBMIT</button></div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
  </body>
</html>