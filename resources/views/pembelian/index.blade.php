@extends('layouts.app')

@section('content')
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div class="col-md-6">
                Soto
            </div>
            <div class="col-md-6">
                tes
            </div>
        </div>
    </div>
    <div id="content">
        <div class="breadcome-list shadow-reset">
            <div class="row">
                <div style="margin-left: 2%; font-size: 18px; font-weight: black; font-style: bold;">
                    Soto
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">
                    12000
                </div>
            </div>
        </div>
        <div class="breadcome-list shadow-reset">
            <div class="row">
                <div style="margin-left: 2%; font-size: 18px; font-weight: black; font-style: bold;">
                    Pecel
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">
                    10000
                </div>
            </div>
        </div>
    </div>

    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="modal" data-target="#input-modal" class="chat-icon-link collapsed" style="background: blue;">
                    <i class="fa fa-plus" style="margin-top: 30%"></i>
                </span>
            </div>
        </div>
    </div>

    <div id="input-modal" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" >
                        <i class="fa fa-close" style="margin-top: 25%;"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group-inner" align="left">
                            <label>Nama Produk</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Produk">
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Harga</label>
                            <input type="number" id="harga" class="form-control" placeholder="Harga Produk">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnSave" onclick="addProduk()">Simpan</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addProduk(){
            var nama = $('#nama').val();
            var harga = $('#harga').val();

            $('#content').append('<div class="breadcome-list shadow-reset"><div class="row"><div style="margin-left: 2%; font-size: 18px; font-weight: black; font-style: bold;">'+nama+'</div><div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">'+harga+'</div></div></div>');

            $('#input-modal').modal('hide');
        }
    </script>
@endsection