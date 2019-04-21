@extends('layouts.main')
@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL REKAP PEMBAYARAN
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
                                            <th>ID Invoice</th>
                                            <th>Total Tagihan</th>
                                            <th>Total Bayar</th>
                                            <th>Selisih</th>
                                            <th>option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>Edinburgh</td>
                                            <td>
                                            <button type="button" href="" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#editModal">
                                                    <i class="material-icons">edit</i>
                                                    <span>Update</span>
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#hapusModal">
                                                    <i class="material-icons">delete</i>
                                                    <span>Delete</span>
                                            </td>
                                        </tr>
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




        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Stok</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ID Invoice:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Total Tagihan:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Total Bayar:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="" placholder="Tanggal Masuk">
                            </div>
                        </div>
                        
                     
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
@endsection