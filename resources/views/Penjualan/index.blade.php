@extends('layouts.app')

@section('content')
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                <div class="input-daterange input-group  col-md-12" id="datepicker">
                    <input type="text" class="form-control  col-md-6" name="start" value="2018-11-01">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control  col-md-6" name="end" value="2018-11-06">
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="breadcome-list shadow-reset">
            <div class="row">
                <div style="margin-left: 90%; font-size: 16px; font-weight: black; font-style: bold;">
                    2018-11-06
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">
                    Soto
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">
                    10 x 120000 = 120000
                </div>
            </div>
        </div>
        <div class="breadcome-list shadow-reset">
            <div class="row">
                <div style="margin-left: 90%; font-size: 16px; font-weight: black; font-style: bold;">
                    2018-11-06
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">
                    Pecel
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">
                    10 x 10 = 100000
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
                        <div class="form-group-inner data-custon-pick" id="data_1" align="left">
                            <label>Tanggal</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" value="10/04/2018" >
                            </div>
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Produk</label>
                            <div class="form-select-list">
                                <select class="form-control custom-select-value" name="Produk">
                                    <option>Produk 1</option>
                                    <option>Produk 2</option>
                                    <option>Produk 3</option>
                                    <option>Produk 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Harga</label>
                            <input type="number" id="harga" class="form-control" placeholder="Harga Produk">
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Qty</label>
                            <input type="number" id="qty" class="form-control" placeholder="Qty Produk">
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