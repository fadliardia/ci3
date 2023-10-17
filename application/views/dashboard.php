
<div class="row">
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $total_legalisir; ?></h3>

                <p>Permintaan Legalisir</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="<?= base_url('legalisir')?>" class="small-box-footer">Detai Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_riwayat; ?></h3>

                <p>Riwayat Legalisir</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-chart-pie"></i>
              </div>
              <a href="<?= base_url('riwayat')?>" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $total_alumni; ?></h3>

                <p>Alumni</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-users"></i>
              </div>
              <a href="<?= base_url('alumni')?>" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>
