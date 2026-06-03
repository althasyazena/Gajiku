<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Slip Gaji</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 12px;
            color: #1f2937;
            background: #fff;
        }

        .page {
            padding: 40px;
        }

        .company-name {
            font-size: 18px;
            font-weight: bold;
            color: #2563eb;
        }

        .company-sub {
            font-size: 11px;
            color: #6b7280;
            margin-top: 2px;
        }

        .slip-title {
            text-align: right;
            font-size: 14px;
            font-weight: bold;
        }

        .slip-period {
            text-align: right;
            font-size: 11px;
            color: #6b7280;
        }

        .info-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 14px 18px;
            margin-bottom: 20px;
        }

        .info-box table {
            width: 100%;
        }

        .info-box td {
            padding: 4px 0;
        }

        .section-title {
            font-size: 11px;
            font-weight: bold;
            color: #6b7280;
            text-transform: uppercase;
            margin-top: 16px;
        }

        .salary-table {
            width: 100%;
            margin-top: 6px;
        }

        .salary-table td {
            padding: 6px 10px;
        }

        .salary-table td:last-child {
            text-align: right;
        }

        .text-green {
            color: #16a34a;
        }

        .text-red {
            color: #dc2626;
        }

        .total-box {
            border-top: 2px dashed #d1d5db;
            margin-top: 12px;
            padding-top: 12px;
        }

        .total-box td:last-child {
            text-align: right;
            font-weight: bold;
            color: #2563eb;
        }

        .ttd-box {
            margin-top: 40px;
            text-align: right;
        }

        .ttd-line {
            margin-top: 50px;
            border-top: 1px solid #374151;
            width: 160px;
            display: inline-block;
        }

        .footer {
            margin-top: 40px;
            border-top: 1px solid #e5e7eb;
            padding-top: 10px;
            font-size: 10px;
            color: #9ca3af;
        }
    </style>
</head>

<body>
    <div class="page">

        <!-- HEADER -->
        <table style="width:100%; margin-bottom:20px;">
            <tr>
                <td>
                    <div class="company-name">PT. Contoh Sejahtera</div>
                    <div class="company-sub">Jl. Mawar No. 123, Jakarta</div>
                    <div class="company-sub">Telp: (021) 123456</div>
                </td>
                <td style="text-align:right;">
                    <div class="slip-title">SLIP GAJI</div>
                    <div class="slip-period">Periode: Mei 2025</div>
                </td>
            </tr>
        </table>

        <!-- INFO -->
        <div class="info-box">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: Andi Saputra</td>
                    <td>NIK</td>
                    <td>: 12345678</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>: Staff IT</td>
                    <td>Departemen</td>
                    <td>: Teknologi</td>
                </tr>
            </table>
        </div>

        <!-- PENDAPATAN -->
        <div class="section-title">Pendapatan</div>
        <table class="salary-table">
            <tr>
                <td>Gaji Pokok</td>
                <td>Rp 5.000.000</td>
            </tr>
            <tr>
                <td>Tunjangan Makan</td>
                <td class="text-green">+ Rp 500.000</td>
            </tr>
            <tr>
                <td>Tunjangan Transport</td>
                <td class="text-green">+ Rp 300.000</td>
            </tr>
        </table>

        <!-- POTONGAN -->
        <div class="section-title">Potongan</div>
        <table class="salary-table">
            <tr>
                <td>Potongan</td>
                <td class="text-red">- Rp 200.000</td>
            </tr>
        </table>

        <!-- TOTAL -->
        <div class="total-box">
            <table>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>Rp 5.600.000</td>
                </tr>
            </table>
        </div>

        <!-- TTD -->
        <div class="ttd-box">
            <p>Hormat kami,</p>
            <p>21 Mei 2026</p>
            <div class="ttd-line"></div>
            <div>HRD Manager</div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            Dokumen ini digenerate otomatis oleh sistem payroll.
        </div>

    </div>
</body>

</html>