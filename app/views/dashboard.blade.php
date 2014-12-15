@extends('layout.dashboard-layout')

@section('content')
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Instruction List</h1>
      <a href="selection">  <button type="button" class="btn btn-danger" style="float:right">CREATE NEW</button> </a>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <div class="row">
    <p></p>
  </div>
<!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
      <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                <th>File Name</th>
                <th>Last Edited Date</th>
                <th>Notes</th>
                <th>Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($array['scripts'] as $script)
                  <tr class="odd gradeX">
                  <td>{{$script->name}}</td>
                  <td>{{$script->date}}</td>
                  <td>{{$script->notes}}</td>
                  {{Form::open(array('action' => 'HomeController@loadDashboard'))}}
                  {{Form::hidden('script', $script->id)}}
                  <td> <div class="btn-group">
                    <button type="submit" name="actions" value="Download" class="btn btn-default">Download</button>
                    <button type="submit" name="actions" value="Edit" class="btn btn-default">Edit</button>
                    {{Form::close()}}   
                    <a href={{"#".$script->id}} role="button" class="btn btn-default" data-toggle="modal">Delete</a>
                  </div></td> 
                    <div class="modal fade" id={{$script->id}} tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          </div>
                          <div class="modal-body">
                            <h4> Are you sure you want to delete {{$script->name}}?</h4>
                          </div>
                          <div class="modal-footer">
                             {{Form::open(array('action' => 'HomeController@loadDashboard'))}}
                            {{Form::hidden('script', $script->id)}}
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="actions" value="Delete" class="btn btn-danger">Delete</button>
                            {{Form::close()}}  
                          </div>
                        </div>
                      </div>
                    </div>                         
                  </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      <!-- /.panel-body -->
      </div>
    <!-- /.panel -->
    </div>
  </div>
</div>

<!-- /.col-lg-12 -->




@stop
