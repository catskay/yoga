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
                {{Form::submit('Small', array('class' => 'btn btn-size-small2 submit'));}}
                {{Form::close() }}
                
                {{Form::open(array('url' => 'preview')) }}
                {{Form::hidden('fontSize', 'medium') }}
                {{Form::submit('Medium', array('class' => 'btn btn-size-medium submit'));}}
                {{Form::close() }}

                {{Form::open(array('url' => 'preview')) }}
                {{Form::hidden('fontSize', 'large') }}
                {{Form::submit('Large', array('class' => 'btn btn-size-large submit'));}}
                {{Form::close() }}
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
             {{Form::open(array('action' => 'HomeController@loadDashboard'))}}
             <div class="form-group">
                <label>Title</label><p class='font-red'>*</p>
                {{Form::input('text', 'title', null, ['class'=>'form-control', 'required','placeholder'=>'Please enter a title.'])}}
                <label>Notes</label>
                {{Form::textarea('notes', null, ['class'=>'form-control', 'rows'=> '5', 'placeholder'=>'comments on the script...'])}}
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <a href = "summary"><button class = "btn btn-default btn-lg" type = "button">Back</button></a>
                </div>
                <div class="col-md-4">
                    <button type="submit" name = "submit" class="btn btn-danger btn-lg submit">Save</button>
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>

</div>

</div>

<script>
$(document).ready(function() 
{
    var warn_on_unload="";
    warn_on_unload = "Your script has not been saved yet!!";

    $('.submit').click(function(e) { 
        warn_on_unload = "";}); 

    window.onbeforeunload = function() { 
        if(warn_on_unload != ''){
            return warn_on_unload;
        }   
    };
});
</script>

<script src="js/bootbox.min.js" type="text/javascript"></script>
@stop


