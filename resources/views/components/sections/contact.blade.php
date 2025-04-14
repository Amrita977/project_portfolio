<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center">
      <h2>Contact</h2>
      <p>Feel free to reach out for collaborations, freelance work, or just to say hello!</p>
    </div>

    <!-- Contact Info Row -->
    <div class="row gy-4 mb-5">

      <div class="col-md-4 text-center">
        <div class="info-item">
          <i class="bi bi-geo-alt fs-2 text-primary"></i>
          <h5 class="mt-3"><strong>Address</strong></h5>
          <p>Sanjay Nagar, Ghaziabad, Uttar Pradesh</p>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="info-item">
          <i class="bi bi-telephone fs-2 text-success"></i>
          <h5 class="mt-3"><strong>Call Us</strong></h5>
          <p>+91 00000 00000</p>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="info-item">
          <i class="bi bi-envelope fs-2 text-info"></i>
          <h5 class="mt-3"><strong>Email Us</strong></h5>
          <p>amritarajbansh@gmail.com</p>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
      @csrf
      <div class="row gy-4">
        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-12">
          <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div>
        <div class="col-12">
          <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</section>
