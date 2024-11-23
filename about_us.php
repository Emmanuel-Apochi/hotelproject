<?php 
require_once "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - Grandeur Hotel</title>
    <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background: #1a1a1a;
            color: white;
            text-align: center;
            padding: 50px 0;
        }
        header h1 {
            margin: 0;
            font-size: 3rem;
        }
        section {
            padding: 40px 20px;
            margin: 20px;
            background-color: white;
            border-radius: 8px;
        }
        section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .content-wrapper > div {
            flex: 1;
            min-width: 300px;
        }
        h2 {
            color: #1a1a1a;
        }
        p {
            line-height: 1.6;
        }
        footer {
            background: #1a1a1a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header class="container">
        <h1>Welcome to Grandeur Hotel</h1>
        <p>Your Luxury Experience Awaits</p>
    </header>

    <section class="container">
        <div class="content-wrapper ">
            <div>
                <h2>About Us</h2>
                <p>
                    Welcome to <strong>Grandeur Hotel</>, where luxury meets exceptional service in an atmosphere of elegance and sophistication. Situated in the heart of california, our hotel provides the perfect blend of modern comfort and timeless charm, ensuring that every guest enjoys a truly memorable stay.
                </p>
                <p>
                    At Grandeur Hotel, we believe that hospitality is an art. Our team is dedicated to creating an unforgettable experience by attending to every detail, from beautifully designed rooms to personalized service that caters to your every need.
                </p>
            </div>

            <div class="img-fluid">
                <img src="images/ex.jpeg" alt="Grandeur Hotel Exterior">
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content-wrapper">
            <div>
                <img src="images/hg.jpeg" alt="Hotel Suite">
            </div>
            <div>
                <h2>Our Amenities</h2>
                <p>
                    Whether you're visiting for business or leisure, our hotel offers a wide range of services to ensure your stay is as comfortable and enjoyable as possible. Our amenities include:
                </p>
                <ul>
                    <li>Luxuriously appointed rooms and suites</li>
                    <li>Gourmet dining at our signature restaurant</li>
                    <li>State-of-the-art fitness center</li>
                    <li>Spa and wellness services</li>
                    <li>Modern conference facilities</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content-wrapper">
            <div>
                <h2>Our Commitment to Excellence</h2>
                <p>
                    At Grandeur Hotel, we are committed to delivering an experience that goes beyond expectations. Whether you are here for a corporate event, a family getaway, or a special celebration, our team is here to ensure every detail is perfect, creating memories that will last a lifetime.
                </p>
                <p>
                    From the moment you step into our lobby to the time you check out, we promise to make every moment of your stay extraordinary.
                </p>
            </div>

            <div>
                <img src="images/WhatsApp Image 2024-11-18 at 11.55.22_ce04714e.jpg" alt="Hotel Lobby">
            </div>
        </div>
    </section>

    <footer class="container">
        <p>© 2024 Grandeur Hotel. All Rights Reserved.</p>
    </footer>

</body>
</html>
