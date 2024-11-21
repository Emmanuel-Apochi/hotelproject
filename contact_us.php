<?php 
require_once "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Grandeur Hotel</title>
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

        h1 {
            margin: 0;
            font-size: 3rem;
        }

        .contact-container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .contact-details div {
            flex: 1;
            min-width: 280px;
        }

        .contact-details p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .contact-details a {
            color: #1a1a1a;
            text-decoration: none;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        .map-container {
            margin-top: 30px;
        }

        iframe {
            width: 100%;
            height: 350px;
            border: 0;
            border-radius: 8px;
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

    <header>
        <h1>Contact Grandeur Hotel</h1>
        <p>Your luxurious stay begins with us. Reach out for any inquiries or bookings.</p>
    </header>

    <div class="contact-container container">
        <h2>Contact Details</h2>

        <div class="contact-details">
            
            <div>
                <h3>Our Address</h3>
                <p>
                    Grandeur Hotel<br>
                    123 Luxury Avenue, Suite 500<br>
                    Downtown, San Framcisco, California,USA<br>
                    Zip Code: 12345
                </p>
            </div>

            <div>
                <h3>Phone & Email</h3>
                <p><strong>Phone:</strong> <a href="tel:+1234567890">+1 234-567-890</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@grandeurhotel.com">info@grandeurhotel.com</a></p>
            </div>

            <div>
                <h3>Follow Us</h3>
                <p>Stay connected with us on social media:</p>
                <p>
                    <a href="https://facebook.com/grandeurhotel" target="_blank">Facebook</a><br>
                    <a href="https://twitter.com/grandeurhotel" target="_blank">Twitter</a><br>
                    <a href="https://instagram.com/grandeurhotel" target="_blank">Instagram</a><br>
                    <a href="https://linkedin.com/company/grandeurhotel" target="_blank">LinkedIn</a>
                </p>
            </div>
        </div>

        <div class="map-container">
            <h3>Find Us on the Map</h3>
            <div class="container">
        <iframe
            width="600"
            height="450"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2926283522785!2d-122.41941538468165!3d37.77492917975821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808e8e8f3b3d%3A0x5595815a6ffb7e3a!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1596929298854!5m2!1sen!2sus"
            frameborder="0"
            style="border:0;"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"> 
        </iframe>
    </div>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    
    <div class="form-container">
        <h2>Contact Grandeur Hotels</h2>
        <form action="https://formsubmit.co/doche2654@gmail.com" method="POST" id="contactForm">
            
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="phone number" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone number" name="phone number" required>
            </div>

           
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>
            </div>

            
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</body>
</html>
