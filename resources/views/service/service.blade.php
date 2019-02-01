@extends('../admin/web')

@section('content')

<div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="content-row">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Services</b>
                      </div></div>
                        <div class="panel-body">
                          @foreach($services as $service) 
                      <form role="form" method="post" action="{{url('service/'.$service->id.'')}}">
                        <div class="form-group">
                          
                          {{ csrf_field() }}
                        {{method_field('delete')}}
                            <div class="col-sm-6 col-md-3">
                      <div class="thumbnail">
                        <div class="caption text-center">
                        <h3><div><span>Title : </span>{{ $service->title }}</div>
                        <div><span>Description   :    </span>{{ $service->description }}</div>
                        <div><span>Type : </span>{{ $service->type }}</div>
                        <div><span>Client title : </span>{{ $service->client['title'] }}</div>
                        <div><span>Link : </span>{{ $service->link }}</div>

                        <p><a href="{{url('service/'.$service->id.'/edit')}}" style="background-color: #3BAFDA;" class="btn btn-warning" role="button">Edit</a>  
                          
                          <!-- <a href="javascript:void()" style="background-color: red" class="btn btn-warning" role="button">Delete</a> -->
                          <input type="submit" name="delete" value="Delete" style="background-color: red" class="btn btn-warning" role="button">
                          </p>

                        

                        </div>
                      </div>
                    </div>
                    @endforeach
                        </form>  
                    </div>
                  </div>
                </div>
              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>

@endsection