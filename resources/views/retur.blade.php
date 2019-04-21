@extends('layouts.main')
@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL RETUR PRODUK
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

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata" >Tambah Retur</button>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Barcode</th>
                                            <th>Nama</th>
                                            <th>Jumlah Retur</th>
                                            <th>Staf Konter</th>
                                            <th>Staf Gudang</th>
                                            <th>option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach( $retur as $data)
                                        <tr>
                                            <td>{{$data->tanggal_retur}}</td>
                                            <td>{{$data->barcode}}</td>
                                            <td>{{$data->nama_produk}}</td>
                                            <td>{{$data->jumlah_retur}}</td>
                                            <td>{{$data->id_konter}}</td>
                                            <td>{{$data->id_gudang}}</td>
                                            <td>
                                            <button type="submit" href="#" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#editRetur{{$data->barcode}}">
                                                <i class="material-icons">edit</i>
                                                <span>Update</span>
                                            </button>
                                        	<button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#hapusModal">
                                                <i class="material-icons">delete</i>
                                                <span>Delete</span>
                                            </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Retur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tanggal Masuk:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Barcode:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Produk:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jumlah Retur:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tanggal Kedaluarsa:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Staf Konter:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Staf Gudang:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
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




        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Retur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tanggal Masuk:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Barcode:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Produk:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jumlah Retur:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tanggal Kedaluarsa:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Staf Konter:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Staf Gedung:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            <!-- #END# Exportable Table -->
@endsection