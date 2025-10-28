<x-layout title="Pesan Sekarang – Cake Étoile">
  <section class="relative overflow-hidden py-20">
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-pink-50 via-white to-pink-100"></div>
    <div class="absolute top-0 left-0 w-72 h-72 bg-pink-200 rounded-full blur-3xl opacity-30 -translate-x-32 -translate-y-32"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-pink-300 rounded-full blur-3xl opacity-25 translate-x-32 translate-y-20"></div>

    <div class="relative container mx-auto px-6 max-w-2xl text-center">
      <h2 class="text-5xl brand-font text-pink-600 mb-6 fade-up">Pesan Sekarang</h2>
      <p class="text-gray-600 mb-12 fade-up delay-75">
        Silakan isi formulir di bawah ini untuk memesan kue impian Anda.
        Kami akan menghubungi Anda dalam waktu singkat untuk konfirmasi.
      </p>

      <!-- Form Pemesanan -->
      <form action="/pesan" method="POST" class="bg-white/70 backdrop-blur-lg rounded-3xl shadow-xl p-8 space-y-6 fade-up delay-150">
        @csrf
        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Nama Lengkap</label>
          <input type="text" name="nama" required
                 class="w-full p-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
        </div>

        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Nomor WhatsApp</label>
          <input type="text" name="wa" required placeholder="0812xxxxxxx"
                 class="w-full p-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
        </div>

        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Pilih Kue</label>
          <select name="produk" required
                  class="w-full p-3 border border-pink-200 rounded-xl bg-white focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
            <option value="" disabled selected>Pilih salah satu...</option>
            <option>Rose Velvet</option>
            <option>Chocolate Opera</option>
            <option>Crème Fraîche Cheesecake</option>
            <option>Lemon Éclat</option>
            <option>Tiramisu Royale</option>
            <option>Strawberry Mousse</option>
          </select>
        </div>

        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Tanggal Pengambilan / Pengiriman</label>
          <input type="date" name="tanggal" required
                 class="w-full p-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
        </div>

        <div>
          <label class="block text-left text-gray-700 font-medium mb-2">Catatan Tambahan</label>
          <textarea name="catatan" rows="4" placeholder="Tulis detail khusus (misal: tanpa kacang, ukuran medium, dll)"
                    class="w-full p-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none transition"></textarea>
        </div>

        <button type="submit"
                class="w-full bg-pink-500 text-white py-3 rounded-full text-lg font-medium shadow-md hover:bg-pink-600 hover:shadow-lg transition">
          Kirim Pesanan
        </button>
      </form>
    </div>
  </section>
</x-layout>
