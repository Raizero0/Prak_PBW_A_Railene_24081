<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="color-scheme" content="dark" />
  <meta name="supported-color-schemes" content="dark" />
  <title>LELE GiMANG — Selamat datang di Galaksi Biru</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@500;700;800&family=Outfit:wght@300;400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />

  <!--
    Tailwind v4 (browser build) supaya file ini bisa langsung dibuka tanpa build step.
    Di project lu sendiri: hapus tag <script> ini, lalu pindahin isi <style type="text/tailwindcss">
    ke file CSS lu, tepat di bawah  @import 'tailwindcss';

    Buat ngirim email beneran: inline dulu CSS-nya (Juice / Maizzle / Resend / dll).
    Animasi, gradient rumit dan clip-path cuma tampil penuh di Apple Mail, iOS Mail dan Outlook Mac.
    Gmail & Outlook Windows bakal nampilin versi yang lebih sederhana.
  -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <style type="text/tailwindcss">
    @theme {
      --font-display: 'Unbounded', 'Trebuchet MS', 'Segoe UI', sans-serif;
      --font-sans: 'Outfit', 'Segoe UI', system-ui, -apple-system, sans-serif;
      --font-mono: 'Space Mono', 'Courier New', monospace;

      --color-void: #030716;
      --color-abyss: #050d2b;
      --color-deep: #0a1a4f;
      --color-cobalt: #2563ff;
      --color-azure: #38a3ff;
      --color-glow: #5ee7ff;
      --color-ice: #dff4ff;

      --animate-float: float 9s ease-in-out infinite;
      --animate-orbit: orbit 32s linear infinite;

      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
      }
      @keyframes orbit {
        to { transform: rotate(360deg); }
      }
    }

    /* ---------- Latar halaman: ruang angkasa ---------- */
    .page-bg {
      background:
        radial-gradient(900px 520px at 50% -8%, rgba(37, 99, 255, .42), transparent 62%),
        radial-gradient(600px 420px at 100% 45%, rgba(94, 231, 255, .09), transparent 65%),
        radial-gradient(600px 420px at 0% 78%, rgba(99, 102, 241, .14), transparent 65%),
        #030716;
    }

    /* ---------- Bintang (statis, cuma planet & bulan yang gerak) ---------- */
    .stars-a {
      background-image:
        radial-gradient(1.5px 1.5px at 20px 30px, #fff 60%, transparent),
        radial-gradient(1px 1px at 80px 120px, #bfe6ff 60%, transparent),
        radial-gradient(1.5px 1.5px at 150px 60px, #fff 60%, transparent),
        radial-gradient(1px 1px at 210px 180px, #fff 60%, transparent),
        radial-gradient(2px 2px at 265px 95px, #9fd8ff 60%, transparent),
        radial-gradient(1px 1px at 300px 20px, #fff 60%, transparent);
      background-size: 320px 230px;
    }
    .stars-b {
      background-image:
        radial-gradient(1px 1px at 40px 90px, #cfeaff 60%, transparent),
        radial-gradient(1.5px 1.5px at 120px 20px, #fff 60%, transparent),
        radial-gradient(1px 1px at 170px 140px, #9fd8ff 60%, transparent),
        radial-gradient(1px 1px at 60px 160px, #fff 60%, transparent);
      background-size: 197px 173px;
    }
    .fade-b {
      -webkit-mask-image: linear-gradient(to bottom, #000 62%, transparent);
      mask-image: linear-gradient(to bottom, #000 62%, transparent);
    }

    /* ---------- Planet mini (CSS murni) ---------- */
    .planet-wrap { position: relative; isolation: isolate; }
    .planet {
      position: absolute; inset: 0; z-index: 1; border-radius: 9999px;
      background:
        radial-gradient(circle at 30% 26%, rgba(255,255,255,.55), transparent 32%),
        repeating-linear-gradient(-18deg, transparent 0 10px, rgba(255,255,255,.08) 10px 16px, transparent 16px 30px, rgba(0,10,60,.16) 30px 37px),
        radial-gradient(circle at 32% 28%, var(--p-hi), var(--p-mid) 46%, var(--p-lo) 100%);
      box-shadow: inset -12px -12px 26px rgba(0,0,25,.6), 0 0 36px var(--p-glow);
    }
    .has-ring::before, .has-ring::after {
      content: ''; position: absolute; left: -40%; right: -40%; top: 50%; height: 34%;
      border-radius: 50%;
      border: 3px solid rgba(178, 228, 255, .62);
      box-shadow: 0 0 14px rgba(94, 231, 255, .35);
      transform: translateY(-50%) rotate(-18deg);
    }
    .has-ring::before { z-index: 0; }
    .has-ring::after  { z-index: 2; clip-path: inset(50% -20% -20% -20%); }

    /* ---------- Barcode boarding pass ---------- */
    .barcode {
      background: repeating-linear-gradient(90deg,
        #dff4ff 0 2px, transparent 2px 4px,
        #dff4ff 4px 5px, transparent 5px 9px,
        #dff4ff 9px 12px, transparent 12px 14px,
        #dff4ff 14px 15px, transparent 15px 18px);
    }

    /* ---------- Cakrawala planet di penutup ---------- */
    .horizon {
      background:
        radial-gradient(circle at 50% 0%, rgba(94, 231, 255, .55), transparent 22%),
        radial-gradient(circle at 50% 0%, #1f63ff, #0a1a6b 30%, #050d2b 62%);
      box-shadow: 0 -12px 60px 6px rgba(56, 163, 255, .55), inset 0 3px 24px rgba(200, 245, 255, .85);
      border-top: 1px solid rgba(200, 245, 255, .7);
    }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { animation: none !important; }
    }
  </style>
</head>

<body class="page-bg m-0 min-h-screen bg-void font-sans text-ice antialiased">

  <!-- Simbol logo (dipakai di header & footer) -->
  <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
    <defs>
      <radialGradient id="lg-body" cx="35%" cy="30%" r="80%">
        <stop offset="0" stop-color="#bff3ff" />
        <stop offset=".45" stop-color="#2f7bff" />
        <stop offset="1" stop-color="#081a75" />
      </radialGradient>
      <symbol id="logo-mark" viewBox="0 0 48 48">
        <g transform="rotate(-22 24 24)">
          <path d="M2 24 A22 7 0 0 1 46 24" fill="none" stroke="#5ee7ff" stroke-opacity=".75" stroke-width="2" />
        </g>
        <circle cx="24" cy="24" r="12" fill="url(#lg-body)" />
        <g transform="rotate(-22 24 24)">
          <path d="M2 24 A22 7 0 0 0 46 24" fill="none" stroke="#5ee7ff" stroke-width="2" />
        </g>
      </symbol>
    </defs>
  </svg>

  <!-- Preheader (teks intip di inbox) -->
  <div class="hidden">Boarding pass kamu ke Galaksi Biru sudah siap. Klaim voucher 25% sebelum 31 Oktober.</div>

  <div class="mx-auto w-full max-w-[640px] px-3 py-8 sm:px-4 sm:py-12">

    <p class="mb-4 text-center text-xs text-sky-200/70">
      Email ini tidak tampil rapi?
      <a href="#" class="text-glow underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Buka di browser</a>
    </p>

    <!-- ===================== KARTU EMAIL ===================== -->
    <main class="overflow-hidden rounded-[28px] border border-sky-400/20 bg-abyss shadow-[0_30px_120px_-20px_rgba(37,99,255,.55)]">

      <!-- Header -->
      <header class="flex items-center justify-between px-6 pt-6 sm:px-9 sm:pt-8">
        <a href="#" class="flex items-center gap-3 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow">
          <svg class="size-10" aria-hidden="true"><use href="#logo-mark" /></svg>
          <span class="font-display text-[17px] font-extrabold leading-none tracking-tight text-white">
            LELE Gi<span class="text-glow">MANG</span>
          </span>
        </a>
        <a href="#" class="rounded-full border border-white/15 px-4 py-2 text-sm font-medium text-ice transition hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">
          Masuk
        </a>
      </header>

      <!-- ===================== HERO ===================== -->
      <section class="relative overflow-hidden px-6 pb-14 pt-6 text-center sm:px-9">
        <div class="stars-a fade-b absolute inset-0 opacity-70" aria-hidden="true"></div>
        <div class="stars-b fade-b absolute inset-0 opacity-60" aria-hidden="true"></div>
        <div class="absolute left-1/2 top-24 size-80 -translate-x-1/2 rounded-full bg-cobalt/45 blur-3xl" aria-hidden="true"></div>

        <!-- Planet utama: satu-satunya momen yang bergerak -->
        <div class="relative mx-auto mt-4 size-[300px] animate-float sm:size-[380px]">
          <svg viewBox="0 0 440 440" class="size-full overflow-visible" role="img" aria-label="Planet biru bercincin dengan satu bulan yang mengorbit">
            <defs>
              <radialGradient id="hg-body" cx="34%" cy="28%" r="80%">
                <stop offset="0" stop-color="#bff3ff" />
                <stop offset=".22" stop-color="#4cc3ff" />
                <stop offset=".5" stop-color="#1f63ff" />
                <stop offset=".8" stop-color="#0b2496" />
                <stop offset="1" stop-color="#050f52" />
              </radialGradient>
              <radialGradient id="hg-shade" cx="30%" cy="28%" r="85%">
                <stop offset=".55" stop-color="#020626" stop-opacity="0" />
                <stop offset="1" stop-color="#020626" stop-opacity=".88" />
              </radialGradient>
              <linearGradient id="hg-ring" x1="0" x2="1" y1="0" y2="0">
                <stop offset="0" stop-color="#5ee7ff" stop-opacity=".25" />
                <stop offset=".45" stop-color="#dff4ff" stop-opacity=".95" />
                <stop offset="1" stop-color="#2563ff" stop-opacity=".55" />
              </linearGradient>
              <radialGradient id="hg-moon" cx="35%" cy="30%" r="75%">
                <stop offset="0" stop-color="#eefaff" />
                <stop offset=".5" stop-color="#6aa8ff" />
                <stop offset="1" stop-color="#1a3a9c" />
              </radialGradient>
              <clipPath id="hg-clip"><circle cx="220" cy="220" r="125" /></clipPath>
              <filter id="hg-blur" x="-20%" y="-20%" width="140%" height="140%"><feGaussianBlur stdDeviation="2.6" /></filter>
              <filter id="hg-blur-lg" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur stdDeviation="9" /></filter>
            </defs>

            <!-- jalur orbit tipis -->
            <ellipse cx="220" cy="220" rx="205" ry="72" fill="none" stroke="#9fd8ff" stroke-opacity=".14" stroke-dasharray="2 7" transform="rotate(-18 220 220)" />

            <!-- cincin: setengah belakang -->
            <g transform="rotate(-18 220 220)" fill="none">
              <path d="M30 220 A190 52 0 0 1 410 220" stroke="url(#hg-ring)" stroke-width="16" />
              <path d="M55 220 A165 44 0 0 1 385 220" stroke="#9fdcff" stroke-opacity=".5" stroke-width="5" />
            </g>

            <!-- badan planet -->
            <circle cx="220" cy="220" r="125" fill="url(#hg-body)" />
            <g clip-path="url(#hg-clip)">
              <g transform="rotate(-18 220 220)" filter="url(#hg-blur)">
                <rect x="60" y="148" width="320" height="14" fill="#fff" opacity=".13" />
                <rect x="60" y="178" width="320" height="8" fill="#001a66" opacity=".2" />
                <rect x="60" y="204" width="320" height="24" fill="#bff3ff" opacity=".11" />
                <rect x="60" y="244" width="320" height="10" fill="#001a66" opacity=".24" />
                <rect x="60" y="272" width="320" height="18" fill="#7fd0ff" opacity=".1" />
                <rect x="60" y="304" width="320" height="8" fill="#001a66" opacity=".22" />
                <ellipse cx="268" cy="236" rx="24" ry="10" fill="#dff4ff" opacity=".28" />
              </g>
              <ellipse cx="172" cy="158" rx="46" ry="24" fill="#fff" opacity=".2" filter="url(#hg-blur-lg)" />
            </g>
            <circle cx="220" cy="220" r="125" fill="url(#hg-shade)" />
            <circle cx="220" cy="220" r="124.5" fill="none" stroke="#9fe8ff" stroke-opacity=".45" stroke-width="1.5" />

            <!-- cincin: setengah depan -->
            <g transform="rotate(-18 220 220)" fill="none">
              <path d="M30 220 A190 52 0 0 0 410 220" stroke="url(#hg-ring)" stroke-width="16" />
              <path d="M55 220 A165 44 0 0 0 385 220" stroke="#9fdcff" stroke-opacity=".5" stroke-width="5" />
            </g>

            <!-- bulan yang mengorbit -->
            <g class="animate-orbit" style="transform-origin:220px 220px">
              <circle cx="372" cy="96" r="20" fill="url(#hg-moon)" />
              <circle cx="366" cy="90" r="4" fill="#0a2a80" opacity=".35" />
              <circle cx="379" cy="103" r="2.6" fill="#0a2a80" opacity=".3" />
            </g>

            <!-- bintang kecil -->
            <g fill="#fff">
              <circle cx="38" cy="70" r="1.6" />
              <circle cx="86" cy="350" r="1.2" opacity=".8" />
              <circle cx="410" cy="330" r="1.8" />
              <circle cx="300" cy="18" r="1.2" opacity=".8" />
              <circle cx="14" cy="220" r="1.4" opacity=".7" />
            </g>
          </svg>
        </div>

        <h1 class="relative mx-auto mt-6 max-w-[15ch] text-balance bg-linear-to-b from-white to-ice/80 bg-clip-text font-display text-[30px] font-extrabold leading-[1.1] tracking-tight text-transparent sm:text-[44px]">
          Selamat datang di Galaksi Biru
        </h1>

        <p class="relative mx-auto mt-5 max-w-[46ch] text-[17px] leading-relaxed text-sky-100/80">
          Boarding pass kamu sudah siap. Pilih planet tujuan, klaim voucher perdana, dan jadi kru pertama yang mendarat di sana.
        </p>

        <div class="relative mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
          <a href="#tiket"
             class="inline-flex w-full items-center justify-center rounded-full bg-linear-to-r from-glow via-azure to-[#7aa2ff] px-8 py-4 text-base font-semibold text-[#03103a] shadow-[0_10px_40px_-8px_rgba(56,163,255,.9),inset_0_0_0_1px_rgba(255,255,255,.3)] transition hover:-translate-y-0.5 hover:brightness-110 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow sm:w-auto">
            Klaim boarding pass
          </a>
          <a href="#planet"
             class="inline-flex w-full items-center justify-center rounded-full border border-white/20 px-8 py-4 text-base font-medium text-ice transition hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow sm:w-auto">
            Lihat semua planet
          </a>
        </div>
      </section>

      <!-- ===================== BOARDING PASS ===================== -->
      <section id="tiket" class="px-6 pb-14 sm:px-9">
        <h2 class="font-display text-2xl font-bold leading-tight tracking-tight text-white sm:text-[28px]">Boarding pass kamu</h2>
        <p class="mt-3 max-w-[50ch] text-[17px] leading-relaxed text-sky-100/80">
          Tunjukkan kode di bawah saat checkout. Diskon 25% berlaku untuk semua pesanan pertamamu.
        </p>

        <div class="relative mt-7 rounded-2xl border border-sky-400/25 bg-linear-to-b from-[#0d2278] to-[#071444]">
          <div class="absolute inset-x-0 top-0 h-1 rounded-t-2xl bg-linear-to-r from-glow via-cobalt to-indigo-400"></div>

          <!-- Bagian utama tiket -->
          <div class="p-5 pt-6 sm:p-7 sm:pt-8">
            <div class="flex items-center justify-between font-mono text-[11px] uppercase tracking-[.2em] text-sky-200/75">
              <span>Boarding pass</span>
              <span>No. LG-0929-26</span>
            </div>

            <div class="mt-6 flex items-center gap-3 sm:gap-5">
              <div>
                <p class="font-display text-3xl font-extrabold leading-none text-white sm:text-4xl">BMI</p>
                <p class="mt-2 text-sm text-sky-100/75">Bumi</p>
              </div>

              <div class="flex flex-1 items-center gap-2" aria-hidden="true">
                <div class="h-px flex-1 border-t border-dashed border-sky-300/45"></div>
                <span class="grid size-10 place-items-center rounded-full bg-cobalt/25 text-glow ring-1 ring-glow/40">
                  <svg viewBox="0 0 24 24" class="size-5 rotate-90" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2c3 2.5 5 6 5 10l-2 3H9l-2-3c0-4 2-7.5 5-10Z" />
                    <circle cx="12" cy="9" r="1.6" />
                    <path d="M7 13l-3 3 1 3 3-2M17 13l3 3-1 3-3-2M10 18l2 4 2-4" />
                  </svg>
                </span>
                <div class="h-px flex-1 border-t border-dashed border-sky-300/45"></div>
              </div>

              <div class="text-right">
                <p class="font-display text-3xl font-extrabold leading-none text-glow sm:text-4xl">AZ7</p>
                <p class="mt-2 text-sm text-sky-100/75">Azura-7</p>
              </div>
            </div>

            <dl class="mt-7 grid grid-cols-2 gap-x-4 gap-y-5 sm:grid-cols-4">
              <div>
                <dt class="font-mono text-[11px] uppercase tracking-[.15em] text-sky-200/70">Penumpang</dt>
                <dd class="mt-1 font-semibold text-white">Kru baru</dd>
              </div>
              <div>
                <dt class="font-mono text-[11px] uppercase tracking-[.15em] text-sky-200/70">Kelas</dt>
                <dd class="mt-1 font-semibold text-white">Kosmik</dd>
              </div>
              <div>
                <dt class="font-mono text-[11px] uppercase tracking-[.15em] text-sky-200/70">Gerbang</dt>
                <dd class="mt-1 font-semibold text-white">B-07</dd>
              </div>
              <div>
                <dt class="font-mono text-[11px] uppercase tracking-[.15em] text-sky-200/70">Berangkat</dt>
                <dd class="mt-1 font-semibold text-white">3 Okt, 19.30</dd>
              </div>
            </dl>
          </div>

          <!-- Garis sobekan -->
          <div class="relative h-6">
            <span class="absolute -left-3 top-0 size-6 rounded-full bg-abyss"></span>
            <span class="absolute -right-3 top-0 size-6 rounded-full bg-abyss"></span>
            <div class="absolute inset-x-6 top-1/2 border-t border-dashed border-sky-300/35"></div>
          </div>

          <!-- Stub voucher -->
          <div class="flex flex-col items-center gap-5 p-5 pb-6 sm:flex-row sm:justify-between sm:p-7 sm:pt-5">
            <div class="text-center sm:text-left">
              <p class="text-sm text-sky-100/75">Kode voucher, diskon 25%</p>
              <p class="mt-2 inline-block rounded-lg border border-dashed border-glow/60 bg-glow/10 px-4 py-2 font-display text-xl font-extrabold tracking-wider text-white sm:text-2xl">
                LELE-BIRU25
              </p>
              <p class="mt-2 text-sm text-sky-100/75">Berlaku sampai 31 Oktober 2026</p>
            </div>
            <div class="barcode h-14 w-44 shrink-0 rounded-sm opacity-90" role="img" aria-label="Barcode voucher LELE-BIRU25"></div>
          </div>
        </div>
      </section>

      <!-- ===================== PLANET ===================== -->
      <section id="planet" class="border-t border-white/10 px-6 py-14 sm:px-9">
        <h2 class="font-display text-2xl font-bold leading-tight tracking-tight text-white sm:text-[28px]">Empat planet biru untuk dijelajahi</h2>
        <p class="mt-3 max-w-[50ch] text-[17px] leading-relaxed text-sky-100/80">
          Semuanya sudah kami survei. Tinggal pilih yang paling cocok denganmu.
        </p>

        <ul class="mt-6 divide-y divide-white/10">
          <li class="flex items-center gap-5 py-6">
            <div class="planet-wrap size-[72px] shrink-0" style="--p-hi:#c8f4ff;--p-mid:#2ea8ff;--p-lo:#0a2f9c;--p-glow:rgba(56,163,255,.5)" aria-hidden="true">
              <div class="planet"></div>
            </div>
            <div>
              <h3 class="font-display text-[15px] font-bold text-white">Azura-7</h3>
              <p class="mt-1.5 text-[16px] leading-relaxed text-sky-100/80">Planet samudra tanpa daratan. Airnya biru pekat dan tenang, dengan suhu rata-rata 18°C.</p>
              <a href="#" class="mt-2 inline-block text-sm font-medium text-glow underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Jelajahi Azura-7</a>
            </div>
          </li>

          <li class="flex items-center gap-5 py-6">
            <div class="planet-wrap has-ring size-[72px] shrink-0 mx-4" style="--p-hi:#9bb8ff;--p-mid:#2a4bff;--p-lo:#0a1470;--p-glow:rgba(60,90,255,.55)" aria-hidden="true">
              <div class="planet"></div>
            </div>
            <div>
              <h3 class="font-display text-[15px] font-bold text-white">Cobalt Prime</h3>
              <p class="mt-1.5 text-[16px] leading-relaxed text-sky-100/80">Badai petir biru menyala sepanjang malam, dikelilingi dua cincin es yang berkilau.</p>
              <a href="#" class="mt-2 inline-block text-sm font-medium text-glow underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Jelajahi Cobalt Prime</a>
            </div>
          </li>

          <li class="flex items-center gap-5 py-6">
            <div class="planet-wrap size-[72px] shrink-0" style="--p-hi:#f0fbff;--p-mid:#8fd3ff;--p-lo:#2d6fd6;--p-glow:rgba(160,225,255,.45)" aria-hidden="true">
              <div class="planet"></div>
            </div>
            <div>
              <h3 class="font-display text-[15px] font-bold text-white">Nepta</h3>
              <p class="mt-1.5 text-[16px] leading-relaxed text-sky-100/80">Berselimut es kristal yang memantulkan cahaya bintang. Suhunya −214°C, jadi bawa jaket.</p>
              <a href="#" class="mt-2 inline-block text-sm font-medium text-glow underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Jelajahi Nepta</a>
            </div>
          </li>

          <li class="flex items-center gap-5 py-6">
            <div class="planet-wrap size-[72px] shrink-0" style="--p-hi:#c4c8ff;--p-mid:#5560ff;--p-lo:#1b1a7a;--p-glow:rgba(110,100,255,.5)" aria-hidden="true">
              <div class="planet"></div>
            </div>
            <div>
              <h3 class="font-display text-[15px] font-bold text-white">Indigo Minor</h3>
              <p class="mt-1.5 text-[16px] leading-relaxed text-sky-100/80">Planet kecil yang sunyi, berwarna ungu kebiruan. Tempat paling pas untuk rebahan.</p>
              <a href="#" class="mt-2 inline-block text-sm font-medium text-glow underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Jelajahi Indigo Minor</a>
            </div>
          </li>
        </ul>
      </section>

      <!-- ===================== KEUNTUNGAN KRU ===================== -->
      <section class="border-t border-white/10 px-6 py-14 sm:px-9">
        <h2 class="font-display text-2xl font-bold leading-tight tracking-tight text-white sm:text-[28px]">Yang kamu dapat sebagai kru</h2>

        <div class="mt-7 space-y-7">
          <div class="flex gap-4">
            <span class="grid size-11 shrink-0 place-items-center rounded-full bg-cobalt/20 text-glow ring-1 ring-glow/30">
              <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 3l2.6 5.6 6.1.7-4.5 4.2 1.2 6L12 16.4 6.6 19.5l1.2-6L3.3 9.3l6.1-.7L12 3Z" />
              </svg>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-white">Akses lebih dulu</h3>
              <p class="mt-1 text-[16px] leading-relaxed text-sky-100/80">Lihat koleksi baru sebelum dibuka untuk umum, dan amankan pilihanmu lebih awal.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <span class="grid size-11 shrink-0 place-items-center rounded-full bg-cobalt/20 text-glow ring-1 ring-glow/30">
              <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="8" width="18" height="4" rx="1" />
                <path d="M12 8v13M5 12v8a1 1 0 001 1h12a1 1 0 001-1v-8M7.5 8a2.5 2.5 0 110-5C10 3 12 8 12 8s2-5 4.5-5a2.5 2.5 0 110 5" />
              </svg>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-white">Kejutan tiap bulan</h3>
              <p class="mt-1 text-[16px] leading-relaxed text-sky-100/80">Satu hadiah kecil dari markas untuk kru yang sudah bergabung, tanpa perlu kode apa pun.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <span class="grid size-11 shrink-0 place-items-center rounded-full bg-cobalt/20 text-glow ring-1 ring-glow/30">
              <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M2 9a14 14 0 0120 0M5 12.5a10 10 0 0114 0M8 16a6 6 0 018 0" />
                <circle cx="12" cy="19.2" r="1.2" />
              </svg>
            </span>
            <div>
              <h3 class="text-lg font-semibold text-white">Kabar tanpa telat</h3>
              <p class="mt-1 text-[16px] leading-relaxed text-sky-100/80">Promo dan info peluncuran langsung masuk ke inbox kamu, cukup satu email per minggu.</p>
            </div>
          </div>
        </div>

        <!-- Testimoni -->
        <figure class="relative mt-12">
          <span class="absolute -top-5 -left-1 font-display text-7xl leading-none text-glow/70" aria-hidden="true">“</span>
          <blockquote class="relative pt-6 text-[21px] font-light leading-[1.5] text-ice sm:text-[23px]">
            Baru seminggu gabung, aku sudah dapat akses duluan ke planet baru. Rasanya seperti punya kunci rahasia ke alam semesta.
          </blockquote>
          <figcaption class="mt-6 flex items-center gap-3">
            <div class="planet-wrap size-11 shrink-0" style="--p-hi:#c8f4ff;--p-mid:#2ea8ff;--p-lo:#0a2f9c;--p-glow:rgba(56,163,255,.4)" aria-hidden="true">
              <div class="planet"></div>
            </div>
            <div>
              <p class="font-semibold text-white">Raka Aditya</p>
              <p class="text-sm text-sky-100/70">Kru nomor 0231</p>
            </div>
          </figcaption>
        </figure>

        <p class="mt-10 text-[16px] leading-relaxed text-sky-100/80">
          Sampai jumpa di orbit,<br />
          <span class="font-display text-[15px] font-bold text-white">Kapten Lele 🐟</span>
        </p>
      </section>

      <!-- ===================== PENUTUP: CAKRAWALA ===================== -->
      <section class="relative overflow-hidden border-t border-white/10 px-6 pb-40 pt-14 text-center sm:px-9">
        <div class="stars-a fade-b absolute inset-0 opacity-60" aria-hidden="true"></div>

        <div class="relative z-10">
          <h2 class="mx-auto max-w-[18ch] text-balance font-display text-2xl font-extrabold leading-tight tracking-tight text-white sm:text-[32px]">
            Roket berangkat 3 Oktober
          </h2>
          <p class="mx-auto mt-4 max-w-[40ch] text-[17px] leading-relaxed text-sky-100/80">
            Kursi kru perdana terbatas. Klaim boarding pass sebelum penuh.
          </p>
          <a href="#tiket"
             class="mt-8 inline-flex items-center justify-center rounded-full bg-linear-to-r from-glow via-azure to-[#7aa2ff] px-8 py-4 text-base font-semibold text-[#03103a] shadow-[0_10px_40px_-8px_rgba(56,163,255,.9),inset_0_0_0_1px_rgba(255,255,255,.3)] transition hover:-translate-y-0.5 hover:brightness-110 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow">
            Klaim boarding pass
          </a>
        </div>

        <div class="horizon absolute left-1/2 top-full -mt-28 aspect-square w-[160%] -translate-x-1/2 rounded-full" aria-hidden="true"></div>
      </section>

      <!-- ===================== FOOTER ===================== -->
      <footer class="bg-void px-6 py-10 text-center sm:px-9">
        <div class="flex items-center justify-center gap-2.5">
          <svg class="size-8" aria-hidden="true"><use href="#logo-mark" /></svg>
          <span class="font-display text-sm font-extrabold tracking-tight text-white">LELE Gi<span class="text-glow">MANG</span></span>
        </div>

        <nav class="mt-5 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm" aria-label="Media sosial">
          <a href="#" class="text-ice underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Instagram</a>
          <a href="#" class="text-ice underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">TikTok</a>
          <a href="#" class="text-ice underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">YouTube</a>
        </nav>

        <p class="mx-auto mt-6 max-w-[46ch] text-sm leading-relaxed text-sky-100/65">
          Kamu menerima email ini karena mendaftar di Klub Galaksi Biru LELE GiMANG.
        </p>
        <p class="mt-3 text-sm text-sky-100/65">
          <a href="#" class="underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Atur preferensi</a>
          <span class="mx-2 text-white/30">|</span>
          <a href="#" class="underline underline-offset-4 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow">Berhenti berlangganan</a>
        </p>
        <p class="mt-5 text-xs text-sky-100/50">Jl. Galaksi Biru No. 42, Indonesia<br />© 2026 LELE GiMANG. Semua hak dilindungi.</p>
      </footer>
    </main>
  </div>
</body>
</html>