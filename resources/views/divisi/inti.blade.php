@extends('header-footer')

@section('title', 'Inti')

@section('content')

    <main>
        <section class="text-center py-6">
            <p class="hmsi text-4xl sm:text-6xl text-white">Pengurus Inti</p>
        </section>

        <!-- ketua dan wakil -->
        <div class="px-3 py-16 sm:py-32 text-center">
        <p class="hmsi text-3xl sm:text-5xl text-white py-3">Ketua dan Wakil Ketua</p>
        <div class="flex flex-wrap justify-center mb-4">
            <div class="inline-block m-2 card w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/ketua.jpg" alt="ketua umum" class="max-h-min"></figure>
            <div class="card-body p-5">
                <h2 class="card-title justify-center">Arif Wahyudi</h2>
                <p>Ketua Umum</p>
            </div>
            </div>
            <div class="inline-block m-2 card w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/wakil.jpg" alt="wakil ketua"></figure>
                <div class="card-body p-5">
                    <h2 class="card-title justify-center">Fajrin Putra Pratama</h2>
                    <p>Wakil Ketua Umum</p>
                </div>
            </div>
        </div>
        <div class="text-neutral-content px-5 sm:px-10 md:px-16 lg:px-24 xl:px-40 2xl:px-64">
            <section class="py-3 text-center lg:text-left">
            <p class="text-xl sm:text-2xl font-bold">Visi :</p>
            <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan Himpunan Mahasiswa Sistem Informasi sebagai wadah yang berkualitas, berpegang teguh pada prinsip-prinsip hukum dan peraturan yang berlaku, serta berkomitmen untuk terus meningkatkan Sumber Daya Manusia (SDM) di HMSI yang berkualitas unggul.</p>
            </section>
            <section class="py-3 text-center lg:text-left">
                <p class="text-xl sm:text-2xl font-bold">Misi :</p>
                <ol class="list-decimal list-inside py-3 sm:text-lg">
                <li>Menciptakan Mahasiswa Sistem Informasi serta pengurus himpunan yang bertaqwa kepada tuhan yang maha esa.</li>
                <li>Menciptakan Sumber Daya Manusia di Himpunan Sistem Informasi yang bertanggung jawab serta memahami konsep konsep himpunan.</li>
                <li>Sebagai wadah bagi Mahasiswa Sistem Informasi dalam  pengembangan diri baik di bidang akademik maupun non akademik.</li>
                <li>Memberikan hak yang sama untuk berpendapat demi keberlangsungan anggota Himpunan Sistem Informasi kedepannya ( AB dan ALB dan juga AM )</li>
                <li>Mensupport kegiatan kegiatan kemahasiswaan yang berada di Departemen Sistem Informasi akademik maupun non akademik   </li>
                <li>Membangun komunikasi dalam organisasi Himpunan Mahasiswa Sistem Informasi dengan sikap profesionalitas antara setiap elemen yang ada pada Jurusan Sistem Informasi</li>
                
                </ol>
            </section>
        </div>
        </div>
        
        <!-- sekre -->
        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-3 sm:px-16 2xl:px-0">
            <!-- ganti tulisan -->
            <p class="hmsi text-3xl sm:text-5xl lg:hidden text-white pt-4">Sekretaris umum</p>
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/sekre.jpg" alt="sekretaris" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Athifa Rifda Andra</h2>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full">
                <h1 class="hidden text-center lg:block lg:text-left text-5xl font-bold">Sekretaris umum</h1>
                <p class="py-3 text-justify indent-4 sm:text-lg">Sekretaris Umum merupakan bagian dari struktur kepengurusan Himpunan Mahasiswa Sistem Informasi Universitas Andalas Periode 2023 yang memiliki fokus dalam melaksanakan tugas sebagai sekretaris seperti pengadaan SOP untuk surat-menyurat, pengarsipan, laporan-laporan yang terkait dengan Himpunan Mahasiswa Sistem Informasi (HMSI) baik berupa laporan pertanggungjawaban, penjadwalan kegiatan, maupun rancangan program kerja.</p>
                </div>
            </div>
        </div>
        
        <!-- bendahara -->
        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-3 sm:px-16 2xl:px-0">
                <!-- ganti tulisan -->
                <p class="hmsi text-3xl sm:text-5xl lg:hidden text-white pt-4">Bendahara umum</p>
                <div class="flex justify-center">
                    <div class="m-2 card lg:w-80 max-w-sm bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                        <figure><img src="./img/pengurus/bendahara.jpg" alt="bendahara" class="max-h-min"></figure>
                        <div class="card-body p-5">
                            <h2 class="card-title justify-center">Ramadhani Safitri</h2>
                        </div>
                    </div>
                </div>
                <div class=" text-neutral-content px-3 max-w-full">
                <h1 class="hidden text-center lg:block lg:text-left text-5xl font-bold">Bendahara umum</h1>
                <p class="py-3 text-justify indent-4 sm:text-lg">Bendahara merupakan bagian dari struktur kepengurusan Himpunan Mahasiswa Sistem Informasi Universitas Andalas Periode 2023. Bendahara bertanggung jawab membuat anggaran per periode, mengumpulkan iuran, mengatur keuangan dan segala hal yang berhubungan dengan keuangan HMSI Sistem Informasi Universitas Andalas.</p>
                </div>
            </div>
        </div>
    </main>

@endsection