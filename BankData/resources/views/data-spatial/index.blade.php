@extends('template.template')
@section('content')
<style>
    .table {
        table-layout: fixed !important;
        white-space: inherit;
    }

    table td {
        word-wrap: break-word;
        overflow: hidden;
        white-space: inherit !important;
    }

    table th {
        word-wrap: break-word;
        overflow: hidden;
        white-space: inherit !important;
    }
</style>
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>{{ ucwords( Request::segment(1) )}}</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="">{{ ucwords( Request::segment(1) )}}</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <!-- [ page content ] start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Bank Data</h5>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap">
                                <thead align="center">
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 4%">Kode Sampel</th>
                                        <th style="width: 3% ">Virus</th>
                                        <th style="width: 4%;">Genotipe dan Subtipe</th>
                                        <th style="width: 4%">Gene</th>
                                        <th style="width: 4%">Bulan/Tahun Sampel</th>
                                        <th style="width: 5%;">Tempat Pengambilan</th>
                                        <th style="width: 5%">Area Pengambilan</th>
                                        <th style="width: 5%">Kota Pengambilan</th>
                                        <th style="width: 5%">Provinsi Pengambilan</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td style="width: 5%">1</td>
                                        <td style="width: 5%">MT163520</td>
                                        <td style="width: 5%">HIV</td>
                                        <td style="width: 5%">CRF01_AE</td>
                                        <td style="width: 5%">Agustus 2018</td>
                                        <td style="width: 5%">Medan, Sumatra utara</td>
                                        <td style="width: 5%;">Pol gene</td>
                                        <td style="width: 5%">-888888888 & -111111111</td>
                                        <td style="width: 5%">Monaco</td>
                                        <td style="width: 5%">Masanori</td>
                                    </tr>
                                </tbody>
                                <tfoot align="center">
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 5%">Kode Sampel</th>
                                        <th style="width: 3% ">Virus</th>
                                        <th style="width: 4%;">Genotipe dan Subtipe</th>
                                        <th style="width: 3%">Gene</th>
                                        <th style="width: 5%">Bulan/Tahun Sampel</th>
                                        <th style="width: 9%;">Tempat Pengambilan</th>
                                        <th style="width: 5%">Area Pengambilan</th>
                                        <th style="width: 5%">Kota Pengambilan</th>
                                        <th style="width: 5%">Provinsi Pengambilan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- [ page content ] end -->
            </div>
        </div>
    </div>
</div>
<script>

</script>

@endsection
