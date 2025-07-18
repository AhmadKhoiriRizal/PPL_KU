@extends('user.layouts.layouts')

@section('content')
    <!-- Tentang Saka Bhayangkara -->
    <section class="page-section bg-light mt-5" id="sejarah">
        <div class="container">
            <div class="content" style="font-family: Arial, sans-serif; line-height: 1.6; padding: 20px;">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sejarah</h2>
                    <h3 class="section-subheading text-muted">Tentang Saka Bhayangkara</h3>
                </div>
                <div style="margin-bottom: 20px;">
                    <h2 class="my-3">Sejarah</h2>
                    <img class="logo_sejarah_saka" src="{{ asset('dashboard/assets/img/logo_saka.png')}}"
                        alt="Logo Saka Bhayangkara">
                </div>

                <p>
                    Saka Bhayangkara merupakan salah satu Satuan Karya (Saka) dalam Gerakan Pramuka Indonesia yang memiliki
                    fokus utama di bidang keamanan dan ketertiban masyarakat (Kamtibmas). Pembentukan Saka ini berawal dari
                    dikeluarkannya instruksi bersama antara Menteri/Panglima Angkatan Kepolisian dan Kwartir Nasional
                    Gerakan Pramuka, yaitu melalui surat keputusan bersama Nomor Pol. 28/Inst./MK/1966 dan SK Kwarnas Nomor
                    4/1966 yang ditetapkan pada tanggal 1 Juli 1966. Kedua keputusan tersebut menjadi tonggak awal
                    berdirinya Pramuka Kamtibmas, sebagai bentuk kepedulian Gerakan Pramuka terhadap upaya menciptakan
                    ketertiban, keamanan, dan kedisiplinan di lingkungan masyarakat.
                </p>

                <div style="margin-bottom: 20px;">
                    <h3 class="my-3">Pramuka Kamtibmas</h3>
                    <p>
                        Pramuka Kamtibmas pada masa awal memiliki sembilan krida atau unit kegiatan keterampilan, yakni:
                        <strong>Krida Lalu Lintas</strong>, <strong>Krida SAR</strong> (Search and Rescue), <strong>Krida
                            Pemadam Kebakaran</strong>,
                        <strong>Krida Tindakan Pertama pada Kejadian Perkara (TPKP)</strong>, <strong>Krida
                            Pengawal</strong>, <strong>Krida Komlek</strong> (Komunikasi dan Elektronika),
                        <strong>Krida Pelacak</strong>, dan <strong>Krida Pengamat</strong>.
                        Setiap krida bertujuan untuk melatih anggota pramuka dalam bidang-bidang khusus yang berkaitan erat
                        dengan tugas-tugas kebhayangkaraan dan pelayanan masyarakat.
                    </p>
                </div>

                <p>
                    Pada tahun 1980, Gerakan Pramuka bersama dengan POLRI memperbaharui kerja sama mereka dalam upaya
                    pembinaan generasi muda. Tepatnya pada tanggal 22 Mei 1980, diterbitkan Surat Keputusan Bersama (SKB)
                    antara POLRI melalui Nomor Pol.Kep/08/V/1980 dan Gerakan Pramuka melalui SK Kwarnas Nomor 050 Tahun
                    1980. SKB ini menjadi landasan hukum resmi perubahan nama dari Pramuka Kamtibmas menjadi <strong>Saka
                        Bhayangkara</strong>, sekaligus mempertegas peran serta fungsi dari satuan karya tersebut. Dalam
                    keputusan ini pula, jumlah krida disesuaikan menjadi tujuh dengan menghapus Krida Komlek dan Krida
                    Pengamat yang dianggap kurang relevan atau sulit diimplementasikan secara luas di lapangan.
                </p>

                <div style="margin-bottom: 20px;">
                    <h3 class="my-3">Lambang Saka Bhayangkara</h3>
                    <p>
                        Lambang Saka Bhayangkara berbentuk segilima beraturan dengan panjang sisi masing-masing 5 cm. Bentuk
                        segilima ini tidak hanya sekadar bentuk geometris, tetapi menyimpan makna filosofis yang mendalam.
                        Segilima melambangkan Pancasila sebagai dasar negara, yang menjadi pedoman moral dan perilaku setiap
                        anggota pramuka.
                    </p>
                    <p>
                        Di dalam lambang tersebut terdapat beberapa elemen simbolik:
                        <strong>bintang tiga</strong> dan <strong>perisai</strong> mewakili Tribrata dan Catur Prasetya, dua
                        kode etik utama dalam Kepolisian Republik Indonesia (POLRI).
                        <strong>Obor</strong> menggambarkan semangat dan cahaya pengetahuan, di mana nyala apinya menjulang
                        menjadi tiga bagian yang melambangkan <em>Trikikrama</em>: kesadaran, kewaspadaan, dan
                        kebijaksanaan.
                        Selain itu, terdapat <strong>dua buah tunas kelapa</strong> sebagai lambang khas Gerakan Pramuka,
                        yang menandakan semangat keremajaan, kekuatan, dan daya tahan dalam menghadapi tantangan kehidupan.
                        Keseluruhan elemen tersebut membentuk sebuah identitas visual yang kuat dan mencerminkan nilai-nilai
                        luhur Saka Bhayangkara.
                    </p>
                </div>

                <div style="margin-bottom: 20px;">
                    <h3 class="my-3">Arti Warna pada Logo</h3>
                    <p>Warna-warna dalam lambang Saka Bhayangkara bukan hanya ornamen, tetapi memiliki makna filosofis yang
                        mendalam:</p>
                    <ul>
                        <li><strong>Merah:</strong> Melambangkan keberanian dan semangat juang. Warna ini menunjukkan
                            kesiapan anggota Saka Bhayangkara dalam menghadapi tantangan dan ancaman terhadap keamanan
                            masyarakat.</li>
                        <li><strong>Putih:</strong> Melambangkan kesucian dan kedamaian. Mewakili ketulusan hati dan niat
                            yang bersih dalam setiap tindakan yang dilakukan untuk melayani masyarakat.</li>
                        <li><strong>Hijau:</strong> Melambangkan harapan dan pertumbuhan. Warna ini menjadi simbol bahwa
                            anggota Saka Bhayangkara selalu membawa harapan dan optimisme dalam menjalankan tugasnya.</li>
                        <li><strong>Hitam:</strong> Melambangkan ketegasan dan kekuatan. Warna ini menunjukkan keteguhan
                            hati dan prinsip dalam menegakkan kebenaran dan keadilan.</li>
                    </ul>
                </div>

                <p>
                    Melalui sejarah yang panjang dan filosofi yang dalam, Saka Bhayangkara hadir sebagai wadah pembinaan
                    generasi muda yang tidak hanya terampil dalam bidang keamanan, tetapi juga menjunjung tinggi nilai-nilai
                    moral, nasionalisme, dan pengabdian tanpa pamrih. Keberadaannya di tengah masyarakat menjadi bukti nyata
                    bahwa Gerakan Pramuka mampu beradaptasi dan berkontribusi langsung dalam menciptakan masyarakat yang
                    aman, tertib, dan beradab.
                </p>

            </div>
        </div>
    </section>
@endsection
