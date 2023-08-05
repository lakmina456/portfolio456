<?php session_start(); 
if (!isset($_SESSION['username'])) {
            
            header("Location: index.php");
        }?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./images/1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>My Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/nav.js"></script>
    <script>
            function validateForm() {
              var name = document.forms["contactForm"]["name"].value;
              var email = document.forms["contactForm"]["email"].value;
              var phone = document.forms["contactForm"]["phone"].value;
        
              if (name == "") {
                window.alert("Name must be filled out");
                return false;
              }
        
              var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if (email == "") {
                alert("Email must be filled out");
                return false;
              } else if (!email.match(emailRegex)) {
                alert("Invalid email address");
                return false;
              }
        
              var phoneRegex = /^\d{10}$/;
              if (phone == "") {
                alert("Phone number must be filled out");
                return false;
              } else if (!phone.match(phoneRegex)) {
                alert("Invalid phone number");
                return false;
              }
              return true;
            }
            function showDropdown() {
        document.getElementById("dropdownContent").style.display = "block";
    }

    function hideDropdown() {
        document.getElementById("dropdownContent").style.display = "none";
    }

          </script>
    <style>
          .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 100px;
        padding: 8px;
        z-index: 1;
    }

    .dropdown-content a {
        display: block;
        color: #333;
        text-decoration: none;
        padding: 4px;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
   
    </style>
    
</head>

<body>
        
    <nav id="navbar" class="black navbar navbar-expand-lg fixed-top">
        <img src="./images/1.png" style="width: 70px; height: 70px;">
        <a id="nav-logo" class="navbar-brand" href="index.php">isuru lakmina</a>

       
        <button class="navbar-toggler" id="nav-btn" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-btn"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul id="nav-ul" class="navbar-nav">
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="index1.php">Home</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#about-me">About</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#my-portfolio">Portfolio</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#section-contact">Contact</a>
                </li>
            <?php
                
                    
                
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    
                    echo '<li class="nav-item navigation-list">';
                    echo '<div class="dropdown">';
                    echo '<span class="nav-link nav-custom-link dropdown-toggle" id="dropdownMenuButton">Welcome,' . $username . '</span>';
                    echo '<div class="dropdown-content" id="dropdownContent">';
                    echo '<a href="logout.php">Logout</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';
                } else {
                    echo '<li class="nav-item navigation-list">';
                    echo '<a class="nav-link nav-custom-link" href="index.php">Login</a>';
                    echo '</li>';
                }

        
        ?>
            </ul>
        </div>
    </nav>
 <main class="container-fluid main p-0">
        <section class="container-fluid section-1">
                
            <div class="row section-1-inner">
                
                <div class="col section-1-inner-col">
                    
                    <div class="col section-1-inner-col">
                             
                        <div class="image-frame mx-auto my-1 section" >
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-me" class="container-fluid section-2 section">
            <div class="row">
                <div class="col text-center section">
                    <div class="primary-heading " style="color:white;">
                        I am a <span class="fw-bold primary-heading-bold" >Freelancer</span>
                    </div>
                    <div class="paragraph mx-auto mt-2" style="color:white;">
                        Hello! My name is Isuru Lakmina, I'm creative and professional graphic designer who has experience for 8+ years. I currently studying in an university related IT.I have designed posters, media contents, banners for local companies .I have great motivation and passion about my work. I guarantee that provide my best service for you!
                    </div>
                         
                    
                      
                </div>
            </div>
            
        </section>
   
       


        <section class=" container-fluid section-3 ">
            <div class="row section-3-inner section">
                <div class="col-lg-6 section-3-inner-col-left text-center">
                    <div class="primary-heading section-3-heading text-lg-end">
                        I Am <span class="fw-bold">Designer</span>
                    </div>
                    <div class="section-3-image-left text-lg-end">
                        <img src="./img/Designer.png" class="img-fluid sec3-images sec3-img-left" alt="">
                    </div>
                </div>
                <div class="col-lg-6 section-3-inner-col-right text-center mt-5 mt-lg-0">
                    <div class="section-3-image-right text-lg-start">
                        <img src="./img/Designer2.jpg" class="img-fluid sec3-images sec3-img-right" alt="">
                    </div>
                    <div class="section-3-button-right text-lg-start">
                    </div>
                </div>
            </div>
            <div class="background-section-3"></div>
        </section>
        <div id="skills" class="col">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="container">
                <h2>My Skills </h2>
                <div class="skills">
                    <div class="details">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="bar">
                        <div id="html-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>CSS</span>
                        <span>75%</span>
                    </div>
                    <div class="bar">
                        <div id="css-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>Javascript</span>
                        <span>72%</span>
                    </div>
                    <div class="bar">
                        <div id="js-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>C++</span>
                        <span>40%</span>
                    </div>
                    <div class="bar">
                        <div id="jQuery-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>C</span>
                        <span>40%</span>
                    </div>
                    <div class="bar">
                        <div id="js-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>Python</span>
                        <span>40%</span>
                    </div>
                    <div class="bar">
                        <div id="js-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="bold-line"></div>


       
        <section id="my-portfolio" class="container-fluid section-5">
           
            <div class="row">
                <div class="col text-center">
                    <div class="sec5-portfolio-head">
                        My Portfolio
                    </div>
                </div>
            </div>
        </section>
                
                    <center>
                        <div class="slider_container">
                            <section class="slider">
                                <div class="slide one">
                                    <img src="./img/slider1.jpg" alt="image1">
                                </div>
                                <div class="slide two">
                                    <img src="./img/slider2.jpg" alt="image2">
                                </div>
                                <div class="slide three">
                                    <img src="./img/slider3.jpg" alt="image3">
                                </div>
                            </section>
                            <div class="slider_nav">
                                <button class="prev_btn">&lt;</button>
                                <button class="next_btn">&gt;</button>
                            </div>
                    </div>
                </center>
                    <br>
        
                    <?php 
                    require_once "php/data/db_functions.php";
                                        $projects = get_projects();
                                        $result = get_rows();
                    ?>
            
                <center>
                <button class="add-button" onclick="openPopup()">Add New Project</button>                
                </center>
                <style>
                    /* CSS for Popup */
                    
                    .add-button {
                        display: block;
                        margin: 20px auto;
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        font-size: 16px;
                        cursor: pointer;
                    }
                    #popup {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        z-index: 9999;
                    }

                    .popup-content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: #f9f9f9;
                        padding: 30px;
                        border-radius: 10px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    }

                    .popup-content h2 {
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .popup-content label {
                        display: block;
                        margin-bottom: 10px;
                    }

                    .popup-content input[type="text"],
                    .popup-content textarea {
                        width: 100%;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }

                    .popup-content input[type="file"] {
                        display: block;
                        margin-top: 5px;
                    }

                    .popup-content input[type="submit"] {
                        display: block;
                        width: 100%;
                        margin-top: 20px;
                        padding: 10px;
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                    }

                    .close {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        font-size: 24px;
                        cursor: pointer;
                    }

                </style>
                <script>
                     function openPopup() {
                        document.getElementById('popup').style.display = 'block';
                    }

                    function closePopup() {
                        document.getElementById('popup').style.display = 'none';
                    }
                </script>
                <section>
                <div id="popup">
                    <div class="popup-content">
                        <span class="close" onclick="closePopup()">&times;</span>
                        <form action="php/data/add_project.php" method="post" enctype="multipart/form-data">
                            <h2>Add New Project</h2>
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" required>

                            <label for="description">Description:</label>
                            <textarea id="description" name="description" required></textarea>

                            <label for="image">Upload Image:</label>
                            <input type="file" id="image" name="image" accept="image/*" required>

                            <input type="submit" value="Add Project">
                        </form>
                    </div>
                </div>
                
            </section>
        <section>
        <style>
            .image-containerr {
                position: relative;
            }

            .overlay {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
            }

            .image-containerr:hover .overlay {
                opacity: 1;
            }

            .edit-button,
            .delete-button {
                display: inline-block;
                padding: 10px 15px;
                border: none;
                border-radius: 50px;
                cursor: pointer;
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-decoration: none;
                transition: opacity 0.3s ease; 
            }


            .edit-button {
                background-color: #4CAF50; 
                color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .delete-button {
                background-color:#c6201d;
                color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }


            .edit-button:hover,
            .delete-button:hover {
                filter: brightness(95%);
            }
        </style>
        <script>
            function deleteProject(projectID) {
                if (confirm("Are you sure you want to delete this project?")) {
                    fetch("php/data/delete_project.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "id=" + projectID
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === "success") {

                            location.reload();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error deleting project:", error);
                    });
                }
            }
        </script>
    <div class="mt-4 mt-md-5 work-gallery-row">
        <div class="masonry">
            <?php $count = 0; foreach ($projects as $project) {if ($count >= 8){break; } ?>
                <div class="grid">
                    <div class="image-container" style="position: relative;">
                        <img src="<?php echo $project['Image']; ?>" class="img-fluid image-work">
                        
                    </div>
                    
                    <div class="grid__body">
                        <div class="relative">
                            <div class="image-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 1; transition: opacity 0.3s;">
                            <button class="edit-button"><?php echo '<a style="text-decoration:none;color: inherit;" href="php/data/edit_project.php?id='.$project['ID'].'">Edit</a>';?></button>
                            <button class="delete-button" onclick="deleteProject(<?php echo $project['ID']; ?>)">Delete</button>
                        </div>
                            <p class="grid__author">BY <?php echo $project['Username']; ?></p>
                        </div>
                        <div class="mt-auto">
                            <span class="grid__tag">#<?php echo $project['Title']; ?></span>
                        </div>
                    </div>
                </div>
                <?php $count++;
                } ?>
            
       
        
    </div>
    </div>
</section>
                <?php
                require_once "php/data/db_functions.php";
                $gets = get1_projects1();
                ?>
       
         <section>        
            <div id="image-container" class="hidden-images">
                <div class="mt-0 mt-md-0 work-gallery-row">
                <div class="masonry">
                <?php foreach ($gets as $get){ ?>
                <div class="grid">
                    <div class="image-container" style="position: relative;">
                        <img src="<?php echo $get['Image']; ?>" class="img-fluid image-work">
                        
                    </div>
                    
                    <div class="grid__body">
                        <div class="relative">
                            <div class="image-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 1; transition: opacity 0.3s;">
                            <button class="edit-button"><?php echo '<a style="text-decoration:none;color: inherit;" href="php/data/edit_project.php?id='.$get['ID'].'">Edit</a>';?></button>
                            <button class="delete-button" onclick="deleteProject(<?php echo $get['ID']; ?>)">Delete</button>
                        </div>
                            <p class="grid__author">BY <?php echo $get['Username']; ?></p>
                        </div>
                        <div class="mt-auto">
                            <span class="grid__tag">#<?php echo $get['Title']; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                }
                 ?>

                </div>
            </div>
        </div>
                 
                
             
            </section>
       <section>
            <div >
                    <div class="section-5-button mt-4 mt-sm-5 text-center">
                        <button id="toggle-button" class="sec5-btn text-uppercase fw-bold" onclick="toggleImages()">View More</button>
                    </div>
            </div>
            </section>
        <section id="section-contact" class="container-fluid ">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="contact-heading">
                        Contact Me
                    </div>
                   
                </div>
            </div>
                                                                                                                                         <div class="row card-row-1">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card" style="text-align: center;">
                        
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Address</div>
                            <div class="card-para">No 500,Mahaedanda,Karandeniya</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card mt-5 mt-md-0">           
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Contact Number</div>
                            <div class="card-para"><a class="card-link" href="https://wa.me/+94771234567">+94771234567</div></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card mt-5 mt-lg-0">
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Email Address</div>
                            <div class="card-para"><a class="card-link" href="mailto:email@example.com">email@gmail.com</div></a>
                        </div>
                    </div>
                    
                </div>      
            </div>
            
            <div class="row">
                <div class="col-12 text-center">
                            <h1>Contact Form</h1>
                            
                            <?php
                                function sanitize_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }

                                function validate_name($name) {
                                    return preg_match("/^[a-zA-Z ]*$/", $name);
                                }

                                function validate_email($email) {
                                    return filter_var($email, FILTER_VALIDATE_EMAIL);
                                }

                                function validate_message($message) {
                                    $message = sanitize_input($message);
                                    return $message;
                                }

                                $nameErr = $emailErr = $messageErr = '';
                                $success = false;

                                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                    $name = $_POST["name"];
                                    if (empty($name) || !validate_name($name)) {
                                        $nameErr = 'Please enter a valid name (letters and spaces only).';
                                    } else {
                                        $name = sanitize_input($name);
                                    }

                                    $email = $_POST["email"];
                                    if (empty($email) || !validate_email($email)) {
                                        $emailErr = 'Please enter a valid email address.';
                                    } else {
                                        $email = sanitize_input($email);
                                    }

                                    $message = $_POST["message"];
                                    if (empty($message)) {
                                        $messageErr = 'Please enter a message.';
                                    } else {
                                        $message = validate_message($message);
                                    }

                                    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
                                        $success = true;
                                    }
                                }
                                ?>



                            

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required><br>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required><br>

                        <label for="message">Message:</label><br>
                        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br>

                        <input type="submit" value="Submit">
                    </form>
                    <?php
                        if ($success) {
                            echo '<script>window.location.href = "php/success.php";</script>';
                        }
                        ?>        




                </div>
            </div>
           </div>
            
           </div>
          
           </div>
           
        </section>
       

        <section class="container-fluid section-7 section">
            <div class="row section-7-inner mx-auto text-center">
                <div class="col">
                    <div class="section-7-text ">
                        Stay in touch with me! Please follow me on social media.
                    </div>
                    <div class="section-7-icons">
                        <a href="https://web.facebook.com/isuru.lakmina.20/" class="social-icons"><img src="./img/fb.jpg"style="width:100px;height:100px;"></a>
                        <a href="https://twitter.com/lakmina37237112" class="social-icons"><img src="./img/tw.jpg"style="width:100px;height:100px;"></a>
                        <a href="https://www.instagram.com/isurulakmina/?fbclid=IwAR0oK8_Bo5pViljIj-0aMxjyHDwbgRkh-DaCcNLK31f12WYRhCP_5CtdFxs" class="social-icons"><img src="./img/ins.jpg"style="width:100px;height:100px;"></a>
                        <a href="https://www.linkedin.com/in/isuru-lakmina-0a655720a?fbclid=IwAR2BZN5XGm3XOqfcvLdA8Y14iNqogVoFWcy2J17NdCVLK862oPz-WpbdhPM" class="social-icons"><img src="./img/lin.jpg"style="width:100px;height:100px;"></a>
                    </div>
                </div>
            </div>
            
        </section>
        <footer class="container-fluid footer">
            <hr style="border-bottom: 1px solid #FFFFFF;">
            <div class="row section-footer-inner">
                <div class="col">
                    <div class="footer-copyright text-center mt-2">
                      Copyright @2023 - ISURU LAKMINA
                    </div>
                </div>
            </div>
        </footer>
        
    </main>
           
        
</body>

      
</html>