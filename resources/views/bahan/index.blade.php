@extends('layouts.app')

@section('content')
    
    <div id = "listBahan">

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
                        <input type="hidden" id="id">
                        <input type="hidden" id="type">

                        <div class="form-group-inner" align="left">
                            <label>Nama Bahan</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Bahan">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnSave">Simpan</a>
                </div>
            </div>
        </div>
    </div>

    <div id="notif-modal" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" >
                        <i class="fa fa-close" style="margin-top: 25%;"></i>
                    </a>
                </div>

                <div class="modal-body">
                    Apakah anda yakin ingin mengapus data ini ?
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnHapus"> Ya </a>
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
                url: "{{ url('/master/bahan/store') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    Nama: $('#nama').val(),
                },
                success: function(result){
                    $('#nama').val('');
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
                url: "{{ url('/master/bahan/update') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    id: $('#id').val(),
                    Nama: $('#nama').val(),
                },
                success: function(result){
                    $('#nama').val('');
                    $('#input-modal').modal('hide');
                }
            });
        }

        function getData(){
            $.ajax({
                url: "{{ url('/master/bahan/getAll') }}",
                method: 'get',
                data: {
                    
                },
                success: function(result){
                    $('#listBahan').empty();

                    $.each(result, function(index) {
                        var html = '<div class="breadcome-list shadow-reset bahan" data-id="'+ result[index].id +'">' +
                                    '<div class="row nama">' +
                                        '<div style="margin-left: 3%; font-size: 18px;"> '+ 
                                        result[index].nama +' </div> ' +
                                    '</div>' +
                                '</div>';

                        $('#listBahan').append(html);
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
                url: "{{ url('/master/bahan/delete') }}",
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

            $( "#listBahan" ).delegate( ".bahan", "click", function() {
                $('#id').val($(this).attr('data-id'));
                $('#nama').val($(this).find('.nama div').text());
                $('#type').val('update');
                $('#input-modal').modal('show');
            });
        });
    </script>

@endsection
