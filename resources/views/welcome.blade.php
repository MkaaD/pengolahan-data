@php
    $dbConnected = true;
    $dbStatus = 'Terhubung ke MySQL';
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
    } catch (\Throwable $e) {
        $dbConnected = false;
        $dbStatus = 'Belum terhubung';
    }
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Data - Laravel 12</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 16px;
            max-width: 680px;
            width: 100%;
            padding: 32px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.4);
        }
        .badge {
            display: inline-block;
            background: #ef4444;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 999px;
            letter-spacing: 0.5px;
            margin-bottom: 14px;
        }
        h1 {
            font-size: 28px;
            line-height: 1.3;
            margin-bottom: 10px;
            color: #ffffff;
        }
        p.subtitle {
            color: #94a3b8;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 24px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 14px;
            margin-bottom: 24px;
        }
        .box {
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 10px;
            padding: 14px 16px;
        }
        .box-label {
            font-size: 12px;
            color: #94a3b8;
            margin-bottom: 6px;
            text-transform: uppercase;
        }
        .box-value {
            font-size: 15px;
            font-weight: 600;
            color: #f1f5f9;
        }
        .status-ok {
            color: #4ade80;
        }
        .status-err {
            color: #f87171;
        }
        .footer {
            border-top: 1px solid #334155;
            padding-top: 16px;
            font-size: 13px;
            color: #94a3b8;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 8px;
        }
        @media (max-width: 480px) {
            .card {
                padding: 22px;
            }
            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <span class="badge">PRAKTIKUM PEMROGRAMAN WEB</span>
        <h1>Aplikasi Pengelolaan Data</h1>
        <p class="subtitle">
            Website ini dibangun menggunakan Laravel 12, dikelola dengan Git &amp; GitHub,
            dan siap dipublikasikan ke server hosting cPanel.
        </p>

        <div class="grid">
            <div class="box">
                <div class="box-label">Framework</div>
                <div class="box-value">Laravel {{ app()->version() }}</div>
            </div>
            <div class="box">
                <div class="box-label">Versi PHP</div>
                <div class="box-value">PHP {{ PHP_VERSION }}</div>
            </div>
            <div class="box">
                <div class="box-label">Status Database</div>
                <div class="box-value {{ $dbConnected ? 'status-ok' : 'status-err' }}">
                    {{ $dbStatus }}
                </div>
            </div>
        </div>

        <div class="footer">
            <span>Mahasiswa: Arya Nandika Riptohadi J0404251074</span>
            <span>Prodi: Teknologi Rekayasa Komputer</span>
        </div>
    </div>
</body>
</html>