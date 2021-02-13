@extends("prometheus::admin.layouts.dashboard")
@section("content")
    <div class="card" wfd-id="42">
        <div class="card-header border-0" wfd-id="54">
            <div class="d-flex justify-content-between" wfd-id="55">
                <h3 class="card-title">Online Store Visitors</h3>
                <a href="">View Report</a>
            </div>
        </div>
        <div class="card-body" wfd-id="43">
            <div class="d-flex" wfd-id="49">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg" wfd-id="53">820</span>
                    <span wfd-id="52">Visitors Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success" wfd-id="51">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted" wfd-id="50">Since last week</span>
                </p>
            </div>

            <!-- /.d-flex -->

            <div class="position-relative mb-4" wfd-id="47"><div class="chartjs-size-monitor" wfd-id="48"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="visitors-chart" height="400" width="808" class="chartjs-render-monitor" style="display: block; height: 200px; width: 404px;"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end" wfd-id="44">
                  <span class="mr-2" wfd-id="46">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                <span wfd-id="45">
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
            </div>
        </div>
    </div>
@endsection