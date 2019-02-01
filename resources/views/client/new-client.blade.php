@extends('../admin/web')

@section('content')
                    <div class="content-row">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Add Client</b>
                      </div>

                      <div class="panel-options">
                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                      </div>
                    </div>

                    <div class="panel-body">
                      <form role="form" method="post" action="{{url('client')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input required type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <input required type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="description">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Status</label>
                          <input required type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Status">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contact Phone</label>
                          <input required type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Start Date</label>
                          <input required type="date" name="start" placeholder="Start Date">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">End Date</label>
                          <input required type="date" name="end" placeholder="End Date">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                    </div>
                  </div>

                </div>
              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
    <!--footer-->

      @endsection