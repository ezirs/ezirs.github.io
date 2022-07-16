<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Portfolio | Yorick Yoranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link rel="icon" type="image/png" href="img/icon/Ezirs.jpg" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top" style="background-color: #222222">
        <div class="container">
            <a class="navbar-brand" href="#">Yorick Yoranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto list-group" id="list">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div data-bs-spy="scroll" data-bs-target="#list" data-bs-smooth-scroll="true" tabindex="0">
        <section id="home" class="text-center text-white" style="background-color: #333333">
            <div class="p-5">
                <img src="img/myfoto.jpeg" alt="Yorick Yoranda" width="200" class="rounded-circle img-thumbnail" />
                <h1>Yorick Yoranda</h1>
                <p>Student | STMIK Pontianak</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#6c757d" fill-opacity="1"
                    d="M0,192L0,224L144,224L144,96L288,96L288,192L432,192L432,0L576,0L576,128L720,128L720,96L864,96L864,32L1008,32L1008,224L1152,224L1152,96L1296,96L1296,160L1440,160L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z">
                </path>
            </svg>
        </section>

        <section id="about" class="text-white" style="background-color: #6c757d">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h1>About Me</h1>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4 mb-3">
                        <p data-aos="zoom-in" data-aos-offset="200" data-aos-duration="500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corporis officia velit animi
                            beatae numquam quo laboriosam quae eos nostrum? Placeat, deleniti. Ad adipisci aut
                            voluptatem ex tempore mollitia
                            quisquam.
                        </p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <p data-aos="zoom-in" data-aos-offset="300" data-aos-duration="500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corporis officia velit animi
                            beatae numquam quo laboriosam quae eos nostrum? Placeat, deleniti. Ad adipisci aut
                            voluptatem ex tempore mollitia
                            quisquam.
                        </p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#333333" fill-opacity="1"
                    d="M0,192L0,224L144,224L144,96L288,96L288,192L432,192L432,0L576,0L576,128L720,128L720,96L864,96L864,32L1008,32L1008,224L1152,224L1152,96L1296,96L1296,160L1440,160L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z">
                </path>
            </svg>
        </section>

        <section id="projects" style="background-color: #333333">
            <div class="container">
                <div class="row text-center mb-3 text-white">
                    <div class="col">
                        <h1>My Projects</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-3">
                        <div class="card" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1500">
                            <img src="img/projects/img (4).jpg" class="card-img-top" alt="Project 1" />
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1500">
                            <img src="img/projects/img (2).jpg" class="card-img-top" alt="Project 2" />
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1500">
                            <img src="img/projects/img (3).jpg" class="card-img-top" alt="Project 3" />
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card" data-aos="fade-up" data-aos-offset="400" data-aos-duration="1500">
                            <img src="img/projects/img (5).jpg" class="card-img-top" alt="Project 4" />
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#6c757d" fill-opacity="1"
                    d="M0,288L0,224L180,224L180,64L360,64L360,160L540,160L540,64L720,64L720,160L900,160L900,256L1080,256L1080,160L1260,160L1260,32L1440,32L1440,320L1260,320L1260,320L1080,320L1080,320L900,320L900,320L720,320L720,320L540,320L540,320L360,320L360,320L180,320L180,320L0,320L0,320Z">
                </path>
            </svg>
        </section>

        <section id="contact" style="background-color: #6c757d">
            <div class="container">
                <div class="row text-center mb-3 text-white">
                    <div class="col">
                        <h1>Contact Me</h1>
                    </div>
                </div>
                <div class="row justify-content-center p-2">
                    <div class="col-md-6 shadow-lg p-3 p-md-5 rounded-5 bg-light" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="2000">
                        <form id="contactForm" method="POST" enctype="multipart/form-data" class="mb-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    aria-describedby="email" required />
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message"
                                    style="height: 120px; min-height: 120px; max-height: 500px" required></textarea>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto" id="btn">
                                <button type="submit" name="submit" class="btn btn-outline-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#222222" fill-opacity="1"
                    d="M0,288L0,224L180,224L180,64L360,64L360,160L540,160L540,64L720,64L720,160L900,160L900,256L1080,256L1080,160L1260,160L1260,32L1440,32L1440,320L1260,320L1260,320L1080,320L1080,320L900,320L900,320L720,320L720,320L540,320L540,320L360,320L360,320L180,320L180,320L0,320L0,320Z">
                </path>
            </svg>
        </section>

        <footer class="py-3 border-top border-white" style="background-color: #222222">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="text-white">© <?= date('Y') ?> Yorick Yoranda</span>
                    </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="me-3">
                            <a class="btn text-white" href="http://ezirsw3b.epizy.com/" target="_blank"><i
                                    class="bi bi-browser-edge"></i></a>
                        </li>
                        <li class="me-3">
                            <a class="btn text-white" href="https://instagram.com/yorandayorick/" target="_blank"><i
                                    class="bi bi-instagram"></i></a>
                        </li>
                        <li class="me-3">
                            <a class="btn text-white" href="https://github.com/ezirs/" target="_blank"><i
                                    class="bi bi-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    $(document).ready(function() {
        $("#contactForm").on("submit", function(e) {
            e.preventDefault();

            let btn = `
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Sending...
                </button>
            `;
            $("#btn").html(btn);

            $.ajax({
                type: "POST",
                url: "sendContact.php",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                error: function() {
                    alert("There is an error");
                },
                success: function(resp) {
                    if (resp === 1) {
                        alert("Message sent successfully");
                        let btn =
                            '<button type="submit" class="btn btn-outline-primary">Send</button>';
                        $("#btn").html(btn);
                    } else {
                        alert("Message not sent, please try for a few more minutes");
                    }
                    $("#contactForm")[0].reset();
                },
            });
        });
    });
    </script>
</body>

</html>