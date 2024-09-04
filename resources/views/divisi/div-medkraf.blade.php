@extends('header-footer')

@section('title', 'Divisi Medkraf')

@section('content')

    <main>
        <section class="text-center py-6">
            <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Media Kreatif</p>
        </section>

        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
                <div class="flex justify-center">
                    <img src="./img/pengurus/medkraf/medkraf.jpg" alt="divisi medkraf" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy"/>
                </div>
                <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                    <p class="text-lg sm:text-xl font-bold">Apa itu divisi Media Kreatif?</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Adalah divisi yang mengantarkan informasi melalui berbagai media dengan kreatifitas sebagai sumber dayanya sehingga menciptakan solusi dalam ranah komunikasi visual..</p>
                    <p class="text-lg sm:text-xl font-bold">Visi:</p>
                    <p class="py-3 text-justify indent-4 sm:text-lg">Menjadi media informasi yang terkini dan inspiratif dengan menyediakan konten yang menarik. Serta meningkatkan kreativitas dan kemampuan anggota untuk pertumbuhan pribadi dan profesional.</p>
                    <p class="text-lg sm:text-xl font-bold">Misi:</p>
                    <ol class="list-decimal list-inside py-3 sm:text-lg">
                        <li>Menerapkan sistem pengelolaan sosial media agar proses pengelolaan lebih terstruktur.</li>
                        <li>Memaksimalkan media informasi yang ada dalam penyampaian informasi dan meningkatkan kesadaran audiens terkait HMSI.</li>
                        <li>Menjadi wadah peningkatan skill dan kreativitas anggota dengan menyediakan pengalaman pembuatan konten dan pengelolaan sosial media yang menarik juga memahami target audiens.</li>
                        <li>Menyajikan konten yang menarik, kreatif, dan inspiratif melalui berbagai media sosial sesuai dengan perkembangan zaman.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-evenly pb-6">
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/medkraf/ketuamedkraf.jpg" alt="kadiv medkraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Citra Aulia</h2>
                    <p>Ketua Divisi</p>
                </div>
            </div>
            <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
                <figure><img src="./img/pengurus/medkraf/sekremedkraf.jpg" alt="sekbend medkraf" class="max-h-min" loading="lazy"></figure>
                <div class="card-body">
                    <h2 class="card-title justify-center">Annisa Hasifah Cantika</h2>
                    <p>Sekretaris-Bendahara Divisi</p>
                </div>
            </div>
        </div>

        <section class="text-center py-16">
            <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
            <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Rahma Aurelia Zami</li>
                <br>
                <li>Heni Yunita</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Triana Zahara Nurhaliza</li>
                <br>
                <li>Dhiya Gustita Aqila</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Athaya Clara D.</li>
            </ol>
            </div>
        </section>

        <section class="text-center py-6 px-10">
            <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
            <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Aktivasi Sosial Media
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Sosial media menjadi salah satu portofolio organisasi yang mampu menarik audiens lebih luas. Selain itu, dibutuhkan media penyebaran informasi yang menarik.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Mengelola dengan merancanakan dan mengunggah konten dia media sosial. (Media sosial yang digunakan yaitu X, Instagram, LinkedIn, dan Youtube)</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Design Request
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Menjadi tempat bagi anggota yang membutuhkan desain untuk berbagai media, seperti spanduk, banner, dll.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Membuat desain untuk berbagai kebutuhan, baik media cetak maupun media online sesuai SOP yang berlaku.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Foto Pengurus
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Diperlukan dokumentasi pengurus HMSI untuk press release kepengurusan dan foto pengurus yang dipajang di ruang sekretariat HMSI sebagai informasi kepada pengunjung sekretariat HMSI.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Mengadakan sesi foto bersama kepengurusan HMSI periode 2023/2024.</li>
                        <li>Mencetak foto tersebut ke dalam sebuah bingkai foto.</li>
                        <li>Memajang foto kepengurusan di sekretariat HMSI.</li>
                        <li>Mengunggah foto perdivisi ke akun Instagram HMSI (Press Release)</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Rekam Jejak
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Dibutuhkan dokumentasi berupa foto dan video kegiatan-kegiatan yang dilakukan pengurus HMSI sebagai bentuk pengarsipan data dan menunjukkan kegiatan pengurus pada audiens.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Mendokumentasikan dan editing video setiap kegiatan yang dilaksanakan oleh Himpunan Mahasiswa SI dan setiap pengambilan dokumentasi dimasukkan ke dalam Google Drive dan di upload ke media sosial HMSI.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Design Scape
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Membuat produk  design menjadi kemampuan dasar yang dibutuhkan oleh mahasiswa, maka, diadakan seminar design dengan topik yang relevan dengan kebutuhan audiens</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Memberikan pelatihan interaktif untuk meningkatkan kemampuan desain kepada mahasiswa difasilitasi dengan pemateri yang memiliki keahlian di bidang desain.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Buku Tahunan
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Dibutuhkan dokumen arsip berisi data pengurus dan kegiatan yang dilakukan selama periode kepengurusan untuk kenang - kenangan bagi pengurus HMSI.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Membuat  desain dan mengumpulkan dokumentasi kegiatan selama setahun kepengurusan dalam bentuk album dengan keterangan kegiatan selama periode kepengurusan 2024.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Instagram Analysis
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Untuk mengembangkan sosial media, dibutuhkan evaluasi dari setiap konten dengan menilik jumlah akun yang tertarik, mengunjungi post, dll.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Menganalisis profile visit, account reach, total interaction, pertumbuhan follower, untuk menganalisis engagement rate dari akun HMSI Unand</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Instagram Live
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Instagram merupakan salah satu channel atau fitur yang efektif untuk meningkatkan interaksi dengan audiens. Maka, fitur ini akan digunakan sebagai media edukasi dan penyampaian informasi ke audiens.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Melakukan sesi Instagram Live terkait topik yang relevan dengan situasi terkini atau topik edukatif lainnya.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Ink & Pixel
                </div>
                <div class="collapse-content"> 
                    <p class="font-bold">Latar belakang</p>
                    <p>Dengan berkembangnya zaman kepentingan desain semakin banyak peminat yang ingin menyalurkan bakat dan skill nya. Sehingga dibutuhkannya wadah untuk mengembangkan skill dan menyalurkan minat dan bakat desain yang semakin dibutuhkan di era digital saat sekarang ini.</p>
                    <p class="font-bold mt-2">Bentuk Kegiatan</p>
                    <p>Membuat poster lomba, membuat persyaratan lomba, melakukan penilaian desain, membuat sertifikat peserta dan pemenang lomba.</p>
                </div>
            </div>
            </center>
        </section>
    </main>

@endsection