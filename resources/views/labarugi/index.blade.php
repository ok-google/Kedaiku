@extends ('layouts.app')

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

    <div class="sparkline13-list shadow-reset">
        <table class="table table-bordered">
            <thead>
            <tr >
                <th scope="col"  style="text-align: center; width: 60%;">Transaksi</th>
                <th scope="col"  style="text-align: center; width: 20%;">Debet</th>
                <th scope="col"  style="text-align: center; width: 20%;">Kredit</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: center;">Pembelian</td>
                <td rowspan="2" style="text-align: right; padding-top: 2.5%">2000</td>
                <td rowspan="2" style="text-align: right; padding-top: 2.5%;">0</td>
            </tr>
            <tr>
                <td style="text-align: center;"> 08 - 11 -2018 </td>
            </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td scope="col" style="text-align: center; padding-top: 25%;"> Total </td>
                    <td scope="col" style="text-align: right; padding-top: 25%;"> 0 </td>
                    <td scope="col" style="text-align: right; padding-top: 25%;"> 0 </td>
                </tr>
                <tr>
                    <td colspan="3" scope="col" style="text-align: center"> 0 </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection