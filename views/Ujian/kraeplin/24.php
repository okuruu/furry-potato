<script type="text/javascript">
  var ss = 15;

  function countdown() {
    ss = ss-1;

    if (ss<0) {
      document.getElementById('submit').disabled = false;
      
      document.getElementById('submit').click();
    }
    else {
      document.getElementById("countdown").innerHTML=ss;
      window.setTimeout("countdown()", 1700);
    }
  }
  
</script>

<body onload="countdown()">
<div class="main-content">

        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header align-right">
                    <h4 id="countdown"></h4>
                  </div>
                  <div class="card-body">
                  <?php $attributes = ['id'  =>  'formid']; ?>
                  <?php echo form_open("Kraeplin/kraeplin_selesai_24",$attributes); ?>

                  <div class="row">
                      <div class="col-12">
                      
                      <?php $this->load->view('Ujian/kraeplin/soal/24'); ?>

                      </div>
                    </div>

                    <?php echo form_close(); ?>

                  </div>
                </div>
              </div>
            </div>
</div>