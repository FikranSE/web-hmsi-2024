@extends('header-footer')

@section('title', 'Divisi PSI')

@section('content')

<main>
    <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi PSI</p>
    </section>

    <div class="hero min-h-screen ">
        <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
            <div class="flex justify-center">
                <img src="./img/pengurus/psi/PSI.jpg" alt="divisi psi" class="max-w-l rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy" />
            </div>
            <div class="text-neutral-content px-3 max-w-full text-center lg:text-left">
                <p class="text-lg sm:text-xl font-bold">Apa itu divisi PSI?</p>
                <p class="py-3 text-justify indent-4 sm:text-lg">Divisi Pengembangan Skill dan Intelektual (PSI) merupakan divisi yang mewadahi mahasiswa Sistem Informasi dalam mengembangkan Skill dan cara berpikir sebagai seorang mahasiswa IT. Divisi ini berperan penting sebagai media mahasiswa Sistem Informasi untuk lebih mengenal perkembangan IT serta prospek kerja yang dibutuhkan dunia IT sekarang. Untuk itu divisi pengembangan skill dan intelektual membutuhkan anggota yang baik dan memiliki rasa tanggung jawab, serta dapat bekerja sama antar anggota divisi lainnya.</p>
                <p class="text-lg sm:text-xl font-bold">Visi:</p>
                <p class="py-3 text-justify indent-4 sm:text-lg">Mewadahi dan menarik minat mahasiswa Sistem Informasi dalam pengembangan skill dan cara berpikir di bidang IT.</p>
                <p class="text-lg sm:text-xl font-bold">Misi:</p>
                <ol class="list-decimal list-inside py-3 sm:text-lg">
                    <li>Mewadahi pengembangan minat dan bakat mahasiswa Sistem Informasi</li>
                    <li>Menjadi wadah sebagai tempat untuk sharing wawasan atau ilmu yang dimiliki antar Mahasiswa Sistem Informasi</li>
                    <li>Meningkatkan softskill dan hardskill Mahasiswa Sistem Informasi</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-evenly pb-6">
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/psi/kadivpsi.jpg" alt="kadiv psi" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Fikran Shadiq Elyafit</h2>
                <p>Kepala Divisi</p>
            </div>
        </div>
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/psi/bendaharapsi.jpg" alt="sekbend psi" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Najla Nadiva</h2>
                <p>Sekretaris-Bendahara Divisi</p>
            </div>
        </div>
    </div>

    <!-- <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4"><i>Staff:</i></p>
        <br>
        <div class=" flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
            <li>Revi Putra Hernel</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Muhammad Fariz</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
            <li>Rendi Kurniawan</li>
            </ol>
        </div>
        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-70 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psi/staff2psi.jpg" alt="sekbend psi" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Muhammad Fariz</h2>
                    <p>Staff</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-70 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psi/staff1psi.jpg" alt="kadiv psi" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Revi Putra Hernel</h2>
                    <p>Staff</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-70 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/psi/staff3psi.jpg" alt="sekbend psi" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Rendi Kurniawan</h2>
                    <p>Staff</p>
                </div>
            </div>
        </div>
    </section> -->

    <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Modifikasi dan Pengelolaan Website HMSI
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Karena tampilan dari website HMSI sebelumnya yang kurang menarik dan tidak ada otomatisasi dari administrator, semuanya masih dilakukan secara manual mulai dari edit data pengurus, update blog atau event terbaru.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Membangun website HMSI</li>
                        <li>Pelatihan semua anggota untuk pembangunan website </li>
                        <li>Melakukan pengujian website HMSI</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Exam Preparation (XAMPP)
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Karena padatnya kegiatan di kampus yang membuat mahasiswa kesulitan untuk belajar dalam menghadapi ujian maka dibutuhkan sebuah kegiatan yang dapat membantu mahasiswa sistem informasi dalam mempersiapkan dirinya untuk menghadapi pelaksanaan ujian(UTS/UAS/TB)</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Membuat google form untuk mewadahi daftar permintaan pelaksanaan XAMPP.</li>
                        <li>Mencari pemateri untuk berbagi dan sharing tentang mata kuliah tertentu.</li>
                        <li>Pelaksanaan XAMPP.</li>
                        <li>Memberikan Pembahasan Materi dan pembelajaran secara daring terkait mata kuliah yang dominan di daftar permintaan.</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Pelatihan Teknologi Informasi
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Karena perkembangan teknologi yang cukup cepat serta semakin ketatnya persaingan dunia kerja maka dibutuhkan sebuah kegiatan untuk meningkatkan hardskill mahasiswa sistem informasi agar dapat memenuhi tuntutan dunia kerja saat ini.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Pelaksanaan pelatihan teknologi informasi, misal : Desain UI, pelatihan dasar pemrograman, dan Pembangunan website</li>
                        <li>Mencari pemateri untuk kegiatan pelatihan TI.</li>
                        <li>Pelaksanaan Pelatihan.</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Lomba IT
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Masalah dalam bazar kampus adalah kurangnya daya tarik dan partisipasi pengunjung. Solusi potensial adalah mengintegrasikan Teknologi Informasi (IT), seperti lomba IT, untuk membuat acara lebih menarik dan modern.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Perlombaan di bidang IT yakninya fastyper.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Workshop Labor
                </div>
                <div class="collapse-content">
                    <p class="font-bold">Latar belakang</p>
                    <p>Membangun kolaborasi dengan 4 laboratorium yang ada di Departemen Sistem Informasi yaitu LDKOM, LABGIS, LEA, LBI untuk membantu meningkatkan skill dan keterampilan mahasiswa Sistem Informasi dalam mempersiapkan karier di dunia profesional.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Pertengahan Februari – akhir kepengurusan.</p>
                </div>
            </div>
        </center>
    </section>
</main>

@endsection