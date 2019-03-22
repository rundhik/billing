<html>
    <head>
		<title>Tes Billing - Cetak Tagihan</title>
		<!-- Web Fonts  -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

		<!-- Invoice Print Style -->
		<link rel="stylesheet" href="{{ asset('css/invoice-print.css') }}">
	</head>
	<body sip-shortcut-listen="true" style="">
		<div class="invoice">
			<header class="clearfix">
				<div class="row">
					<div class="col-sm-6 mt-md">
						<h2 class="h2 mt-none mb-sm text-dark text-bold">INVOICE</h2>
						<h4 class="h4 m-none text-dark text-bold">#{{ $t->tagihan_kode }}</h4>
					</div>
					<div class="col-sm-6 text-right mt-md mb-md">
						<address class="ib mr-xlg">
							Tes Billing, Ltd
							<br>
							Surabaya, Jawa Timur, Indonesia
							<br>
							Phone: +12 3 4567-8901
							<br>
							admin@localhost.com
						</address>
						<div class="ib">
							<img src="{{ asset('images/invoice-logo.png') }}" alt="OKLER Themes">
						</div>
					</div>
				</div>
			</header>
			<div class="bill-info">
				<div class="row">
					<div class="col-md-6">
						<div class="bill-to">
							<p class="h5 mb-xs text-dark text-semibold">Kepada:</p>
							<address>
								{{ $t->penggunaan->customer->nm_customer }}
								<br>
								{{ $t->penggunaan->customer->alamat }}
								<br>
								Phone: {{ $t->penggunaan->customer->telp }}
							</address>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bill-data text-right">
							<p class="mb-none">
								<span class="text-dark">Periode tagihan:</span>
                                <span class="value">{{ $t->penggunaan->periode->deskripsi }}</span>
                                <br/>
								<span class="text-dark">Kode:</span>
                                <span class="value">{{ $t->penggunaan->periode->kode }}</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="table-responsive">
				<table class="table invoice-items">
					<thead>
						<tr class="h4 text-dark">
							<th id="cell-desc" class="text-semibold">Penggunaan {{ $t->penggunaan->layanan->nm_layanan }}</th>
							<th id="cell-price" class="text-center text-semibold">Tarif</th>
							<th id="cell-qty" class="text-center text-semibold">Meter</th>
							<th id="cell-total" class="text-center text-semibold">Total</th>
						</tr>
					</thead>
					<tbody> 
                        @for ($i = 0; $i < $count; $i++)
                            @if ($i == 0)
                                <tr>
                                    <td>Pemakaian 0 - 1 @if ($t->penggunaan->layanan_id == 1) (m3) @else Kwh @endif</td>
                                    <td class="text-center">{{ number_format($t->penggunaan->layanan->tarif->tarif[$i],0,'.',',') }}</td>
                                    <td class="text-center">@if ($u > 10) 10 @else {{ $u }} @endif @php $x = $u; $u = $u-10; @endphp</td>
                                    <td class="text-center">{{ number_format($t->tagihan[$i],0,'.',',') }} </td>
                                </tr>
                            @elseif ( $i == 1 )
                                <tr>
                                    <td>Pemakaian > 10 - 20 @if ($t->penggunaan->layanan_id == 1) (m3) @else Kwh @endif</td>
                                    <td class="text-center">{{ number_format($t->penggunaan->layanan->tarif->tarif[$i],0,'.',',') }}</td>
                                    <td class="text-center">@if ($u > 10) 10 @else {{ $u }} @endif @php $u = $u-10; @endphp</td>
                                    <td class="text-center">{{ number_format($t->tagihan[$i],0,'.',',') }} </td>
                                </tr>
                            @elseif ( $i == 2 )
                                <tr>
                                    <td>Pemakaian > 20 - 30 @if ($t->penggunaan->layanan_id == 1) (m3) @else Kwh @endif</td>
                                    <td class="text-center">{{ number_format($t->penggunaan->layanan->tarif->tarif[$i],0,'.',',') }}</td>
                                    <td class="text-center">@if ($u > 10) 10 @else {{ $u }} @endif @php $u = $u-10; @endphp</td>
                                    <td class="text-center">{{ number_format($t->tagihan[$i],0,'.',',') }} </td>
                                </tr>
                            @elseif ( $i == 3 )
                                <tr>
                                    <td>Pemakaian > 30 @if ($t->penggunaan->layanan_id == 1) (m3) @else Kwh @endif</td>
                                    <td class="text-center">{{ number_format($t->penggunaan->layanan->tarif->tarif[$i],0,'.',',') }}</td>
                                    <td class="text-center">{{ $u }}</td>
                                    <td class="text-center">{{ number_format($t->tagihan[$i],0,'.',',') }} </td>
                                </tr>
                            @endif
                        @endfor
					</tbody>
				</table>
			</div>
		
			<div class="invoice-summary">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-8">
						<table class="table h5 text-dark">
							<tbody>
								<tr class="b-top-none">
									<td colspan="2">Total Meter</td>
									<td class="text-left">{{ $x }}</td>
								</tr>
								<tr class="h4">
									<td colspan="2">Total Tagihan</td>
									<td class="text-left">{{ number_format(array_sum($t->tagihan),0,'.',',') }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
        <script type="text/javascript">
			window.print();
		</script>
    </body>
</html>