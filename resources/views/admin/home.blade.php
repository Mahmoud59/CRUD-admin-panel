@extends('web')

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="content-row">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Clients</b>
                      </div></div>
                        <div class="panel-body">
                          @foreach($clients as $client) 
                      <form role="form" method="post" action="{{url('client/'.$client->id.'')}}">
                        <div class="form-group">
                          
                          {{ csrf_field() }}
                        {{method_field('delete')}}
                            <div class="col-sm-6 col-md-3">
                      <div class="thumbnail">
                        <div class="caption text-center">
                        <h3><div><span>Title : </span>{{ $client->title }}</div>
                        <div><span>Description   :    </span>{{ $client->description }}</div>
                        <div><span>Status : </span>{{ $client->status }}</div>
                        <div><span>Phone : </span>{{ $client->phone }}</div>
                        <div><span>Start Date : </span>{{ $client->startDate }}</div>
                        <div><span>End Date : </span>{{ $client->endDate }}</div></h3>


                        <p><a href="{{url('client/'.$client->id.'/edit')}}" style="background-color: #3BAFDA;" class="btn btn-warning" role="button">Edit</a>  

                          <a href="{{url('service/'.$client->id.'')}}" class="btn btn-default" role="button" >View Services</a>
                          
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
      <!-- <script>
      function del1(clientId) 
      {
        if(confirm('are you sure'))
          window.location.href="";
      }
    </script> -->
      @endsection
