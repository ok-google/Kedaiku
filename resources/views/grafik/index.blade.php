@extends ('layouts.app')

@section('content')

    <div class="col-lg-12" style="margin-top: 3%;">
        <div class="charts-single-pro shadow-reset nt-mg-b-30">
            <div class="alert-title">
                <h2>Basic Line Chart</h2>
                <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
            </div>
            <div id="basic-chart" style="display: none;">
                <canvas id="basiclinechart"></canvas>
            </div>
            <div id="axis-chart">
                <canvas id="linechartmultiaxis"></canvas>
            </div>
        </div>
    </div>
@endsection