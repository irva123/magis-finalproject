
@extends('layouts.main2')

@section('navbar')
<div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="">
                            <h2 class="text-uppercase font-weight-bold text-center pt-5">
                                Peta Kabupaten Malang
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
<div class="container py-4 justify-content-center">
        <div class="row">
            <div class="col-md-4 col-xs-6 mb-2">
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                            <tbody><tr>
                                <th colspan="2" class="text-center">Legenda</th>
                            </tr>
                            <tr>
                                    <td width="80px" class="p-1">
                                    <div style="background: #30494A;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Geoheritage
                                    </td>
                                </tr>
                            <tr>
                                    <td width="80px" class="p-1">
                                    <div style="background: #CB3ECE;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Geodiversity
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50px" class="p-1">
                                        <div style="background: #31BC53;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Biodiversity
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50px" class="p-1">
                                        <div style="background: #448FB3;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Culture Diversity
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="/homepage" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-6">
                <div class="card">
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>