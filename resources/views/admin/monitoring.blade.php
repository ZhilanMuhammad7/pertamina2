@extends('layouts.master')
@section('content')
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <h5>Monitoring Pemenuhan Kompetensi Pekerja</h5>
            <br>
            <span class="mb-2">
                <span class="text-muted fw-semibold me-1">No Pekerja</span>
                <span class="text-primary fw-bold">xxxxx</span>
            </span>
            <span class="mb-2">
                <span class="text-muted fw-semibold me-1">Nama</span>
                <span class="text-primary fw-bold">aaaaaa</span>
            </span>
            <span class="mb-2">
                <span class="text-muted fw-semibold me-1">Jabatan</span>
                <span class="text-primary fw-bold">PT Kilang Pertamina Internasional</span>
            </span>
            <span class="mb-2">
                <span class="text-muted fw-semibold me-1">Bagian</span>
                <span class="text-primary fw-bold">HC Business Partner</span>
            </span>
        </div>
    </div>
</div>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::Tables Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Kebutuhan Training</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class=" text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-50px">No</th>
                                <th class=class="min-w-125px">Kompetensi</th>
                                <th class=class="min-w-125px">Training</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                </tbody>
                            </table>
                            <span class="text-muted mt-1 fw-semibold fs-7">Realisasi (%) : 0 %</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Realisasi training</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">Realisasi Kebutuhan Training</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class=" text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-50px">No</th>
                                <th class=class="min-w-125px">Training</th>
                                <th class=class="min-w-125px">Tgl Training</th>
                                <th class=class="min-w-125px">Dokumen</th>
                                <th class=class="min-w-125px">Status</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 ms-auto">
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="text-muted mt-1 fw-semibold fs-7"> History Training :</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class=" text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-50px">No</th>
                                <th class=class="min-w-125px">Training</th>
                                <th class=class="min-w-125px">Tgl Training</th>
                                <th class=class="min-w-125px">Dokumen</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    <tr>
                                        <td>1</td>
                                        <td>JMDP (Mobile Learning)</td>
                                        <td>31/12/2023</td>
                                        <td></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection