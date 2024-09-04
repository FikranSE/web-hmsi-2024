@extends('header-footer')

@section('title', 'Divisi Bikraf')

@section('content')

<main>
    <section class="text-center py-6">
        <p class="hmsi text-4xl sm:text-6xl text-white">Divisi Bisnis Kreatif</p>
    </section>

    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row px-5 sm:px-16 2xl:px-0">
            <div class="flex justify-center">
                <img src="./img/pengurus/bikraf/bikraf.jpg" alt="divisi bikraf" class="max-w-xs rounded-lg shadow-2xl sm:hover:-translate-y-2 duration-100" loading="lazy" />
            </div>
            <div class=" text-neutral-content px-3 max-w-full text-center lg:text-left">
                <p class="text-lg sm:text-xl font-bold">Apa itu divisi Bisnis Kreatif?</p>
                <p class="py-3 text-justify indent-4 sm:text-lg">Merupakan sebuah divisi pemberdayaan kewirausahaan di kalangan keluarga Sistem Informasi untuk mengembangkan minat dan bakat mahasiswa dibidang kewirausahaan dengan mengedepankan segala aspek pertumbuhan perekonomian dalam bisnis kreatif melalui potensi ide dan sumber daya manusianya.</p>
                <p class="text-lg sm:text-xl font-bold">Visi:</p>
                <p class="py-3 text-justify indent-4 sm:text-lg">Menjadikan Bikraf sebagai wadah untuk Mahasiswa Sistem Informasi dalam bidang bisnis yang kreatif dan inovatif untuk menjadi wirausahawan yang unggul dan dapat merespon tantangan ekonomi dengan solusi inovatif berbasis teknologi.</p>
                <p class="text-lg sm:text-xl font-bold">Misi:</p>
                <ol class="list-decimal list-inside py-3 sm:text-lg">
                    <li>Mengembangkan dan mengelola bisnis kreatif bagi Mahasiswa Sistem Informasi seperti Gerai HMSI, yang bertujuan untuk meningkatkan pendanaan HMSI.</li>
                    <li>Memberikan wadah bagi Mahasiswa Sistem Informasi untuk mempromosikan usaha mereka dan mengembangkan ide bisnis.</li>
                    <li>Memberikan wadah bagi Mahasiswa Sistem Informasi terkait pengajaran bisnis kreatif untuk mengembangkan keterampilan bisnis , manajemen dan teknologi melalui Entrepreneur Learning dan Sosial Media.</li>
                    <li>Mengadakan bazar, dan acara sejenisnya yang dapat mendorong kreativitas dan ide bisnis di kalangan Mahasiswa Sistem Informasi.</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-evenly pb-6">
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/bikraf/kadivbikraf.jpg" alt="kadiv bikraf" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Regina Nathamiya P.</h2>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/bikraf/sekrebikraf.jpg" alt="sekre bikraf" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Frizqya Della P.</h2>
                <p>Sekretaris Divisi</p>
            </div>
        </div>
        <div class="inline-block m-2 card lg:w-72 max-w-xs bg-base-100 shadow-xl text-center sm:hover:-translate-y-2 duration-100">
            <figure><img src="./img/pengurus/bikraf/bendaharabikraf.jpg" alt="bendahara bikraf" class="max-h-min" loading="lazy"></figure>
            <div class="card-body">
                <h2 class="card-title justify-center">Azizah Novi D.</h2>
                <p>Bendahara Divisi</p>
            </div>
        </div>
    </div>

    <section class="text-center py-16">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Staff</p>
        <br>
        <div class="flex flex-col sm:flex-row flex-wrap justify-evenly text-neutral-content">
            <ol class="list-none text-lg sm:text-xl">
                <li>Vioni Wijaya Putri</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Annisa Nurul H.</li>
            </ol>
            <ol class="list-none text-lg sm:text-xl">
                <li>Muhammad Farhan</li>
            </ol>
        </div>
    </section>

    <section class="text-center py-6 px-10">
        <p class="hmsi text-2xl sm:text-4xl text-white pb-4">Program Kerja</p>
        <center>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Gerai HMSI
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Tempat bagi mahasiswa Sistem Informasi untuk melakukan transaksi dan program kerja utama yang relevan dengan bikraf.</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Penjualan produk berupa makanan dan minuman di gerai HMSI.</li>
                        <li>Penyetokan produk setiap minggu.</li>
                        <li>Pengecekan stok produk setiap minggu dan pencatatan stok produk</li>
                        <li>Catatan akumulasi penjualan, pengeluaran, untung dan kerugian</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Baju HMSI
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Baju HMSI merupakan aspek penting dalam membangun identitas dan kebersamaan di kalangan mahasiswa Sistem Informasi</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Pendataan mahasiswa Sistem Informasi angkatan 2023</li>
                        <li>Penerimaan dan pencatatan pembayaran baju</li>
                        <li>Pemesanan baju kepada vendor</li>
                        <li>Pembagian baju kepada mahasiswa Sistem Informasi angkatan 2023</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    ID Card
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Diperlukannya id card sebagai tanda kepengurusan HMSI 2023/2024</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Pendataan Pengurus HMSI 2023/2024</li>
                        <li>Koordinasi dengan Media Kreatif mengenai desain Id Card dan Foto Pengurus.</li>
                        <li>Penerimaan dan Pencatatan pembayaran Id Card.</li>
                        <li>Pemesanan Id Card kepada vendor</li>
                        <li>Pembagian Id Card kepada Pengurus HMSI 2023/2024</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Enterpreneur Learning
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Dalam era yang penuh dengan potensi wirausaha, mahasiswa perlu diberikan kesempatan untuk mengembangkan keterampilan dan pengetahuan yang relevan untuk menjadi wirausahawan yang berkualitas, sehingga dibutuhkan wadah pengenalan dan sharing mengenai dunia bisnis dan wirausaha</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <p>Mengadakan seminar, webinar dan workshop dengan mengangkat tema yang berhubungan dengan kegiatan kewirausahaan.</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    Merchandise
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Adanya keperluan untuk menambah pendapatan HMSI dan juga menciptakan ikon yang dikenali oleh mahasiswa Sistem Informasi.</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <p>Membuat merchandise untuk mahasiswa Sistem Informasi dengan sistem pre-order (PO)</p>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                    E-Project
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Meningkatkan atensi publik, termasuk kalangan mahasiswa, terhadap dunia bisnis dan kewirausahaan sehingga perlu ada wadah untuk menyampaikan informasi terbaru mengenai topik ini kepada khalayak.</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <ol class="list-decimal list-inside">
                        <li>Membuat informasi tentang bisnis dan wirausaha terbaru serta quotes </li>
                        <li>Membuat konten informasi mengenai bisnis dan wirausaha</li>
                        <li>Mengunggah informasi di media sosial : Instagram HMSI</li>
                    </ol>
                </div>
            </div>
            <div class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-2 max-w-4xl text-left">
                <input type="checkbox" />
                <div class="collapse-title text-lg font-medium">
                Partnership Information Systems Promotion
                </div>
                <div class="collapse-content">
                    <p class="font-bold mt-2">Latar Belakang</p>
                    <p>Mahasiswa Sistem Informasi sering memiliki produk atau jasa yang mereka ingin promosikan, baik sebagai bagian dari wirausaha pribadi atau sebagai proyek dalam mata kuliah atau kegiatan organisasi, media sosial adalah platform efektif untuk mencapai audiens yang lebih luas dan potensial.</p>
                    <p class="font-bold">Bentuk Kegiatan</p>
                    <p>Mempromosikan produk atau jasa Mahasiswa Sistem Informasi melalui sosial media sosial gerai HMSI.</p>
                </div>
            </div>
        </center>
    </section>
</main>

@endsection