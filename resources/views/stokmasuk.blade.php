@extends('layouts.main')
@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               TABEL STOK MASUK
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
                               
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata" >Tambah Stok</button>
                            	
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Masuk</th>
                                            <th>Barcode</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Staf Konter</th>
                                            <th>Staf Gudang</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($stokmasuk as $data)
                                        <tr>
                                            <td>{{$data->tanggal_masuk}}</td>
                                            <td>{{$data->barcode}}</td>
                                            <td>{{$data->nama_produk}}</td>
                                            <td>{{$data->jumlah_masuk}}</td>
                                            <td>{{$data->id_konter}}</td>
                                            <td>{{$data->id_gudang}}</td>
                                            <td>
                                            <button type="submit" href="#" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#updateMasuk{{$data->id_masuk}}">
                                                            <i class="material-icons">edit</i>
                                                            <span>Update</span>
                                                    </button>
                                        	<button href="#" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#hapus{{$data->id_masuk}}">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                                            &nbsp;Delete
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
            </div>

            <!-- #END# Exportable Table -->
            <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Stok</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{csrf_field()}}
                        <form action="{{Route('tambahStok')}}">
                        <div class="form-group">
                            <label for="barcode" class="col-form-label">Barcode:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="barcode" name="barcode" placholder="Barcode">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_produk" class="col-form-label">Nama Produk:</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk" placholder="Nama Produk">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_masuk" class="col-form-label">Jumlah Masuk :</label>
                            <div class="form-line">
                                <input type="text" class="form-control" id="jumlah_masuk" name="jumlah_masuk" placholder="Jumlah Masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kadaluarsa" class="col-form-label">Tanggal Kadaluarsa :</label>
                            <div class="form-line">
                                <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" placholder="Tanggal Kadaluarsa">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        </form>
                        <input name="_method" type="hidden" value="PATCH">
                    </div>
                    
                    </div>
                </div>
                </div>

            @foreach($stokmasuk as $data)
            <div class="modal fade" id="hapus{{$data->id_masuk}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Delete</h4>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin menghapus data ini?
                        </div>
                        <form action="{{Route('hapusStokMasuk', $data->id_masuk)}}" method="POST">
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
            @endforeach
        </div>




        @foreach($stokmasuk as $data)
            <div class="modal fade" id="updateMasuk{{$data->id_masuk}}" tabindex="-1" role="dialog" aria-labelledby="mediumModall" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h1 class="modal-title" id="myModalLabel">Edit</h1>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form action="{{Route('updateMasuk', $data->id_masuk)}}">   
                                    <div class="form-group">
                                    <br>
                                        <label for="tanggal_masuk">Tanggal Masuk :</label><br>
                                        <input type="text" class="form-control" id="nama_produk" value='{{$data->tanggal_masuk}}' name="tanggal_masuk" style="border-bottom:1px solid black; width: 800px;">
                                    </div>
                                    <br>
                                                            
                                    <div class="form-group">
                                        <br>
                                        <label for="barcode">Barcode :</label><br>
                                        <input type="text" class="form-control" id="barcode" value='{{$data->barcode}}' name="barcode" style="border-bottom:1px solid black; width: 800px;">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <label for="jumlah_masuk">Jumlah Masuk :</label><br>
                                        <input type="text" class="form-control" id="jumlah_masuk" value='{{$data->jumlah_masuk}}' name="jumlah_masuk" style="border-bottom:1px solid black; width: 800px;">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <label for="tanggal_kadaluarsa">Tanggal Kedaluarsa :</label><br>
                                        <input type="text" class="form-control" id="tanggal_kadaluarsa" value='{{$data->tanggal_kadaluarsa}}' name="tanggal_kadaluarsa" style="border-bottom:1px solid black; width: 800px;">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <label for="staf_konter">Staf Konter :</label><br>
                                        <input type="text" class="form-control" id="id_konter" value='{{$data->id_konter}}' name="id_konter" style="border-bottom:1px solid black; width: 800px;">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <label for="staf_gudang">Staf Gudang :</label><br>
                                        <input type="text" class="form-control" id="id_gudang" value='{{$data->id_gudang}}' name="id_gudang" style="border-bottom:1px solid black; width: 800px;">
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
           
        </div>
@endsection