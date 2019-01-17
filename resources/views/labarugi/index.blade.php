@extends ('layouts.app')

@section('content')
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                <div class="input-daterange input-group  col-md-12" id="datepicker">
                    <input type="text" class="form-control  col-md-6" id="start" data-date-format="dd-mm-yyyy">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control  col-md-6" id="end" data-date-format="dd-mm-yyyy">
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sparkline13-list shadow-reset">
        <table class="table table-bordered">
            <thead>
            <tr >
                <th scope="col"  style="text-align: center; width: 60%;">Transaksi</th>
                <th scope="col"  style="text-align: center; width: 20%;">Debet</th>
                <th scope="col"  style="text-align: center; width: 20%;">Kredit</th>
            </tr>
            </thead>
            <tbody id="listLabaRugi">
            
            </tbody>

            <tfoot id="totalLabaRugi">
                
            </tfoot>
        </table>
    </div>

    <script type="text/javascript">
        function numberSeparator(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function getData(){
            $.ajax({
                url: "{{ url('/laporan/getAll') }}",
                method: 'get',
                data: {
                    start: $('#start').val(),
                    end: $('#end').val(),
                },
                success: function(result){
                    $('#listLabaRugi').empty();

                    $.each(result, function(index) {
                        var tgl = new Date(result[index].tanggal);
                        var html;
                        html = '<tr>' +
                                    '<td style="text-align: center;">' + result[index].transaksi + '</td>' +
                                    '<td rowspan="2" style="text-align: right; padding-top: 2.5%;" class="debet" data-nilai="'+ result[index].debet +'"">' + 
                                        numberSeparator(result[index].debet) + 
                                    '</td>' +
                                    '<td rowspan="2" style="text-align: right; padding-top: 2.5%;" class="kredit" data-nilai="'+ result[index].kredit +'"">' + 
                                        numberSeparator(result[index].kredit) +
                                    '</td>' +
                                '</tr>' +
                                '<tr>' +
                                    '<td style="text-align: center;"> ' + 
                                        tgl.getDate() + '-' + (tgl.getMonth() + 1) + '-' +  tgl.getFullYear() + 
                                    '</td>' +
                                '</tr>';

                        $('#listLabaRugi').append(html);
                    });

                    var debet = 0;
                    $('.debet').each(function(){
                        debet = parseInt(debet) + parseInt($(this).attr('data-nilai'));
                    });

                    var kredit = 0;
                    $('.kredit').each(function(){
                        kredit = parseInt(kredit) + parseInt($(this).attr('data-nilai'));
                    });

                    html = '<tr>' +
                                '<td scope="col" style="text-align: center; padding-top: 25%;"> Total </td>' +
                                '<td scope="col" style="text-align: right; padding-top: 25%;"> '+ numberSeparator(debet) +' </td>' +
                                '<td scope="col" style="text-align: right; padding-top: 25%;"> '+ numberSeparator(kredit) +' </td>' +
                            '</tr>' +
                            '<tr>' +
                                '<td colspan="3" scope="col" style="text-align: center"> '+ numberSeparator(kredit - debet) +' </td>' +
                            '</tr>';

                    $('#totalLabaRugi').empty();
                    $('#totalLabaRugi').append(html);
                }
            });   
        }

        $( document ).ready(function(){
            $('#tgl').datepicker('setDate', 'today');
            $('#start').datepicker('setDate', 'today');
            $('#end').datepicker('setDate', 'today');

            getData();

            $('#start').change(function(){
                getData();
            });

            $('#end').change(function(){
                getData();
            });
        });
    </script>
@endsection