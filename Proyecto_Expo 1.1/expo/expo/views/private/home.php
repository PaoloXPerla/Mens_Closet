<?php
include "../../core/helpers/menu.php";
Menu::SideBar('Inicio');
?>

<div class="row">
    <div class="col-6">
        <canvas id="myChart"></canvas>
        <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Hombre", "Mujer", "Accesorios", ],
                datasets: [{
                    label: '# Ventas por Categoria',
                    data: [35, 59, 22],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                legend: {
                    labels: {
                        fontColor: "black",
                        fontSize: 15
                    }

                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }]
                }
            }
        });
        </script>
    </div>
    <div class="col-6">
        <canvas id="myChart2"></canvas>
        <script>
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Gaseosas", "Energeticas", "Calientes", ],
                datasets: [{
                    label: '# Prodcutos mas vendidos',
                    data: [35, 59, 22],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                legend: {
                    labels: {
                        fontColor: "black",
                        fontSize: 15
                    }

                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }]
                }
            }
        });
        </script>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <canvas id="myChart3"></canvas>
        <script>
        var ctx = document.getElementById("myChart3").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Gaseosas", "Energeticas", "Calientes", ],
                datasets: [{
                    label: '# Ventas por mes',
                    data: [35, 59, 22],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                legend: {
                    labels: {
                        fontColor: "black",
                        fontSize: 15
                    }

                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }]
                }
            }
        });
        </script>
    </div>
    <div class="col-6">
        <canvas id="myChart4"></canvas>
        <script>
        var ctx = document.getElementById("myChart4").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Gaseosas", "Energeticas", "Calientes", ],
                datasets: [{
                    label: '# Productos menos vendidos',
                    data: [35, 59, 22],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                legend: {
                    labels: {
                        fontColor: "black",
                        fontSize: 15
                    }

                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: 'black'
                        },
                    }]
                }
            }
        });
        </script>
    </div>
</div>

</header>
<?php
include "../../core/helpers/footer.php";
Pie::Footer();
?>