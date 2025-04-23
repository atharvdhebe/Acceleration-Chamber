<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - E-learning</title>
  <!-- Bootstrap Grid Only (Optional but keeps responsiveness) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .contact-section {
      padding: 60px 20px;
      max-width: 1100px;
      margin: auto;
    }

    .contact-header {
      margin-bottom: 30px;
    }

    .contact-header h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #333;
    }

    .contact-header p {
      color: #666;
      font-size: 1rem;
    }

    .contact-info {
      margin-bottom: 30px;
    }

    .contact-info i {
      font-size: 1.3rem;
      color: #2a2a40;
      margin-right: 10px;
    }

    .contact-form {
      background-color: #fff;
      padding: 25px;
      border-radius: 6px;
      box-shadow: 0 0 10px rgba(0,0,0,0.08);
    }

    .contact-form .form-label {
      font-weight: 500;
      margin-bottom: 5px;
    }

    .contact-form .form-control {
      border-radius: 4px;
      border: 1px solid #ccc;
      padding: 10px;
      font-size: 1rem;
    }

    .contact-form .btn {
      margin-top: 10px;
      background-color:#2a2a40;
      color: #fff;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .contact-form .btn:hover {
      background-color:  #1e1e2f;
    }

    @media (max-width: 768px) {
      .contact-section {
        padding: 40px 10px;
      }
    }
  </style>
</head>
<?php include('nav.php')?>
<body>

<section class="contact-section">
  <div class="row g-4">
    <!-- Left side info -->
    <div class="col-md-5">
      <div class="contact-header">
        <h2>Contact Us</h2>
        <p>Have questions? We're happy to help. Reach out to us and we’ll respond as soon as possible.</p>
      </div>

      <div class="contact-info">
        <p><i class="bi bi-geo-alt-fill"></i> Deccan Gymkhana, Pune</p>
        <p><i class="bi bi-envelope-fill"></i> accelerationchamber@gmail.com</p>
        <p><i class="bi bi-telephone-fill"></i> +91 95527 24103</p>
      </div>
    </div>

    <!-- Right side form -->
    <div class="col-md-7">
      <div class="contact-form">
        <form id="contactForm">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" class="form-control" placeholder="Your full name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" class="form-control" placeholder="name@example.com" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-control" rows="4" placeholder="Your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript for form alert -->
<script>
  document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    alert(`Thank you, ${name}! We will contact you at ${email} soon.`);
    this.reset();
  });
</script>
<?php include('footer.php')?>
</body>
</html>
