<div>
    {{-- Be like water. --}}
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="#">
        <fieldset>
          <h3>Contact Form</h3>
          <div class="form-group required">
            <label for="input-name" class="col-sm-2 control-label">Your Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-name" value="" name="name">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">E-Mail Address</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="input-email" value="" name="email">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-enquiry" class="col-sm-2 control-label">Enquiry</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="input-enquiry" rows="5" name="enquiry"></textarea>
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Submit" class="btn btn-primary">
          </div>
        </div>
      </form>
</div>
