<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi F4 Marivo - Portal Publik Terpadu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --bg-dark: #0f172a;
            --panel-bg: #1e293b;
            --accent-orange: #f97316;
            --accent-cyan: #06b6d4;
            --accent-green: #10b981;
            --text-light: #f8fafc;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; scroll-behavior: smooth; }
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            overflow-x: hidden;
        }

        /* PREMIUM GLOW NAVBAR */
        .navbar {
            background-color: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(12px);
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .brand { display: flex; align-items: center; gap: 12px; }
        .brand i { font-size: 24px; color: var(--accent-cyan); text-shadow: 0 0 10px rgba(6, 182, 212, 0.5); }
        .brand h3 { font-size: 20px; letter-spacing: 1px; font-weight: 800; background: linear-gradient(to right, #fff, #94a3b8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .nav-links { display: flex; gap: 10px; list-style: none; }
        .nav-links a {
            color: #cbd5e1; text-decoration: none; font-size: 13px; font-weight: 600; padding: 10px 18px; border-radius: 30px; transition: all 0.3s ease;
        }
        .nav-links a:hover { background-color: rgba(255, 255, 255, 0.05); color: var(--accent-cyan); }

        /* PROMO JUMBOTRON HERO */
        .hero {
            position: relative;
            padding: 120px 20px;
            text-align: center;
            background: radial-gradient(circle at top, rgba(6, 182, 212, 0.15), transparent), url('https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=1920&q=80') center/cover;
            background-blend-mode: overlay;
        }
        .hero h1 { font-size: 42px; font-weight: 800; margin-bottom: 15px; letter-spacing: -1px; text-shadow: 0 4px 12px rgba(0,0,0,0.5); }
        .hero h1 span { color: var(--accent-orange); }
        .hero p { color: #ffffff; font-size: 18px; max-width: 750px; margin: 0 auto 30px; }
        .hero-badge { display: inline-block; background-color: rgba(6, 182, 212, 0.2); border: 1px solid var(--accent-cyan); color: var(--accent-cyan); padding: 6px 16px; border-radius: 20px; font-size: 12px; font-weight: bold; margin-bottom: 20px; text-transform: uppercase; }

        /* STATS BANNER FLOATING */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px 60px; }
        .stats-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }
        .stat-card {
            background: linear-gradient(135deg, var(--panel-bg), #0f172a);
            padding: 25px; border-radius: 16px; display: flex; align-items: center; gap: 20px;
            border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .stat-icon { width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; }
        .stat-icon.c1 { background: rgba(249, 115, 22, 0.1); color: var(--accent-orange); }
        .stat-icon.c2 { background: rgba(6, 182, 212, 0.1); color: var(--accent-cyan); }
        .stat-icon.c3 { background: rgba(16, 185, 129, 0.1); color: var(--accent-green); }
        .stat-info h4 { font-size: 12px; color: #64748b; text-transform: uppercase; letter-spacing: 1px; }
        .stat-info p { font-size: 24px; font-weight: 800; }

        /* PROMOTIONAL SECTION BLOCK DESIGN */
        .section-card {
            background-color: var(--panel-bg); border-radius: 24px; padding: 40px; margin-top: 50px;
            display: grid; grid-template-columns: 1fr; gap: 30px;
            border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        @media(min-width: 900px) {
            .section-card { grid-template-columns: 350px 1fr; }
            .section-card.reverse { grid-template-columns: 1fr 350px; }
        }
        
        .promo-side {
            position: relative; border-radius: 16px; overflow: hidden; min-height: 250px;
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: flex-end; padding: 25px;
        }
        .promo-side::before { content:''; position: absolute; inset: 0; background: linear-gradient(transparent, rgba(15,23,42,0.95)); }
        .promo-side-content { position: relative; z-index: 2; }
        .promo-side h3 { font-size: 24px; font-weight: 800; margin-bottom: 5px; }
        .promo-side p { color: #cbd5e1; font-size: 13px; }

        /* NEW: GRID PAPAN PENGUMUMAN & KETERANGAN WEB */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-bottom: 30px;
            margin-top: 40px;
        }
        @media(min-width: 850px) {
            .info-grid { grid-template-columns: 2fr 1fr; }
        }
        .board-card {
            background-color: var(--panel-bg); border-radius: 20px; padding: 30px;
            border: 1px solid rgba(255,255,255,0.05);
        }
        .board-header { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px; }
        .board-header h3 { font-size: 18px; font-weight: 800; }
        .board-header i { color: var(--accent-orange); font-size: 20px; }
        .news-item { background: rgba(15, 23, 42, 0.4); padding: 15px; border-radius: 12px; margin-bottom: 12px; border-left: 4px solid var(--accent-cyan); }
        .news-item h5 { font-size: 14px; font-weight: 700; color: #fff; margin-bottom: 5px; }
        .news-item p { font-size: 12.5px; color: #94a3b8; line-height: 1.5; }
        .news-meta { font-size: 11px; color: #64748b; margin-top: 6px; display: block; }
        
        .about-card {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), transparent), var(--panel-bg);
            border-radius: 20px; padding: 30px; border: 1px solid rgba(6, 182, 212, 0.2);
        }
        .about-card p { font-size: 13.5px; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px; }
        .feature-tag { display: flex; align-items: center; gap: 10px; font-size: 12.5px; margin-bottom: 10px; color: #f8fafc; }
        .feature-tag i { color: var(--accent-green); }

        /* PROMOTIONAL SECTION BLOCK DESIGN */
        .section-card {
            background-color: var(--panel-bg); border-radius: 24px; padding: 40px; margin-top: 40px;
            display: grid; grid-template-columns: 1fr; gap: 30px;
            border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        @media(min-width: 900px) {
            .section-card { grid-template-columns: 350px 1fr; }
            .section-card.reverse { grid-template-columns: 1fr 350px; }
        }
        
        .promo-side {
            position: relative; border-radius: 16px; overflow: hidden; min-height: 250px;
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: flex-end; padding: 25px;
        }
        .promo-side::before { content:''; position: absolute; inset: 0; background: linear-gradient(transparent, rgba(15,23,42,0.95)); }
        .promo-side-content { position: relative; z-index: 2; }
        .promo-side h3 { font-size: 24px; font-weight: 800; margin-bottom: 5px; }
        .promo-side p { color: #cbd5e1; font-size: 13px; }

        /* BUTTONS WITH BRAND STYLE */
        .btn {
            display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; border-radius: 30px;
            font-size: 13px; font-weight: 700; border: none; cursor: pointer; transition: all 0.2s ease; text-decoration: none;
        }
        .btn-orange { background: linear-gradient(to right, #f97316, #ea580c); color: white; box-shadow: 0 4px 14px rgba(249,115,22,0.4); }
        .btn-orange:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(249,115,22,0.6); }
        .btn-cyan { background: linear-gradient(to right, #06b6d4, #0891b2); color: white; box-shadow: 0 4px 14px rgba(6,182,212,0.4); }
        .btn-cyan:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(6,182,212,0.6); }

        /* DATA TABLE STYLE */
        .table-resp { overflow-x: auto; width: 100%; max-height: 450px; }
        .data-table { width: 100%; border-collapse: separate; border-spacing: 0 8px; text-align: left; }
        .data-table th { color: #64748b; font-size: 12px; text-transform: uppercase; padding: 10px 16px; font-weight: 700; letter-spacing: 0.5px; position: sticky; top: 0; background-color: var(--panel-bg); z-index: 5; }
        .data-table tr td { background-color: rgba(15, 23, 42, 0.4); padding: 14px 16px; font-size: 13.5px; }
        .data-table tr td:first-child { border-radius: 12px 0 0 12px; }
        .data-table tr td:last-child { border-radius: 0 12px 12px 0; }

        /* STORAGE VISUAL CONTAINER CARDS (DOCK-VIEW) */
        .storage-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
        .storage-box {
            background-color: rgba(15, 23, 42, 0.5); border: 2px dashed rgba(255,255,255,0.1);
            border-radius: 16px; padding: 25px; text-align: center; position: relative; transition: all 0.3s ease;
        }
        .storage-box.active {
            background: linear-gradient(135deg, rgba(249,115,22,0.1), transparent);
            border: 2px solid var(--accent-orange);
        }
        .storage-box .icon-box { font-size: 32px; margin-bottom: 15px; color: #475569; }
        .storage-box.active .icon-box { color: var(--accent-orange); animation: pulse 2s infinite; }
        .badge { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 700; text-transform: uppercase; margin-bottom: 10px; }
        .badge-ready { background-color: rgba(16,185,129,0.15); color: var(--accent-green); }
        .badge-full { background-color: rgba(249,115,22,0.15); color: var(--accent-orange); }

        /* LIVE TOAST NOTIFICATION WINDOW */
        #toast-container { position: fixed; bottom: 30px; right: 30px; z-index: 3000; display: flex; flex-direction: column; gap: 10px; }
        .toast {
            background: #1e293b; border-left: 4px solid var(--accent-cyan); color: white; padding: 16px 25px;
            border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); display: flex; align-items: center; gap: 12px;
            font-size: 13px; font-weight: 600; transform: translateX(120%); animation: slideIn 0.3s forwards;
        }

        /* MODAL BOXES */
        .modal { display: none; position: fixed; inset: 0; background: rgba(15,23,42,0.8); backdrop-filter: blur(8px); justify-content: center; align-items: center; z-index: 2000; }
        .modal-content { background-color: var(--panel-bg); padding: 35px; border-radius: 20px; width: 100%; max-width: 400px; border: 1px solid rgba(255,255,255,0.1); }
        .modal-title { font-size: 18px; font-weight: 800; margin-bottom: 20px; color: var(--accent-cyan); }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-size: 12px; color: #64748b; margin-bottom: 6px; font-weight: 600; }
        .form-group input, .form-group select { width: 100%; padding: 10px 14px; background-color: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; color: white; }

        @keyframes slideIn { to { transform: translateX(0); } }
        @keyframes pulse { 0% { transform: scale(1); } 50% { transform: scale(1.05); } 100% { transform: scale(1); } }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="brand">
            <i class="fa-solid fa-ship"></i>
            <h3>KOPERASI F4 MARIVO</h3>
        </div>
        <ul class="nav-links">
            <li><a href="#sec-nelayan">Data Nelayan (10)</a></li>
            <li><a href="#sec-subsidi">Log Subsidi</a></li>
            <li><a href="#sec-inventaris">Fasilitas Alat</a></li>
            <li><a href="#sec-storage">Cold Storage</a></li>
        </ul>
    </nav>

    <header class="hero">
        <span class="hero-badge"><i class="fa-solid fa-bolt"></i> Realtime Operator Info</span>
        <h1>Nelayan Berdaya, Tangkapan <span>Maksimal!</span></h1>
        <p>Akses transparansi satu pintu fasilitas Koperasi F4 Marivo. Cek jatah sisa kuota bensin subsidi dari 10 armada kapal utama, pinjam sonar, dan sewa kargo es pendingin.</p>
    </header>

    <div class="container">

        <div class="stats-wrapper">
            <div class="stat-card">
                <div class="stat-icon c1"><i class="fa-solid fa-anchor"></i></div>
                <div class="stat-info"><h4>Nelayan Terdaftar</h4><p id="stat-nelayan">10 Orang</p></div>
            </div>
            <div class="stat-card">
                <div class="stat-icon c2"><i class="fa-solid fa-gas-pump"></i></div>
                <div class="stat-info"><h4>Total Salur BBM</h4><p id="stat-bensin">415 L</p></div>
            </div>
            <div class="stat-card">
                <div class="stat-icon c3"><i class="fa-solid fa-snowflake"></i></div>
                <div class="stat-info"><h4>Volume Kargo</h4><p id="stat-storage">150 Kg</p></div>
            </div>
        </div>

        <div class="info-grid">
            <div class="board-card">
                <div class="board-header">
                    <i class="fa-solid fa-bullhorn"></i>
                    <h3>Papan Siaran & Pengumuman Koperasi</h3>
                </div>
                <div class="news-item">
                    <h5>⚠️ Peringatan Cuaca Ekstrem Terkini</h5>
                    <p>Dihimbau untuk seluruh rekan nelayan dengan armada di bawah 5 GT agar menunda pelayaran ke Zona Utara akibat potensi gelombang tinggi mencapai 2.5 meter.</p>
                    <span class="news-meta"><i class="fa-regular fa-clock"></i> Hari Ini, 09:15 WIB • Oleh: Admin Otoritas</span>
                </div>
                <div class="news-item" style="border-left-color: var(--accent-green);">
                    <h5>⚓ Penambahan Slot Unit Pendingin Kargo</h5>
                    <p>Kabar gembira! Cold Storage Blok B sekarang telah diperluas menjadi 6 kompartemen terpisah. Silakan masukkan hasil tangkapan tuna atau tenggiri Anda sekarang.</p>
                    <span class="news-meta"><i class="fa-regular fa-clock"></i> Kemarin, 14:00 WIB • Oleh: Logistik Hub</span>
                </div>
            </div>
            <div class="about-card">
                <div class="board-header" style="border-bottom-color: rgba(6, 182, 212, 0.2);">
                    <i class="fa-solid fa-circle-info" style="color: var(--accent-cyan);"></i>
                    <h3>Fungsi Portal Ini</h3>
                </div>
                <p>Portal Publik Terpadu <b>Koperasi Bahari Marivo</b> digunakan oleh operator dermaga untuk mengelola transaksi harian kapal secara instan tanpa birokrasi kaku.</p>
                <div class="feature-tag"><i class="fa-solid fa-circle-check"></i> Kontrol Jatah Kuota BBM Bersubsidi</div>
                <div class="feature-tag"><i class="fa-solid fa-circle-check"></i> Pencatatan Sewa Alat Sonar & Navigasi</div>
                <div class="feature-tag"><i class="fa-solid fa-circle-check"></i> Monitoring Okupansi Cold Storage Kargo</div>
            </div>
        </div>

        <section class="section-card" id="sec-nelayan">
            <div class="promo-side" style="background-image: url('images/nelayan.jpg');">
                <div class="promo-side-content">
                    <h3>Registrasi Keanggotaan</h3>
                    <p>Manajemen data 10 armada kapal nelayan reguler. Tambahkan profil baru untuk membuka akses alokasi bensin.</p>
                    <button class="btn btn-orange" style="margin-top:15px; width:100%;" onclick="openModal('nelayanModal')"><i class="fa-solid fa-plus"></i> Daftar Baru</button>
                </div>
            </div>
            <div class="table-resp">
                <table class="data-table">
                    <thead>
                        <tr><th>ID</th><th>Nama Nelayan</th><th>Ukuran Kapal</th><th>Kuota Bulanan</th><th>Sisa Jatah BBM</th></tr>
                    </thead>
                    <tbody id="tb-nelayan"></tbody>
                </table>
            </div>
        </section>

        <section class="section-card reverse" id="sec-subsidi">
            <div class="table-resp">
                <table class="data-table">
                    <thead>
                        <tr><th>Waktu Ambil</th><th>Nama Nelayan</th><th>Volume Cair</th><th>Petugas Validasi</th></tr>
                    </thead>
                    <tbody id="tb-subsidi"></tbody>
                </table>
            </div>
            <div class="promo-side" style="background-image: url('images/fuel.jpg');">
                <div class="promo-side-content">
                    <h3>Log Penyaluran BBM</h3>
                    <p>Catatan transaksi pengambilan bensin bersubsidi di pom bensin khusus dermaga Marivo.</p>
                    <button class="btn btn-cyan" style="margin-top:15px; width:100%;" onclick="openModal('subsidiModal')"><i class="fa-solid fa-gas-pump"></i> Input Ambil BBM</button>
                </div>
            </div>
        </section>

        <section class="section-card" id="sec-inventaris">
            <div class="promo-side" style="background-image: url('images/equipment.jpg');">
                <div class="promo-side-content">
                    <h3>Fasilitas Peralatan</h3>
                    <p>Sewa perkakas modern pendukung keselamatan melaut & alat lacak sonar tangkapan.</p>
                </div>
            </div>
            <div class="table-resp">
                <table class="data-table">
                    <thead>
                        <tr><th>Nama Alat</th><th>Kategori</th><th>Kondisi</th><th>Status Unit</th><th style="text-align:center;">Tindakan</th></tr>
                    </thead>
                    <tbody id="tb-inventaris"></tbody>
                </table>
            </div>
        </section>

        <section class="section-card" id="sec-storage" style="grid-template-columns: 1fr;">
            <div style="border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px; display:flex; justify-content:space-between; align-items:center;">
                <h3 style="font-size:20px; font-weight:800; color:var(--accent-cyan);"><i class="fa-solid fa-snowflake"></i> Live Denah Rak Cold Storage</h3>
                <span style="font-size:12px; color:#64748b;">Klik tombol di kartu kontainer untuk mengelola</span>
            </div>
            <div class="storage-grid" id="container-storage-cards"></div>
        </section>

    </div>

    <div id="toast-container"></div>

    <div class="modal" id="nelayanModal"><div class="modal-content">
        <div class="modal-title">Registrasi Anggota Baru</div>
        <div class="form-group"><label>Nama Lengkap</label><input type="text" id="nel-nama" value="Pak Jalal"></div>
        <div class="form-group"><label>Ukuran Kapal (GT)</label><input type="text" id="nel-kapal" value="4 GT"></div>
        <div class="form-group"><label>Alokasi Kuota (Liter)</label><input type="number" id="nel-kuota" value="200"></div>
        <div class="modal-actions"><button class="btn" onclick="closeModal('nelayanModal')">Batal</button><button class="btn btn-orange" onclick="addNelayan()">Daftarkan</button></div>
    </div></div>

    <div class="modal" id="subsidiModal"><div class="modal-content">
        <div class="modal-title">Ambil Kuota Bahan Bakar</div>
        <div class="form-group"><label>Nama Nelayan</label><select id="sub-id"></select></div>
        <div class="form-group"><label>Bensin Diambil (Liter)</label><input type="number" id="sub-liter" value="40" min="1"></div>
        <div class="modal-actions"><button class="btn" onclick="closeModal('subsidiModal')">Batal</button><button class="btn btn-cyan" onclick="claimBbm()">Cairkan BBM</button></div>
    </div></div>

    <div class="modal" id="storageModal"><div class="modal-content">
        <div class="modal-title">Isi Muatan Cold Storage</div>
        <div class="form-group"><label>Unit Slot</label><input type="text" id="st-slotname" readonly></div>
        <div class="form-group"><label>Penyewa (Nelayan)</label><select id="st-nelayan"></select></div>
        <div class="form-group"><label>Komoditas Jenis Ikan</label><input type="text" id="st-ikan" value="Ikan Tuna"></div>
        <div class="form-group"><label>Bobot Bersih (Kg)</label><input type="number" id="st-bobot" value="60"></div>
        <div class="modal-actions"><button class="btn" onclick="closeModal('storageModal')">Batal</button><button class="btn btn-orange" onclick="submitSewaStorage()">Simpan Masuk</button></div>
    </div></div>

    <script>
        // MASTER 10 DATA NELAYAN TERDAFTAR SECARA LENGKAP
        let nelayanData = [
            { id: 1, nama: 'Pak Joko', kapal: '5 GT', kuota: 200, sisa: 150 },
            { id: 2, nama: 'Pak Ton', kapal: '3 GT', kuota: 250, sisa: 190 },
            { id: 3, nama: 'Pak Budi', kapal: '6 GT', kuota: 300, sisa: 300 },
            { id: 4, nama: 'Haji Mansur', kapal: '7 GT', kuota: 400, sisa: 220 },
            { id: 5, nama: 'Pak Rusli', kapal: '4 GT', kuota: 200, sisa: 115 },
            { id: 6, nama: 'Pak Supardi', kapal: '5 GT', kuota: 250, sisa: 250 },
            { id: 7, nama: 'Ahmad Fauzi', kapal: '3 GT', kuota: 180, sisa: 90 },
            { id: 8, nama: 'Pak Sukur', kapal: '8 GT', kuota: 500, sisa: 450 },
            { id: 9, nama: 'Dedi Sunandar', kapal: '4 GT', kuota: 220, sisa: 140 },
            { id: 10, nama: 'Pak Hendra', kapal: '6 GT', kuota: 300, sisa: 260 }
        ];

        // RAK LOG BBM SUBSIDI YANG JAUH LEBIH BANYAK DAN RAMAI
        let subsidiData = [
            { waktu: '18 Juni, 08:30', nama: 'Pak Joko', liter: 50, petugas: 'Otoritas Dermaga A' },
            { waktu: '17 Juni, 15:45', nama: 'Haji Mansur', liter: 100, petugas: 'Otoritas Dermaga B' },
            { waktu: '17 Juni, 06:15', nama: 'Pak Ton', liter: 60, petugas: 'Otoritas Dermaga A' },
            { waktu: '16 Juni, 11:20', nama: 'Pak Rusli', liter: 85, petugas: 'Otoritas Dermaga B' },
            { waktu: '15 Juni, 09:00', nama: 'Ahmad Fauzi', liter: 40, petugas: 'Otoritas Dermaga A' },
            { waktu: '15 Juni, 05:30', nama: 'Pak Sukur', liter: 50, petugas: 'Sistem Otomatis' },
            { waktu: '14 Juni, 16:10', nama: 'Dedi Sunandar', liter: 30, petugas: 'Otoritas Dermaga B' }
        ];

        let inventarisData = [
            { id: 101, nama: 'GPS Garmin Fishfinder 350+', kat: 'Navigasi Sonar', kon: 'Sangat Baik', status: 'disewa', user: 'Pak Joko' },
            { id: 102, nama: 'Jaring Insang (Gill Net 2.5 Inch)', kat: 'Alat Tangkap', kon: 'Prima', status: 'tersedia', user: null },
            { id: 103, nama: 'Radio Pemancar VHF Marine', kat: 'Komunikasi', kon: 'Baik', status: 'tersedia', user: null }
        ];

        let storageData = [
            { id: 1, slot: 'Slot A-01', maks: 100, isi: 50, nelayan: 'Pak Joko', ikan: 'Ikan Tongkol' },
            { id: 2, slot: 'Slot A-02', maks: 100, isi: 50, nelayan: 'Pak Ton', ikan: 'Ikan Tenggiri' },
            { id: 3, slot: 'Slot B-01', maks: 200, isi: 0, nelayan: null, ikan: null }
        ];

        let targetStorageId = null;

        function showToast(msg) {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = `<i class="fa-solid fa-circle-check" style="color:var(--accent-green)"></i> ${msg}`;
            container.appendChild(toast);
            setTimeout(() => toast.remove(), 4000);
        }

        function openModal(id) { document.getElementById(id).style.display = 'flex'; }
        function closeModal(id) { document.getElementById(id).style.display = 'none'; }

        function syncEngine() {
            // Render Tabel Nelayan
            const tbNelayan = document.getElementById('tb-nelayan');
            tbNelayan.innerHTML = nelayanData.map(n => `<tr><td>#${n.id}</td><td style="font-weight:700; color:var(--accent-cyan);">${n.nama}</td><td><i class="fa-solid fa-ship"></i> ${n.kapal}</td><td>${n.kuota} L</td><td><b style="color:var(--accent-orange);">${n.sisa} L Sisa</b></td></tr>`).join('');

            // Render Tabel Subsidi
            const tbSub = document.getElementById('tb-subsidi');
            let totalBbm = 0;
            tbSub.innerHTML = subsidiData.map(s => {
                totalBbm += s.liter;
                return `<tr><td>${s.waktu} WIB</td><td style="font-weight:600;">${s.nama}</td><td><span style="color:var(--accent-green); font-weight:bold;">+ ${s.liter} Liter</span></td><td style="color:#64748b;">${s.petugas}</td></tr>`;
            }).join('');

            // Render Tabel Inventaris
            const tbInv = document.getElementById('tb-inventaris');
            let rentalCount = 0;
            tbInv.innerHTML = inventarisData.map(i => {
                if(i.status === 'disewa') rentalCount++;
                let badge = i.status === 'tersedia' ? '<span class="badge badge-ready">Tersedia</span>' : `<span class="badge badge-full">Dipakai ${i.user}</span>`;
                let actionBtn = i.status === 'tersedia' 
                    ? `<button class="btn btn-cyan" style="padding:5px 12px; font-size:11px;" onclick="pinjamAlat(${i.id})">Sewa Alat</button>` 
                    : `<button class="btn btn-orange" style="padding:5px 12px; font-size:11px; background:#ef4444;" onclick="pulangAlat(${i.id})">Kembalikan</button>`;
                return `<tr><td style="font-weight:700;">${i.nama}</td><td>${i.kat}</td><td>${i.kon}</td><td>${badge}</td><td style="text-align:center;">${actionBtn}</td></tr>`;
            }).join('');

            // Render Komponen Visual Grid Cold Storage
            const gridStorage = document.getElementById('container-storage-cards');
            gridStorage.innerHTML = '';
            let totalBerat = 0;
            storageData.forEach(st => {
                totalBerat += st.isi;
                let isActive = st.isi > 0;
                let box = document.createElement('div');
                box.className = `storage-box ${isActive ? 'active' : ''}`;
                box.innerHTML = `
                    <div class="icon-box"><i class="fa-solid ${isActive ? 'fa-box' : 'fa-box-open'}"></i></div>
                    <div class="badge ${isActive ? 'badge-full' : 'badge-ready'}">${isActive ? 'Terisi' : 'Kosong'}</div>
                    <h4 style="font-size:16px; font-weight:800; margin-bottom:4px;">${st.slot}</h4>
                    <p style="font-size:12px; color:#64748b; margin-bottom:12px;">Maks Muatan: ${st.maks} Kg</p>
                    ${isActive ? `<p style="font-size:13px; font-weight:600; color:white; margin-bottom:15px;">${st.isi} Kg (${st.ikan})<br><small style="color:#64748b;">Oleh: ${st.nelayan}</small></p><button class="btn btn-orange" style="width:100%; justify-content:center; background:#ef4444;" onclick="kosongkanStorage(${st.id})">Kosongkan</button>` : `<p style="font-size:13px; color:#475569; margin-bottom:34px;">Siap Digunakan</p><button class="btn btn-cyan" style="width:100%; justify-content:center;" onclick="bukaSewaStorage(${st.id})">Booking Rak</button>`}
                `;
                gridStorage.appendChild(box);
            });

            // Update Counter Widget Atas Halaman
            document.getElementById('stat-nelayan').textContent = nelayanData.length + ' Anggota';
            document.getElementById('stat-bensin').textContent = totalBbm + ' Liter';
            document.getElementById('stat-storage').textContent = totalBerat + ' Kg';

            // Refresh Pilihan Seleksi Dropdown Form
            const dropdowns = ['sub-id', 'st-nelayan'];
            dropdowns.forEach(id => {
                const el = document.getElementById(id);
                if(el) el.innerHTML = nelayanData.map(n => `<option value="${n.id}">${n.nama}</option>`).join('');
            });
        }

        function addNelayan() {
            let nama = document.getElementById('nel-nama').value;
            let kapal = document.getElementById('nel-kapal').value;
            let kuota = parseInt(document.getElementById('nel-kuota').value);
            if(!nama) return;
            nelayanData.push({ id: nelayanData.length + 1, nama, kapal, kuota, sisa: kuota });
            closeModal('nelayanModal'); syncEngine(); showToast(`Anggota baru bernama ${nama} berhasil diregistrasi ke sistem.`);
        }

        function claimBbm() {
            let id = parseInt(document.getElementById('sub-id').value);
            let liter = parseInt(document.getElementById('sub-liter').value);
            let nelayan = nelayanData.find(n => n.id === id);
            if(liter > nelayan.sisa) return alert('Kuota sisa nelayan tidak mencukupi!');
            nelayan.sisa -= liter;
            subsidiData.unshift({ waktu: 'Baru Saja', nama: nelayan.nama, liter, petugas: 'Sistem Publik Mandiri' });
            closeModal('subsidiModal'); syncEngine(); showToast(`Berhasil mencairkan ${liter} Liter bensin subsidi untuk ${nelayan.nama}.`);
        }

        function pinjamAlat(id) {
            let nama = prompt('Masukkan nama nelayan peminjam:');
            if(!nama) return;
            let item = inventarisData.find(i => i.id === id);
            item.status = 'disewa'; item.user = nama;
            syncEngine(); showToast(`Fasilitas ${item.nama} aman disewa oleh ${nama}.`);
        }

        function pulangAlat(id) {
            let item = inventarisData.find(i => i.id === id);
            item.status = 'tersedia'; item.user = null;
            syncEngine(); showToast(`Unit perangkat ${item.nama} telah dikembalikan ke hanggar gudang.`);
        }

        function bukaSewaStorage(id) {
            targetStorageId = id;
            document.getElementById('st-slotname').value = storageData.find(s => s.id === id).slot;
            openModal('storageModal');
        }

        function submitSewaStorage() {
            let nId = parseInt(document.getElementById('st-nelayan').value);
            let ikan = document.getElementById('st-ikan').value;
            let bobot = parseInt(document.getElementById('st-bobot').value);
            let nelayan = nelayanData.find(n => n.id === nId);
            let slot = storageData.find(s => s.id === targetStorageId);
            if(bobot > slot.maks) return alert('Kapasitas rak pembekuan penuh!');
            slot.isi = bobot; slot.nelayan = nelayan.nama; slot.ikan = ikan;
            closeModal('storageModal'); syncEngine(); showToast(`Kargo ${ikan} seberat ${bobot} Kg berhasil masuk ke ${slot.slot}.`);
        }

        function kosongkanStorage(id) {
            let slot = storageData.find(s => s.id === id);
            slot.isi = 0; slot.nelayan = null; slot.ikan = null;
            syncEngine(); showToast(`Unit ruang ${slot.slot} telah dibersihkan dan siap dipakai nelayan lain.`);
        }

        window.onload = syncEngine;
    </script>
</body>
</html>