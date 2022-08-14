<div class="mfp">

	<img src="asset/upload_img/mfp_slide.jpg" class="img-fluid" />

	<div class="container">
		<div class="row">
			<div class="col py-5">
				<?php $blockData = $this->main_model->get_limit_data('content_tbl','Id',$before_content_relatedId)->row_array();?>

					<h4><?=$blockData['title']?></h4>

					<?=$blockData['text']?>

					<?php if($this->session->userdata('loginState') == true):?>
						<div class="edit">
							<a href="ignite/editViewContent/<?=$blockData['Id']?>" title="Edit Block Content"><i class="fa fa-cog"></i></a>
						</div>
					<?php endif;?>
			</div>
		</div>
	
</div>

<!-- Modal1 -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fire Alarm & Fire Detection System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/fire_alam1.jpg" class="img-fluid" />
        	<img src="asset/upload_img/fire_alam2.jpg" class="img-fluid" />
        	<img src="asset/upload_img/fire_alam3.jpg" class="img-fluid" />
        	<img src="asset/upload_img/fire_alam4.jpg" class="img-fluid" />
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fire Hose Reel System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/hose_reel.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- Modal3 -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fire Hydrant System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/hydrant_system.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- Modal4 -->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Wet/Dry Riser System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/wet_dry.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- Modal5 -->
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Automatic Fire Sprinkler System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/sprinkler.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- Modal6 -->
<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Automatic Water Cannon System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/water_canon.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR1 -->
<div class="modal fade" id="modalR1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FM200 Gas Suppression System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/fm_200.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR2 -->
<div class="modal fade" id="modalR2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Compact Fire Suppression System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/compact_suppression.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR3 -->
<div class="modal fade" id="modalR3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CO2 Gas Suppression System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/co2.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR4 -->
<div class="modal fade" id="modalR4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foam-Water System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/foam_water.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR5 -->
<div class="modal fade" id="modalR5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Water/Foam Monitor System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/foam_moniter.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR6 -->
<div class="modal fade" id="modalR6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Water Spray System
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/spray.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- ModalR7 -->
<div class="modal fade" id="modalR7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Maintenance & Service
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<img src="asset/upload_img/maintenance1.jpg" class="img-fluid" />
        	<img src="asset/upload_img/maintenance2.jpg" class="img-fluid" />
      </div>
    </div>
  </div>
</div>