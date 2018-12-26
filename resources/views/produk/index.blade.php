@extends('layouts.app')

@section('content')
    <div id="listProduk">
        <div class="breadcome-list shadow-reset" onclick="showmodal(0)">
            <div class="row">
                <div style="margin-left: 2%; font-size: 18px; font-weight: black; font-style: bold;" class="namaprod0">
                    Soto
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;" class="hrgprod0">
                    12000
                </div>
            </div>
        </div>
        <div class="breadcome-list shadow-reset" onclick="showmodal(1)">
            <div class="row">
                <div style="margin-left: 2%; font-size: 18px; font-weight: black; font-style: bold;" class="namaprod1">
                    Pecel
                </div>
                <div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;" class="hrgprod1">
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
                        @csrf
                        <div class="form-group-inner" align="left">
                            <label>Nama Produk</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Produk">
                            <em for="nama" class="invalid" id="namaValidate" style="display: none; color: red;">Masukan Nama Product</em>
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Harga</label>
                            <input type="number" id="harga" class="form-control" placeholder="Harga Produk">
                            <em for="harga" class="invalid" id="hargaValidate" style="display: none;color: red;">Masukan Harga Product</em>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnSave" >Simpan</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function insert(e){
            e.preventDefault();
                
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('/master/produk/store') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    Nama: $('#nama').val(),
                    Harga: $('#harga').val()
                },
                success: function(result){
                    $('#nama').val('');
                    $('#harga').val(0);
                    $('#input-modal').modal('hide');
                }
            });
        }

        function update(e){
            e.preventDefault();
                
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('/master/produk/update') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    id: $('#id').val(),
                    Nama: $('#nama').val(),
                    Harga: $('#harga').val()
                },
                success: function(result){
                    $('#nama').val('');
                    $('#harga').val(0);
                    $('#input-modal').modal('hide');
                }
            });
        }

        function getData(){
            $.ajax({
                url: "{{ url('/master/produk/getAll') }}",
                method: 'get',
                data: {
                    
                },
                success: function(result){
                    $('#listProduk').empty();

                    $.each(result, function(index) {
                        var html =  '<div class="breadcome-list shadow-reset" onclick="showmodal(0)" data-id="'+ result[index]          .id +'">' +
                                    '<div class="row nama">' +
                                        '<div style="margin-left: 2%; font-size: 18px; font-weight: black; font-style: bold;" class="namaprod0">' +
                                            result[index].nama +' </div> ' +
                                        '</div>' +
                                        '<div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;" class="hrgprod0">' +
                                            result[index].harga +
                                        '</div>' +
                                    '</div>' +
                                '</div>';

                        $('#listProduk').append(html);
                    });
                }
            });   
        }

        function hapus(e){
            e.preventDefault();
                
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('/master/produk/delete') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    id: $('#id').val()
                },
                success: function(result){
                    getData();
                }
            });
        }

        $( document ).ready(function(){
            getData();

            $('#btnSave').click(function(e){
                if($('#type').val() == "update"){
                    update(e);
                }else{
                    insert(e);    
                }
                
                getData();
            });

            // $( "#listBahan" ).delegate( ".bahan", "mousedown", function(e) {
            //         $('#id').val($(this).attr('data-id'));
            //         $('#notif-modal').modal('show'); 
            // });

            $("#btnHapus").click(function(){
                hapus();
                $('#notif-modal').modal('hide'); 
            });

            $( "#listProduk" ).delegate( ".produk", "click", function() {
                $('#id').val($(this).attr('data-id'));
                $('#nama').val($(this).find('.nama div').text());
                $('#harga').val($(this).find('.harga div').text());
                $('#type').val('update');
                $('#input-modal').modal('show');
            });
        });
    </script>

@endsection