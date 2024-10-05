
    <!-- Hero Section -->


    <!-- Main Content -->
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <h2>Contate-nos!</h2>
          <p>Preencha o formulário abaixo para nos contatar.</p>
          <form id="contactForm">
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Endereço de e-mail</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Assunto</label>
              <input type="text" class="form-control" id="subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Mensagem</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar mensagem</button>
          </form>
        </div>
        <div class="col-lg-6">
          <h2>Informações de contato</h2>
          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-map-marker-alt contact-icon me-3"></i>
            <div>
              <h5 class="mb-0">Endereço</h5>
              <!-- <p class="mb-0">123 Tech Street, San Francisco, CA 94105</p> -->
            </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-phone contact-icon me-3"></i>
            <div>
              <h5 class="mb-0">Phone</h5>
              <!-- <p class="mb-0">(123) 456-7890</p> -->
            </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-envelope contact-icon me-3"></i>
            <div>
              <h5 class="mb-0">e-mail</h5>
              <!-- <p class="mb-0">info@mywebsite.com</p> -->
            </div>
          </div>
          <!-- <h3 class="mt-4 mb-3">Our Location</h3>
          <div class="map-container" id="map"></div> -->
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
      <div class="container">
        <p>&copy; 2024 2fSoft. Todos os direitos reservados .</p>
      </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Leaflet JS for the map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Custom JS -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Initialize map
        var map = L.map('map').setView([37.7749, -122.4194], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker([37.7749, -122.4194]).addTo(map)
          .bindPopup('MyWebsite Headquarters')
          .openPopup();

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
          e.preventDefault();
          // Here you would typically send the form data to a server
          // For this example, we'll just show an alert
          alert('Thank you for your message! We will get back to you soon.');
          this.reset();
        });

        // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
            });
          });
        });

        // Add animation to contact icons
        const contactIcons = document.querySelectorAll('.contact-icon');
        contactIcons.forEach(icon => {
          icon.addEventListener('mouseenter', () => {
            icon.style.transform = 'scale(1.2)';
            icon.style.transition = 'transform 0.3s ease-in-out';
          });
          icon.addEventListener('mouseleave', () => {
            icon.style.transform = 'scale(1)';
          });
        });
      });
    </script>
