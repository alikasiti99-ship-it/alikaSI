<x-layout title="Cake Étoile – Home">
  <section class="relative">
    <img src="/image/toko.jpg"
         class="w-full h-[80vh] object-cover rounded-b-[50px] shadow-xl brightness-75">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
      <h2 class="text-6xl brand-font font-bold drop-shadow-lg fade-up">Where Art Meets Taste</h2>
      <p class="mt-4 text-lg fade-up" style="animation-delay:0.3s">Kue artisan dengan cita rasa berkelas dunia.</p>
      <a href="{{ route('menu') }}" class="mt-6 btn-glow text-white px-8 py-3 rounded-full font-semibold fade-up" style="animation-delay:0.6s">Lihat Menu</a>
    </div>
  </section>

  <section class="container mx-auto my-24 text-center">
    <h3 class="text-4xl brand-font text-pink-600 mb-10 fade-up">Kenapa Cake Étoile?</h3>
    <div class="grid md:grid-cols-3 gap-10">
      @foreach([
        ['fa-gem', 'Premium Ingredients', 'Kami menggunakan bahan impor terbaik dari Prancis dan Belgia.'],
        ['fa-palette', 'Elegant Design', 'Kue kami dibuat dengan sentuhan seni dan estetika tinggi.'],
        ['fa-heart', 'Lovingly Crafted', 'Setiap kue dibuat dengan hati oleh chef berpengalaman.']
      ] as [$icon, $title, $desc])
      <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-lg p-8 hover:shadow-2xl transition fade-up">
        <i class="fa-solid {{ $icon }} text-4xl text-pink-500 mb-4"></i>
        <h4 class="brand-font text-2xl mb-3">{{ $title }}</h4>
        <p class="text-gray-600">{{ $desc }}</p>
      </div>
      @endforeach
    </div>
  </section>
</x-layout>
