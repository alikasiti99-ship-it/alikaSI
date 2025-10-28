<x-layout title="Menu Signature – Cake Étoile">
  <section class="container mx-auto text-center">
    <h2 class="text-4xl brand-font text-pink-600 mb-12 fade-up">Signature Collections</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach([
        ['Rose Velvet', '/image/Rose Velvet.jpg', 'Lembut, manis, dan beraroma mawar.'],
        ['Chocolate Opera', '/image/Opera Cake.jpg', 'Kombinasi cokelat Prancis dan espresso.'],
        ['Crème Fraîche Cheesecake', '/image/Crème Fraîche Cheesecake.jpg', 'Kue keju dengan tekstur halus dan creamy.'],
        ['Lemon Éclat', '/image/Lemon Éclat.jpg', 'Rasa segar dengan aroma citrus elegan.'],
        ['Tiramisu Royale', '/image/Coffee Tiramisu Cake.jpg', 'Rasa klasik Italia dalam tampilan modern.'],
        ['Strawberry Mousse', '/image/Strawberry Mousse Cake.jpg', 'Lembut, fruity, dan sangat memanjakan.']
      ] as [$cake, $img, $desc])
      <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition overflow-hidden fade-up">
        <img src="{{ $img }}" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="brand-font text-2xl text-pink-600 mb-2">{{ $cake }}</h3>
          <p class="text-gray-600 mb-4">{{ $desc }}</p>
          <a href="/pesan" class="btn-glow text-white px-6 py-2 rounded-full font-medium inline-block">
  Pesan Sekarang
</a>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</x-layout>
