@extends('layouts.main')
@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL BARANG KEDALUARSA
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Nama Produk</th>
                                            <th>option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $kadaluarsa as $data)
                                        <tr>
                                            <td>{{$data->tanggal_kadaluarsa}}</td>
                                            <td>{{$data->nama_produk}}</td>
                                            <td>
                                                <button type="submit" href="#" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#editKadaluarsa{{$data->barcode}}">
                                                            <i class="material-icons">edit</i>
                                                            <span>Update</span>
                                                    </button>
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#hapusModal">
                                                    <i class="material-icons">delete</i>
                                                    <span>Delete</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Delete</h4>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin menghapus data ini?
                        </div>
                        <form action="" method="POST">
                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="GET">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info waves-effect">YES</button>
                                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CANCEL</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>




@foreach($kadaluarsa as $data)
            <div class="modal fade" id="editKadaluarsa{{$data->barcode}}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h1 class="modal-title" id="myModalLabel">Edit</h1>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form action="{{Route('updateKadaluarsa', $data->barcode)}}">   
                                    <div class="form-group">
                                    <br>
                                        <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa :</label><br>
                                        <input type="text" class="form-control" id="tanggal_kadaluarsa" value='{{$data->tanggal_kadaluarsa}}' name="tanggal_kadaluarsa" style="border-bottom:1px solid black; width: 800px;">
                                    </div>
                                    <br>
                                                            
                                    <div class="form-group">
                                        <br>
                                        <label for="nama_produk">Nama Produk :</label><br>
                                        <input type="text" class="form-control" id="jumlah_stok" value='{{$data->nama_produk}}' name="nama_produk" style="border-bottom:1px solid black; width: 800px;">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    {{csrf_field()}}
                                                            
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <input type="hidden" name="_method" value="PUT">
                                <input name="_method" type="hidden" value="PATCH">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                            
            @endforeach
            <!-- #END# Exportable Table -->
@endsection