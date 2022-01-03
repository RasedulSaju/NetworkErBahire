</div>
</main>
<!-- Main layout -->
<!-- Footer -->
<footer class="page-footer pt-0 mt-5 rgba-stylish-light">
  <!-- Copyright -->
  <div class="footer-copyright py-3 text-center">
    <div class="container-fluid">
      &copy; <?php echo Date('Y') ?> <a href="../../NetworkErBahire/"> Network Er Bahire </a>
    </div>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- SCRIPTS -->

<!-- JQuery -->
<script src="../js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- DataTables  -->
<script type="text/javascript" src="../js/addons/datatables.min.js"></script>
<!-- DataTables Select  -->
<script type="text/javascript" src="../js/addons/datatables-select.min.js"></script>
<script>
  /*Global settings*/
  Chart.defaults.global.defaultFontColor = '#fff';

  $(function() {
    let data = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(0,0,0,.15)",
        data: [65, 59, 80, 81, 56, 55, 40],
        backgroundColor: "#4CAF50"
      }, {
        label: "My Second dataset",
        fillColor: "rgba(255,255,255,.25)",
        strokeColor: "rgba(255,255,255,.75)",
        pointColor: "#fff",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(0,0,0,.15)",
        data: [28, 48, 40, 19, 86, 27, 90]
      }]
    };

    let dataPie = [{
      value: 300,
      color: "#F7464A",
      highlight: "#FF5A5E",
      label: "Red"
    }, {
      value: 50,
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "Green"
    }, {
      value: 100,
      color: "#FDB45C",
      highlight: "#FFC870",
      label: "Yellow"
    }]

    let option = {
      responsive: true,
      // set font color
      scaleFontColor: "#fff",
      // font family
      defaultFontFamily: "'Roboto', sans-serif",
      // background grid lines color
      scaleGridLineColor: "rgba(255,255,255,.1)",
      // hide vertical lines
      scaleShowVerticalLines: false,
    };

    //radar
    let ctxR = document.getElementById("conversion").getContext('2d');
    let myRadarChart = new Chart(ctxR, {
      type: 'radar',
      data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling"],
        datasets: [{
            label: "My First dataset",
            data: [65, 59, 90, 81, 56, 55],
          },
          {
            label: "My Second dataset",
            data: [28, 48, 40, 19, 96, 27],

          }
        ]
      },
      options: {
        responsive: true,
        legend: {
          display: false
        },

        scale: {
          ticks: {
            display: false
          },
        }
      }
    });

    //bar
    let ctx = document.getElementById("traffic").getContext('2d');
    let myBarChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["January", "Febuary", "March", "April", "May", "June"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 255, 255, 0.3)',
            'rgba(255, 255, 255, 0.3)',
            'rgba(255, 255, 255, 0.3)',
            'rgba(255, 255, 255, 0.3)',
            'rgba(255, 255, 255, 0.3)',
            'rgba(255, 255, 255, 0.3)'
          ],
          borderColor: [
            'rgba(255, 255, 255, 1)',
            'rgba(255, 255, 255, 1)',
            'rgba(255, 255, 255, 1)',
            'rgba(255, 255, 255, 1)',
            'rgba(255, 255, 255, 1)',
            'rgba(255, 255, 255, 1)'
          ],
          borderWidth: 1,
          color: 'rgba(255, 255, 255, 1)'
        }]
      },
      optionss: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //pie
    let ctxP = document.getElementById("seo").getContext('2d');
    let myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["March", "April", "May", "June"],
        datasets: [{
          data: [160, 50, 100, 40],
          backgroundColor: ["#4285F4", "#ffbb33", "#45cafc", "#FF5252"],
          hoverBackgroundColor: ["#6ea0f2", "#fec451", "#78daff", "#fa6e6e"]
        }]
      },
      options: {
        responsive: true
      }
    });

    $('#dark-mode').on('click', function(e) {

      e.preventDefault();

      $('h4, button').not('.check').toggleClass('dark-grey-text text-white');
      $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');
      $('.list-panel a').toggleClass('dark-grey-text');
      $('footer, .card').toggleClass('dark-card-admin');
      $('body, .navbar').toggleClass('white-skin navy-blue-skin');
      $(this).toggleClass('white text-dark btn-outline-black');
      $('body').toggleClass('dark-bg-admin');
      $('h6, .card, td, th, i, li a, input, label').not(
        '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
      $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
      $('.gradient-card-header').toggleClass('white black lighten-4');


      for (let i = 0; i <= 5; i++) {
        myRadarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
        myRadarChart.data.datasets[1].data[i] = (Math.random(i) * 100);
      }

      for (let i = 0; i <= 6; i++) {
        myBarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
      }

      for (let i = 0; i <= 4; i++) {
        myPieChart.data.datasets[0].data[i] = (Math.random(i) * 100);
      }

      myPieChart.update();
      myBarChart.update();
      myRadarChart.update();
    });


  });
</script>
<script>
  $(function() {
    $('.min-chart#chart-sales').easyPieChart({
      barColor: "#4caf50",
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });

  // Data Picker Initialization
  $('.datepicker').pickadate();


  // Material Select Initialization
  $(document).ready(function() {
    $('.mdb-select').material_select();
  });

  // Sidenav Initialization
  $(".button-collapse").sideNav();

  // Tooltips Initialization
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<!-- JVectorMap -->
<link rel="stylesheet" href="../js/vendor/jvectormap/jquery-jvectormap-2.0.3.css" type="text/css" media="screen" />
<script src="../js/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="../js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script>
  $(function() {

    colors = {};

    colors['ca'] = '#A4D886';
    colors['ru'] = '#FCECA2';
    colors['cn'] = '#F9573B';
    colors['us'] = '#87CEEB';
    colors['jp'] = '#34BD0E';
    colors['au'] = '#BCC7FC';
    colors['kz'] = '#D4624E';
    colors['de'] = '#34BD0E';

    $('#world-map').vectorMap({
      colors: colors,
      hoverOpacity: 0.7, // opacity for :hover
      hoverColor: false
    });

  });
</script>
<!-- /.JVectorMap -->

<!-- datatable -->
<script>
    let container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $('#dtMaterialDesignExample').DataTable();

    $('#dt-material-checkbox').dataTable({

      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select: {
        style: 'os',
        selector: 'td:first-child'
      }
    });

    $('#dtMaterialDesignExample_wrapper, #dt-material-checkbox_wrapper').find('label').each(function () {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').find(
      'input').each(function () {
      $('input').attr("placeholder", "");
      $('input').removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length, #dt-material-checkbox_wrapper .dataTables_length').addClass(
      'd-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').addClass(
      'md-form');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').removeClass(
      'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select, #dt-material-checkbox_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filte, #dt-material-checkbox_wrapper .dataTables_filterr').find(
      'label').remove();

  </script>
<!-- /. datatable -->
</body>

</html>