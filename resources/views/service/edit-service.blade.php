@extends('../admin/web')
@section('content')
                    <div class="content-row">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Edit Service</b>
                      </div>

                      <div class="panel-options">
                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                      </div>
                    </div>

                    <div class="panel-body">
                      @foreach($service as $value) 
                      <form role="form" method="post" action="{{url('service/'.$value->id.'')}}">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="form-group">
                          <label for="exampleInputdescription1">Title</label>
                          <input required type="text" name="title" value="{{ $value->title }}" class="form-control" id="title_error" >
                        </div>
                        <div class="form-group">
                          <label for="exampleInputdescription1">Description</label>
                          <input required type="text" name="description" value="{{ $value->description }}" class="form-control" id="description_error">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputdescription1" id="type_error">Type</label><br>
                          <input type="checkbox" name="type[]" value="Facebook">Facebook
                          <input type="checkbox" name="type[]" value="Youtube">Youtube
                          <input type="checkbox" name="type[]" value="Twitter">Twitter
                          <input type="checkbox" name="type[]" value="Instagram">Instagram
                        </div>
                        <div class="form-group">
                          <label for="exampleInputdescription1">Link</label><br>
                          <textarea id="link_error" required cols="160" rows="4" name="link" >{{$value->link}}</textarea><br><br><br>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputdescription1">Client title : </label>
                          <select name="userId">
                            @foreach($clients as $client)
                            <option value="{{$client->id}}">
                            {{$client->title}}                            
                          </option>
                          @endforeach
                        </select>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                      @endforeach

                    </div>
                  </div>

                </div>
              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
    <!--footer-->
<script type="text/javascript">
  // SELECTING ALL TEXT ELEMENTS
var title = document.forms['vform']['title'];
var description = document.forms['vform']['description'];
var link = document.forms['vform']['link'];
var type = document.forms['vform']['type'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var description_error = document.getElementById('description_error');
var title_error = document.getElementById('title_error');
var link_error = document.getElementById('link_error');
var type_error = document.getElementById('type_error');

// SETTING ALL EVENT LISTENERS
title.addEventListener('blur', titleVerify, true);
description.addEventListener('blur', descriptionVerify, true);
link.addEventListener('blur', linkVerify, true);
// validation function
function Validate() {
  // validate title
  if (title.value == "") {
    title.style.border = "1px solid red";
    document.getElementById('title_div').style.color = "red";
    name_error.textContent = "title is required";
    title.focus();
    return false;
  }
  // validate title
  if (title.value.length < 3) {
    title.style.border = "1px solid red";
    document.getElementById('title_div').style.color = "red";
    title_error.textContent = "title must be at least 3 characters";
    title.focus();
    return false;
  }
  // validate description
  if (description.value == "") {
    description.style.border = "1px solid red";
    document.getElementById('description_div').style.color = "red";
    description_error.textContent = "description is required";
    description.focus();
    return false;
  }
  // validate link
  if (link.value == "") {
    link.style.border = "1px solid red";
    document.getElementById('link_div').style.color = "red";
    link_confirm.style.border = "1px solid red";
    link_error.textContent = "link is required";
    link.focus();
    return false;
  }
  // check if the two links match
  if (link.value != link_confirm.value) {
    link.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    link_confirm.style.border = "1px solid red";
    link_error.innerHTML = "The two links do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (title.value != "") {
   title.style.border = "1px solid #5e6e66";
   document.getElementById('title_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function descriptionVerify() {
  if (description.value != "") {
    description.style.border = "1px solid #5e6e66";
    document.getElementById('description_div').style.color = "#5e6e66";
    description_error.innerHTML = "";
    return true;
  }
}
function linkVerify() {
  if (link.value != "") {
    link.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('link_div').style.color = "#5e6e66";
    link_error.innerHTML = "";
    return true;
  }
  if (link.value === link_confirm.value) {
    link.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    link_error.innerHTML = "";
    return true;
  }
}
</script>
      @endsection