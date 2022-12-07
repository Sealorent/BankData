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
                                <thead>
                                    <tr>
                                        <th style="width: 2%">#</th>
                                        <th style="width: 5%">Kode Sampel</th>
                                        <th style="width: 3% ">Virus</th>
                                        <th style="width: 4%;">Genotipe dan Subtipe
                                        </th>
                                        <th style="width: 3%">Tanggal</th>
                                        <th style="width: 5%">Tempat</th>
                                        <th style="width: 9%;">Data Sekuen</th>
                                        <th style="width: 5%">Judul</th>
                                        <th style="width: 5%">Author</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 5%">1</td>
                                        <td style="width: 5%">MT163520</td>
                                        <td style="width: 5%">HIV</td>
                                        <td style="width: 5%">CRF01_AE</td>
                                        <td style="width: 5%">Agustus 2018</td>
                                        <td style="width: 5%">Medan, Sumatra utara</td>
                                        <td style="width: 5%;">Pol gene
                                            <br>
                                            ccaattagcc ctattgacac tgtaccagta acattaaagc caggaatgga tggaccaaag gtcaaacagt
                                            ggccattgac agaagaaaaa ataaaagcat taacagaaat ttgtaatgag atggaaaagg aaggaaaaat
                                            ctcaaaaatt gggcctgaaa atccatacaa tactccaata tttgctataa agaaaaagga tggcactaaa
                                            tggaggaagt tagtagattt cagagagctc aataaaagaa ctcaagactt ttgggaagtt caattaggaa
                                            taccacatcc agcaggctta aaaaagaaaa aatcagtaac agtactagat gtgggagatg catatttttc
                                            agttccttta gatgaaaact ttagaaagta tactgcattc accataccta gtataaataa tgaaacacca
                                            ggagtcagat atcagtacaa tgtgctacca cagggatgga aaggatcacc agcaatattc cagagtagca
                                            tgacaaaaat cttagagccc tttagaataa aaaatccaga aatgattatc tatcaataca tggatgactt
                                            gtatgtagga tctgatttag aaatagggca gcacagaaga
                                            aaaatagagg agctgagagc tcatctattg aattggggat ttactacacc agacaaaaag catcagaagg
                                            aacctccatt cctttggatg ggatatgaac ttcatcctga caaatggaca gtccagccta tacagttgcc
                                            agaaaaagac agttggactg tc
                                        </td>
                                        <td style="width: 5%">The Dominance of CRF01_AE and the Emergence of Drug
                                            Resistance Mutations
                                            Among Antiretroviral Therapy-Experienced, HIV-1 infected Individuals in
                                            Medan, Indonesia</td>
                                        <td style="width: 5%">Indriati, Dwi W.; Witaningrum, Adiana M.; Yunifiar, M.
                                            Qushai; Khairunisa,
                                            Siti Q.; Ueda, Shuhei; Kotaki, Tomohiro; Nasronudin, Kameoka, Masanori.</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 5%">Kode Sampel</th>
                                        <th style="width: 5%">Virus</th>
                                        <th style="width: 5%">Genotipe dan Subtipe</th>
                                        <th style="width: 5%">Tanggal</th>
                                        <th style="width: 5%">Tempat</th>
                                        <th style="width: 5%">Data Sekuen</th>
                                        <th style="width: 5%">Judul</th>
                                        <th style="width: 5%">Author</th>
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
