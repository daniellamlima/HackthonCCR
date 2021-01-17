<!--
#########
# THEME #
#########
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?= $head; ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="base" title="<?= CONF_SITE_NAME ?>" href="<?= url(); ?>"/>
        <link rel="icon" type="image/png" href="<?= image("images/favicon/icon.png", 32, 20); ?>">
        <link rel="stylesheet" type="text/css" href="<?= theme("/assets/css/style.css", CONF_VIEW_APP); ?>">
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <?= $v->insert("views/navbar"); ?>

            <?= $v->insert("views/sidebar"); ?>

            <?= $v->section("content"); ?>

        </div>
        <script src="<?= theme("/assets/js/script.js", CONF_VIEW_APP); ?>"></script>
        <?= $v->section("scripts"); ?>
        <script>
            $(document).ready(function () {
                var ctx = $('#LineChart');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
            });
        </script>
    </body>
</html>
