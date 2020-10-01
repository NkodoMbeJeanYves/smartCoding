<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title lead">Add Breaking News</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <form class="bs-component" method="post" action="{{ url('top-headlines')}}" id="modalForm">
        @csrf()
        <div class="modal-body">
                <div class="form-group">
                  <fieldset>
                    <label class="control-label" for="disabledInput">Source identifier</label>
                    <input class="form-control" id="source_id" name="id" type="text" placeholder="identifier here">
                  </fieldset>
                </div>
      
                <div class="form-group">
                  <fieldset>
                    <label class="control-label" for="readOnlyInput">Source Name</label>
                    <input class="form-control" id="sourcename" name="name" type="text" placeholder="source name">
                    <input class="form-control" id="source_name" name="source" type="hidden" placeholder="source name" value="0">
                  </fieldset>
                </div>
      
                <div class="form-group">
                  <label class="form-control-label" for="inputSuccess1">Author</label>
                  <input type="text" value="" class="form-control" id="author" name="author">
                  
                </div>
      
                <div class="form-group">
                  <label class="form-control-label" for="inputDanger1">Title</label>
                  <input type="text" value="" class="form-control" id="title" name="title">
                  
                </div>
      
                <div class="form-group">
                  <label class="col-form-label col-form-label-lg" for="inputLarge">Description</label><hr>
                    <textarea cols="50" rows="5" id="description" name="description"></textarea>
                </div>
      
                <div class="form-group">
                  <label class="col-form-label" for="inputDefault">Unified resource Locator (URL)</label>
                  <input type="text" class="form-control" placeholder="URL" id="url" name="url">
                </div>
      
                <div class="form-group">
                  <label class="col-form-label col-form-label-sm" for="inputSmall">url To Image</label>
                  <input class="form-control" type="text" placeholder="url to image" id="urltoimage" name="urltoimage">
                </div>

                <div class="form-group">
                  <label class="col-form-label col-form-label-sm" for="inputSmall">published At</label>
                  <input class="form-control" type="datetime-local" placeholder=".form-control-sm" id="publishedat" name="publishedat">
                </div>

                <div class="form-group">
                  <label class="col-form-label col-form-label-sm" for="inputSmall">content</label><hr>
                  <textarea cols="50" rows="5" id="content" name="content"></textarea>
                </div>
      
               
        </div>
  
            <!-- Modal footer -->
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->
            <div class="modal-footer">
                <button type="submit" id="breaking-news" class="btn btn-secondary" >Save Breaking News</button>
            </div>
        </form>
  
      </div>
    </div>
  </div>

  <script>
  /*  */

  </script>