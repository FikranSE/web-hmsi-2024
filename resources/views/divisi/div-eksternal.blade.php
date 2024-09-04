@extends('header-footer')

@section('title', 'Divisi Eksternal')

@section('content')

<main>
    <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Eksternal</p>
    </section>

    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
            <div class="flex justify-center">
                <img src="./img/pengurus/eksternal/eksternal.jpg" alt="divisi eksternal" class="max-w-sm rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy" />
            </div>
            <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                <p class="text-lg sm:text-xl font-bold">Apa itu divisi Eksternal?</p>
                <p class="py-3 text-justify indent-4 sm:text-lg">Merupakan divisi yang bertanggung jawab dalam menjalin hubungan dan kerjasama dengan pihak eksternal, untuk mengenalkan himpunan ke luar melalui kegiatan-kegiatan yang berkaitan dengan akademik maupun non-akademik, serta meningkatkan peran aktif mahasiswa dalam berbagai kegiatan.</p>
                <p class="text-lg sm:text-xl font-bold">Visi:</p>
                <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan divisi eksternal sebagai mitra dalam menjalin hubungan kerja sama antara HMSI dengan pihak luar, menjadi pusat pelayanan komunikasi dan informasi publik serta sebagai pelopor dalam membangun kesan positif bagi pihak pihak lain.</p>
                <p class="text-lg sm:text-xl font-bold">Misi:</p>
                <ol class="list-decimal list-inside py-3 sm:text-lg">
                    <li>Menjalin dan memelihara hubungan baik antar lembaga di lingkungan FTI.</li>
                    <li>Memfasilitasi proyek bersama antara organisasi dan mitra eksternal untuk mencapai tujuan bersama.</li>
                    <li>Memastikan citra organisasi yang positif dan visibilitas dalam semua interaksi eksternal, serta mengelola isu-isu reputasi dengan bijak.</li>
                    <li>Pengumpulan dan penyebarluasan informasi di Jurusan Sistem Informasi.</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-evenly pb-6">
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/eksternal/koor.png" alt="kadiv eksternal" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Zelfitrio Rodeski</h2>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/eksternal/sek.png" alt="sekbend eksternal" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Miftahul Khaira</h2>
                <p>Sekretaris-Bendahara</p>
            </div>
        </div>
    </div>

    <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Vatya Arsha Mahmudi</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Niken Khalilah Hamuti</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Dzikri Fakhry</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Oktaviani Andrianti</li>
            </ol>
        </div>
    </section>

    <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    SI I'm coming
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Memperluas informasi mengenai perkuliahan termasuk Jurusan Sistem Informasi Universitas Andalas.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Memberikan materi seputar organisasi dan kepemimpinan.</li>
                        <li>Memberikan materi seputar dunia kampus.</li>
                        <li>Memberikan materi tentang perkuliahan di Sistem Informasi dan peluang kerja setelah menamatkan perkuliahan khususnya setelah tamat di jurusan Sistem Informasi.</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    HMSI collab
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Perlu adanya kerja sama antara HMSI dengan lembaga yang ada di Universitas Andalas atau di luar Universitas Andalas.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Sharing Informasi antara HMSI dan lembaga, terkait pengenalan Jurusan Sistem Informasi.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    HMSI corner
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukannya informasi tentang beasiswa dan lomba untuk mahasiswa/i Sistem Informasi Universitas Andalas.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Mem-posting setiap info tentang beasiswa dan lomba di media sosial seperti Instagram, group WA, dan membuat group di discord SI</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    HMSI peduli
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Banyaknya musibah yang terjadi di sekitar kita yang memerlukan bantuan berupa dana.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Mengumpulkan dan mengelola donasi untuk korban bencana alam atau masyarakat yang membutuhkan</li>
                        <li>Bakti Sosial ( Bulan Ramadhan )</li>
                    </ol>
                </div>
            </div>
        </center>
    </section>
</main>

@endsection
