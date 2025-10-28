<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Cake Étoile' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
  <style>
  .fade-up { opacity: 0; transform: translateY(30px); transition: all 0.7s ease; }
  .animate-fadeup { opacity: 1; transform: translateY(0); }


    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom, #fffafc, #fff5f9);
      color: #2b2b2b;
      overflow-x: hidden;
    }
    h1, h2, h3, .brand-font { font-family: 'Playfair Display', serif; }
    .nav-link {
      position: relative;
      transition: color 0.3s;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      left: 0; bottom: -4px;
      height: 2px;
      width: 0;
      background: #ec4899;
      transition: width 0.3s;
    }
    .nav-link:hover::after, .nav-active::after { width: 100%; }
    .fade-up {
      opacity: 0; transform: translateY(20px);
      animation: fadeUp 0.8s ease-out forwards;
    }
    @keyframes fadeUp {
      to { opacity: 1; transform: translateY(0); }
    }
    .btn-glow {
      background: linear-gradient(90deg, #ec4899, #f472b6);
      box-shadow: 0 4px 15px rgba(236, 72, 153, 0.4);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .btn-glow:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(236, 72, 153, 0.6);
    }
  </style>
  <script>
  document.addEventListener("scroll", () => {
    document.querySelectorAll(".fade-up").forEach(el => {
      const top = el.getBoundingClientRect().top;
      if (top < window.innerHeight * 0.85) el.classList.add("animate-fadeup");
    });
  });
</script>
</head>
<body>

  {{-- Navbar --}}
  <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm border-b border-pink-100">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="brand-font text-3xl text-pink-600 tracking-wide">Cake Étoile</h1>
      <ul class="flex space-x-8 text-gray-700 font-medium">
        @foreach([
          'home' => 'Home',
          'about' => 'About',
          'menu' => 'Menu',
          'gallery' => 'Gallery',
          'contact' => 'Contact'
        ] as $route => $label)
          <li>
            <a href="{{ route($route) }}" class="nav-link {{ request()->routeIs($route) ? 'text-pink-600 nav-active' : '' }}">
              {{ $label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </nav>

@if (session('success'))
  <div id="notif"
       class="fixed top-6 left-1/2 -translate-x-1/2 bg-pink-500 text-white px-6 py-3 rounded-full shadow-lg z-50 animate-fadein transition-opacity duration-1000">
    {{ session('success') }}
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const notif = document.getElementById('notif');
      if (notif) {
        // Setelah 4 detik, mulai fade-out
        setTimeout(() => {
          notif.style.opacity = '0';
          notif.style.transform = 'translateY(-10px)';
        }, 4000);
        // Setelah 5 detik, hapus dari DOM
        setTimeout(() => notif.remove(), 5000);
      }
    });
  </script>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadein {
      animation: fadeIn 0.5s ease forwards;
    }
  </style>
@endif


  {{-- Main --}}
  <main class="pt-28">
    {{ $slot }}
  </main>

  {{-- Footer --}}
  <footer class="bg-gradient-to-r from-pink-100 via-white to-pink-50 text-center py-10 border-t border-pink-100">
    <h3 class="brand-font text-2xl text-pink-600 mb-2">Cake Étoile</h3>
    <p class="text-gray-600 italic">Elegance in every slice 🍰</p>
    <div class="flex justify-center space-x-5 mt-4 text-gray-500 text-lg">
      <i class="fa-brands fa-instagram hover:text-pink-500"></i>
      <i class="fa-brands fa-facebook hover:text-pink-500"></i>
      <i class="fa-brands fa-whatsapp hover:text-pink-500"></i>
    </div>
    <p class="text-sm text-gray-400 mt-4">&copy; {{ date('Y') }} Cake Étoile. All rights reserved.</p>
  </footer>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
