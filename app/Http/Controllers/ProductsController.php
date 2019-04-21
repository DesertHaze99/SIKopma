<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\StokMasuk;
use App\StafGudang;
use App\StafKonter;
use DB;


class ProductsController extends Controller {

    public function stok(){
       $product = DB::table('produk')
                    ->select('produk.*')
                    ->where('deleted', '=', 0)
                    ->get();
        return view('lihatstok', ['product' => $product ] );
    }


    public function updateStok(Request $request, $barcode){
        $c = Product::find( $barcode );
        $c->nama_produk = $request->nama_produk;
        $c->jumlah_stok = $request->jumlah_stok;
        $c->update();

        return redirect('lihatstok');
    }

    public function hapusStok(Request $request, $barcode){
        $c = Product::find($barcode);
        $c->deleted = 1;
        $c->save();

        return redirect('lihatstok');
    }





    public function stokmasuk(){
        $stokmasuk =  DB::table('stok_masuk')
                    ->select('stok_masuk.*', 'produk.*')
                    ->join('produk','produk.barcode', '=', 'stok_masuk.barcode')
                    ->where('stok_masuk.deleted','!=' , 1)
                    ->get();

        return view( 'stokmasuk', ['stokmasuk' => $stokmasuk ] );
    }

    public function updateMasuk(Request $request, $id_masuk){
        $c = StokMasuk::find( $id_masuk );
        $c->tanggal_masuk = $request->tanggal_masuk;
        $c->barcode = $request->barcode;
        $c->jumlah_masuk = $request->jumlah_masuk;
        $c->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;
        $c->id_konter = $request->id_konter;
        $c->id_gudang = $request->id_gudang;
        $c->update();

        return redirect('stokmasuk');
    }

    public function tambahStok(Request $request){
        if ($request->barcode == StokMasuk::find($request->barcode)) {
            $d = StokMasuk::find($request->barcode);
            $d->deleted = 0;
            $d->save();
            return redirect('stokmasuk');
        }


        $d = new Product();
        $d->nama_produk = $request->nama_produk;
        $d->barcode = $request->barcode;
        $d->save();


        $c = new StokMasuk();
        $c->tanggal_masuk = $request->tanggal_masuk;
        $c->barcode = $request->barcode;
        $c->jumlah_masuk = $request->jumlah_masuk;
        $c->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;

        $c->save();

        

        return redirect('stokmasuk');
    }
    public function hapusStokMasuk(Request $request, $id_masuk){
        $c = StokMasuk::find($id_masuk);
        $c->deleted = 1;
        $c->save();

        return redirect('stokmasuk');
    }









    public function kadaluarsa(){
        $kadaluarsa = DB::table('stok_masuk')
                    ->select('stok_masuk.*', 'produk.*')
                    ->join('produk','produk.barcode', '=', 'stok_masuk.barcode')
                    ->where('stok_masuk.tanggal_kadaluarsa', '>=' , 'CURDATE()')
                    ->get();

        return view( 'kadaluarsaproduk', ['kadaluarsa' => $kadaluarsa ] );
    }

    public function updateKadaluarsa(Request $request, $barcode ){
        $c = Product::find($barcode);
        $c->nama_produk = $request->nama_produk;
        $c->update();

        $kadaluarsa = DB::table('stok_masuk')
                    ->select('stok_masuk.*')
                    ->get();

        foreach ($kadaluarsa as $key ) {
            if ( $barcode == $key->barcode ) {
                $id_masuk = $key->id_masuk;
            } 

        }

        $d = StokMasuk::find($id_masuk);
        $d->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;
        $d->update();

        return redirect('kadaluarsaproduk');
    }








    public function retur(){
        $retur = DB::table('retur')
                    ->select('retur.*', 'produk.*', 'staf_konter.*',  'staf_gudang.*')
                    ->join('produk','produk.barcode', '=', 'retur.barcode')
                    ->join('staf_gudang','staf_gudang.id_gudang', '=', 'retur.id_gudang')
                    ->join('staf_konter','staf_konter.id_konter', '=', 'retur.id_konter')
                    ->get();

        return view( 'retur', ['retur' => $retur ] );
    }



    public function purchaseorder(){
        $purchaseorder = DB::table('purchase_order')
                        ->select('purchase_order.*' , 'detail_po.*' , 'produk.*', 'suplier.*')
                        ->join('detail_po','detail_po.id_po', '=', 'purchase_order.id_po')
                        ->join('produk','produk.barcode', '=', 'detail_po.barcode')
                        ->join('suplier','suplier.id_suplier', '=', 'produk.id_suplier')
                        ->get();

        return view( 'purchaseorder', ['purchaseorder' => $purchaseorder ] );
    }


    public function penerimaanbarang(){
        $penerimaanbarang = DB::table('penerimaan')
                        ->select('penerimaan.*' , 'purchase_order.*' , 'staf_gudang.*', 'user.*')
                        ->join('purchase_order','purchase_order.id_po', '=', 'penerimaan.id_PO')
                        ->join('staf_gudang','staf_gudang.id_gudang', '=', 'penerimaan.id_gudang')
                        ->join('user','user.nik', '=', 'staf_gudang.nik')
                        ->get();

        return view( 'penerimaanbarang', ['penerimaanbarang' => $penerimaanbarang ] );
    }



    public function invoice(){
        $invoice = DB::table('invoice')
                   ->select('invoice.*' , 'suplier.*' , 'purchase_order.id_suplier','purchase_order.id_po', 'penerimaan.id_PO', 'penerimaan.id_terima')
                   ->join('penerimaan','penerimaan.id_terima', '=', 'invoice.id_terima')
                   ->join('purchase_order','purchase_order.id_po', '=', 'penerimaan.id_PO')
                   ->join('suplier','suplier.id_suplier', '=', 'purchase_order.id_suplier')
                   ->get();

        return view( 'invoice', ['invoice' => $invoice ] );
    }


    public function pembayaran(){
        $pembayaran = DB::table('pembayaran')
                   ->select('pembayaran.*' , 'invoice.id_invoice' , 'invoice.id_terima','penerimaan.id_terima', 'penerimaan.id_PO', 'purchase_order.id_po', 'purchase_order.id_suplier', 'suplier.*')
                   ->join('invoice','invoice.id_invoice', '=', 'pembayaran.id_invoice')
                   ->join('penerimaan','penerimaan.id_terima', '=', 'invoice.id_terima')
                   ->join('purchase_order','purchase_order.id_po', '=', 'penerimaan.id_PO')
                   ->join('suplier','suplier.id_suplier', '=', 'purchase_order.id_suplier')
                   ->get();

        return view( 'pembayaran', ['pembayaran' => $pembayaran ] );
    }


    public function daftarproduk(){
        $daftarproduk = Product::join('suplier','suplier.id_suplier', '=', 'produk.id_suplier')->get();
        
        return view( 'daftarproduk', ['daftarproduk' => $daftarproduk ] );
    }


}


