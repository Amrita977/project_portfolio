<section id="faq" class="faq section">
  <div class="container">
    <div class="section-title text-center" data-aos="fade-up">
      <h2>FAQ</h2>
      <p>Answers to common questions about my work and skills.</p>
    </div>

    @php
      $faqs = [
        ['q' => 'What technologies do you specialize in?', 'a' => 'Laravel, MySQL, JavaScript, React.js, and TailwindCSS.'],
        ['q' => 'Can you work on freelance or remote projects?', 'a' => 'Yes, I’m available for freelance and remote-based development projects.'],
        ['q' => 'Do you create mobile-responsive websites?', 'a' => 'Yes, all my websites are fully responsive for mobile, tablet, and desktop.'],
        ['q' => 'Do you have experience with API development and integration?', 'a' => 'Yes, I work with REST APIs, Laravel controllers, and third-party integrations.'],
        ['q' => 'What kind of projects have you worked on?', 'a' => 'IoT apps, exam portals, UI components, validation forms, portfolio websites, and more.']
      ];
    @endphp

    <div class="row gy-4 justify-content-center">
      @foreach($faqs as $index => $faq)
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="{{ 100 + $index * 100 }}">
        <div class="service-item position-relative p-4">
          <div class="d-flex justify-content-between align-items-center faq-toggle" style="cursor: pointer;">
            <h5 class="mb-0">
              <i class="bi bi-question-circle-fill text-primary me-2"></i>
              {{ $index + 1 }}. {{ $faq['q'] }}
            </h5>
            <i class="bi bi-chevron-down toggle-icon fs-5"></i>
          </div>
          <div class="faq-content mt-3" style="display: none;">
            <p class="mb-0">{{ $faq['a'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
