<template>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
                <div class="card-body pb-0">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-transparent dropdown-toggle p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                            style="position: absolute; transform: translate3d(31px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="/admin/users">Users</a>
                        </div>
                    </div>
                    <h4 class="mb-0">{{ UsersNumber }}</h4>
                    <p>Total user</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                    <div class="chartjs-size-monitor"
                        style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas id="card-chart1" class="chart chart-line chartjs-render-monitor" height="70"
                        width="216" style="display: block; width: 216px; height: 70px;"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-info">
                <div class="card-body pb-0">
                    <button type="button" class="btn btn-transparent p-0 float-right">
                        <i class="icon-location-pin"></i>
                    </button>
                    <h4 class="mb-0">{{ newTicket }}</h4>
                    <p>New Ticket</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                    <div class="chartjs-size-monitor"
                        style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas id="card-chart2" class="chart chart-line chartjs-render-monitor" height="70"
                        width="216" style="display: block; width: 216px; height: 70px;"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-warning">
                <div class="card-body pb-0">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-transparent dropdown-toggle p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                            style="position: absolute; transform: translate3d(31px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="/admin/subscriptions">Subscription</a>
                        </div>
                    </div>
                    <h4 class="mb-0">{{ total_subscription }}</h4>
                    <p>Total Subscription</p>
                </div>
                <div class="chart-wrapper">
                    <div class="chart-wrapper" style="height:70px;">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                </div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="card-chart3" class="chart chart-line chartjs-render-monitor" height="70"
                            width="248" style="display: block; width: 248px; height: 70px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
                <div class="card-body pb-0">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-transparent dropdown-toggle p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="/admin/logvisit">Visitors log</a>
                        </div>
                    </div>
                    <h4 class="mb-0">{{ unique_visitors }}</h4>
                    <p>Total Unique visitor</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                    <div class="chartjs-size-monitor"
                        style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas id="card-chart4" class="chart chart-bar chartjs-render-monitor" height="70"
                        width="216" style="display: block; width: 216px; height: 70px;"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
</div>
</template>
<script>
    export default {
        mounted () {
            this.getData();
        },
        data() {
            return {
                UsersNumber: 0,
                newTicket: 0,
                unique_visitors: 0,
                total_subscription: 0
            }
        },
        methods: {
            getData() {
                axios.get('/admin/get-statistics').then((data) => {
                    console.log('The data is:')
                    console.log(data);
                    this.UsersNumber = data.data.users;
                    this.newTicket = data.data.newTicket;
                    this.total_subscription = data.data.total_subscription;
                    this.unique_visitors = data.data.unique_visitors;
                })
            }
        },
    }
</script>
<style scoped>

</style>
