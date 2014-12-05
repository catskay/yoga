@extends('layout.dashboard-layout')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Instruction List</h1>
            <a href="selection2">  <button type="button" class="btn btn-danger" style="float:right">CREATE NEW</button> </a>
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
                                    <button type="submit" name="actions" value = "Download"class="btn btn-default">Download</button>
                                    <button type="submit" name="actions" value = "Edit" class="btn btn-default">Edit</button>
                                    <button type="submit" name="actions"  value = "Delete" class="btn btn-default" >Delete</button>
                              </div></td>     
                              {{Form::close()}}                               
                          </tr>
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
<!-- /.col-lg-12 -->


@stop
