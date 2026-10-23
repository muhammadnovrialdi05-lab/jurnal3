<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') - LaporBanjir</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header { background: #0c4a6e; color: #fff; padding: 18px 24px; }
        header h1 { margin: 0; font-size: 1.5rem; }
        header p { margin: 4px 0 0; font-size: .9rem; opacity: .85; }
        nav { background: #075985; padding: 0 24px; }
        nav a {
            display: inline-block; color: #e0f2fe; text-decoration: none;
            padding: 12px 16px; font-weight: 500;
        }
        nav a:hover { background: #0369a1; }
        nav a.active { background: #0ea5e9; color: #fff; }
        main { flex: 1; width: 100%; max-width: 900px; margin: 24px auto; padding: 0 16px; }
        h2 { margin-top: 0; }
        .panel { background: #fff; border-radius: 8px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        label { display: block; font-weight: 600; margin: 14px 0 6px; }
        input[type=text], input[type=number] {
            width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem;
        }
        input.invalid { border-color: #dc2626; }
        .error { color: #dc2626; font-size: .85rem; margin-top: 4px; }
        .btn {
            display: inline-block; margin-top: 18px; padding: 10px 20px; border: 0; border-radius: 6px;
            background: #0284c7; color: #fff; font-size: 1rem; cursor: pointer; text-decoration: none;
        }
        .btn:hover { background: #0369a1; }
        .btn-secondary { background: #64748b; }
        .btn-secondary:hover { background: #475569; }
        .card {
            background: #fff; border-radius: 8px; padding: 16px 20px; margin-bottom: 14px;
            box-shadow: 0 1px 3px rgba(0,0,0,.1); border-left: 6px solid #94a3b8;
        }
        .card h3 { margin: 0 0 6px; }
        .card p { margin: 4px 0; }
        .card.waspada { border-left-color: #eab308; }
        .card.siaga   { border-left-color: #f97316; }
        .card.awas    { border-left-color: #dc2626; }
        .badge { display: inline-block; padding: 3px 12px; border-radius: 999px; color: #fff; font-size: .85rem; font-weight: 600; }
        .badge.waspada { background: #ca8a04; }
        .badge.siaga   { background: #ea580c; }
        .badge.awas    { background: #dc2626; }
        .alert { padding: 14px 18px; border-radius: 6px; margin-bottom: 18px; border: 1px solid; }
        .alert-success { background: #dcfce7; border-color: #86efac; color: #166534; }
        .alert-danger  { background: #fee2e2; border-color: #fca5a5; color: #991b1b; }
        .alert-info    { background: #e0f2fe; border-color: #7dd3fc; color: #075985; }
        table.data { width: 100%; border-collapse: collapse; }
        table.data td { padding: 10px 8px; border-bottom: 1px solid #e2e8f0; }
        table.data td:first-child { width: 35%; font-weight: 600; color: #475569; }
        footer { background: #0f172a; color: #94a3b8; text-align: center; padding: 16px; font-size: .85rem; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <p>Sistem Pelaporan Banjir - BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('laporan.create') }}" class="{{ request()->routeIs('laporan.create') ? 'active' : '' }}">Form Pelaporan</a>
        <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung. Prototipe LaporBanjir.
    </footer>
</body>
</html>
