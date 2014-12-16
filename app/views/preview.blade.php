@extends('layout.named')

@section('content')

<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Script Preview</h2>
        </div>
    </div>

    <div class="col-md-8">
        <div class="panel panel-default">
            <iframe frameborder="0" src={{"script_".Session::get('scrId').".pdf"}} width="100%" height="500"></iframe>

            
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 style="color:#cc0000 ">Font Size</h1>
                {{Form::open(array('url' => 'preview')) }}
                {{Form::hidden('fontSize', 'small') }}
                {{Form::submit('Small', array('class' => 'btn btn-size-small2'));}}
                {{Form::close() }}
                
                {{Form::open(array('url' => 'preview')) }}
                {{Form::hidden('fontSize', 'medium') }}
                {{Form::submit('Medium', array('class' => 'btn btn-size-medium'));}}
                {{Form::close() }}

                {{Form::open(array('url' => 'preview')) }}
                {{Form::hidden('fontSize', 'large') }}
                {{Form::submit('Large', array('class' => 'btn btn-size-large'));}}
                {{Form::close() }}
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
                 {{Form::open(array('action' => 'HomeController@loadDashboard'))}}
                <div class="form-group">
                    <label>Title</label><p class='font-red'>*</p>
                    {{Form::input('text', 'title', null, ['class'=>'form-control', 'required'=>'required','placeholder'=>'Please enter a title.'])}}
                    <label>Notes</label>
                     {{Form::textarea('notes', null, ['class'=>'form-control', 'rows'=> '5', 'placeholder'=>'comments on the script...'])}}
                </div>
                <button type="submit" class="btn btn-danger btn-lg">Save</button>
            {{Form::close()}}
            </div>
        </div>

    </div>

</div>

    <script src="js/bootbox.min.js" type="text/javascript"></script>
@stop


