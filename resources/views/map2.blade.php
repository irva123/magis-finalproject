
@extends('layouts.main2')
                                    <nav class="contact2 navbar-default">
                                        <div class="container">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-3 col-sm-3">
                                                                <a style="padding-top:0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="index.html"></a>
                                                                
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                                     
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-right navBar">
                                                    <li class="nav-item"><a href="/homepage" class="nav-link  font-weight-bold js-scroll-trigger">Homepage <span class="sr-only">(current)</span></a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link  font-weight-bold dropdown-toggle" href="#" data-toggle="dropdown"> Geopark <span></span></a> 
                                                    <!-- Dropdown list -->
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="/geoheritage2">Geoheritage</a></li>
                                                        <li><a class="dropdown-item" href="/geodiversity2">Geodiversity</a></li>
                                                        <li><a class="dropdown-item" href="/biodiversity2">Biodiversity</a></li>
                                                        <li><a class="dropdown-item" href="/culturaldiversity2">Cultural Diversity</a></li>
                                                    </ul>
                                                    </li>
                                                </li>
                                                    <li class="nav-item"><a href="#" class="nav-link  font-weight-bold ">Kegiatan</a></li>
                                                    <li class="nav-item"><a href="/map2" class="nav-link  font-weight-bold ">Peta</a></li>
                                                    <li class="nav-item"><a href="/kritik/create" class="nav-link  font-weight-bold ">Kritik dan saran</a></li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/login">
                                                        <i class="fa fa-user-circle-o fa-2x" ></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
<div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="page-title-content">
                            <h2 class="text-uppercase font-weight-bold text-center pt-5">
                                Peta Kabupaten Malang
                            </h2>
                    </div>
                </div>
            </div>
<div class="container py-4 justify-content-center">
        <div class="row">
            <div class="col-md-4 col-xs-6 mb-2">
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                            <tbody>
                                <th colspan="2" class="text-center">Legenda</th>
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
