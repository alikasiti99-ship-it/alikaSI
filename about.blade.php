<x-layout title="Tentang Cake Étoile">
  <section class="relative overflow-hidden">
    <!-- Background gradient + dekorasi -->
    <div class="absolute inset-0 bg-gradient-to-br from-pink-50 via-white to-pink-100"></div>
    <div class="absolute top-0 left-0 w-72 h-72 bg-pink-200 rounded-full blur-3xl opacity-30 -translate-x-32 -translate-y-32"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-pink-300 rounded-full blur-3xl opacity-25 translate-x-32 translate-y-20"></div>

    <div class="relative container mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
      <!-- Gambar -->
      <div class="md:w-1/2">
        <div class="relative group">
          <img src="/image/about.jpg" alt="Tentang Cake Étoile"
               class="rounded-3xl shadow-2xl transition duration-500 group-hover:scale-105 group-hover:shadow-pink-200/50">
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-pink-400/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
        </div>
      </div>

      <!-- Konten -->
      <div class="md:w-1/2 text-center md:text-left">
        <h2 class="text-5xl brand-font text-pink-600 mb-6 fade-up">Tentang Cake Étoile</h2>
        <p class="text-gray-700 leading-relaxed text-lg mb-6 fade-up delay-75">
          Sejak <span class="font-semibold text-pink-500">2020</span>, <strong>Cake Étoile</strong> berdedikasi menghadirkan
          <em>kue artisan</em> dengan kualitas tinggi dan tampilan elegan. Kami percaya bahwa setiap lapisan kue
          menyimpan cerita, setiap rasa membawa kenangan.
        </p>
        <p class="text-gray-600 leading-relaxed fade-up delay-150">
          Dengan bahan premium pilihan dan sentuhan seni kuliner, kami menciptakan karya yang memanjakan mata dan lidah.
          Bagi kami, kue bukan sekadar makanan penutup — melainkan <span class="italic text-pink-500">simfoni rasa dan estetika</span>.
        </p>

        <!-- CTA -->
        <div class="mt-8 fade-up delay-200">
          <a href="/menu"
             class="inline-block bg-pink-500 text-white px-8 py-3 rounded-full text-lg font-medium shadow-md hover:bg-pink-600 hover:shadow-lg transition">
            Lihat Koleksi Kami
          </a>
        </div>
      </div>
    </div>
  </section>
</x-layout>
