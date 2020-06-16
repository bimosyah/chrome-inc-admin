  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.js") ?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js") ?>"></script>
<!-- Pusher -->
<script src="https://js.pusher.com/6.0/pusher.min.js"></script>

<script>
  $(function () {
    $('#datatable').DataTable();
  });

  var jumlah_notif_transaksi = 0;
  var jumlah_notif_pesan = 0;
  var jumlah_notif_reqbarang = 0;
  var jumlah_notif = 0;

  var config = {
    type: 'line',
    data: {
      labels: <?php echo (!isset($chart_label) ? "[]" : json_encode($chart_label)) ?>,
      datasets: [{
        label: 'Omset',
        backgroundColor: 'rgb(255, 102, 102)',
        borderColor: 'rgb(255, 102, 102)',
        data: <?php echo (!isset($chart_data) ? "[]" : json_encode($chart_data)) ?>,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title: {
        display: true,
        text: 'Omset Per Hari'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
      hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Tanggal'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Value'
          }
        }]
      }
    }
  };

  window.onload = function() {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myLine = new Chart(ctx, config);
  };


    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('fbe5e22f9f78edda72c3', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      if(data.from === 'transaksi'){
        jumlah_notif_transaksi += 1;
      }else if (data.from === 'inventory'){
        jumlah_notif_reqbarang += 1;
      }else {
        jumlah_notif_pesan += 1;
      }

      jumlah_notif = jumlah_notif_transaksi + jumlah_notif_reqbarang + jumlah_notif_pesan;
      document.getElementById("jumlah_notifikasi").innerHTML = jumlah_notif;
      document.getElementById("jumlah_notifikasi_transaksi").innerHTML = "<i class='fas fa-file mr-2'></i>" + jumlah_notif_transaksi + " transaksi baru";
      document.getElementById("jumlah_notifikasi_request").innerHTML = "<i class='fas fa-file mr-2'></i>" + jumlah_notif_reqbarang + " request barang baru";
      document.getElementById("jumlah_notifikasi_pesan").innerHTML = "<i class='fas fa-envelope mr-2'></i>" + jumlah_notif_pesan + " pesan baru";

    });


    function notif(){
      jumlah_notif_transaksi = 0;
      jumlah_notif_reqbarang = 0;
      jumlah_notif = 0;
    }

    function hitung_total() {
      var elements = document.getElementById("form_barang").elements;
      var obj ={};
      var total_barang = 0;
      for(var i = 0 ; i < elements.length ; i++){
        var item = elements.item(i);
        obj[item.name] = item.value;
        if (item.type == "number") {
          total_barang = total_barang + Number(item.value);

        }
      }
      document.getElementById("text_total_harga").innerHTML = "Rp. " + total_barang;
      document.getElementById("total_harga").value = total_barang;
      $('html, body').animate({scrollTop: '0px'}, 0);
    }

  </script>
</body>
</html>
