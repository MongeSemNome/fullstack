@include('components.style')
@include('components.metadata')
@include('components.header')
<body>
@include('components.navbar', ['active' => 'Home'])


@include('components.getquote')
@include('components.featuredserv')

      <!-- CTA Section -->
@include('components.getquote')




      <!-- Footer -->
      <footer class="bg-dark text-white py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5>2FSoft</h5>
              <p>Seu melhor amigo em soluções digitais!</p>
            </div>
            <div class="col-md-4">
              <h5>Acesso rápido</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Home</a></li>
                <li><a href="about.html" class="text-white">Sobre</a></li>
                <li><a href="services.html" class="text-white">Serviços</a></li>
                <li><a href="contact.html" class="text-white">Contato</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Fale com a gente!</h5>
              <div class="d-flex">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <hr class="mt-4">
          <div class="text-center">
            <p>&copy; 2024 2FSoft. Todos os Direitos Reservados.</p>
          </div>
        </div>
      </footer>

      <!-- Bootstrap 5 JS Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
