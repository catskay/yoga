@extends('layout.named')

@section('content')                              


<div id="page-wrapper">
    <!-- /.row -->
        <div class="row">
        <br>
        <div class="col-lg-12">
            <a href="selection">  <button type="button" class="btn btn-danger" style="float:left">Back</button> </a>
            <a href="preview"> <button type="button" class="btn btn-danger" style="float:right">Script Preview</button> </a>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>Selection Summary</h2>
        </div>
    </div>

    <div class="row col-lg-12">
        <table class="table table-striped custab">
            <thead>
                <tr>
                    <th>Methods</th>
                </tr>
            </thead>
    </div>
            @foreach($arr as $section => $subsections)
            <tr>
                <td>
                    <h3>{{$section}}</h3>
                    <dl>
                        @foreach($subsections as $subsection => $methods)
                            <?php 
                                $sub = Subsection::where("ssname", "=", $subsection)->first();  
                                $r = $sub->r;
                                $g = $sub->g;
                                $b = $sub->b;
                                $str = '"color:rgb('.$r.','.$g.','.$b.')"';
                            ?>
                            <dt style= {{$str}}> {{$subsection}}</dt>
                            @foreach($methods as $method)
                            <dd style= {{$str}}>
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="collapse" id="btn{{$method->mid}}"
                                data-target="#item{{$method->mid}}" onclick= "{{"render('btn".$method->mid."', 'text".$method->mid."')"}}" aria-expanded="true" aria-controls="demo" name="buttons">+</button>
                                {{$method->mname}}
                                {{Form::open(array('action' => 'EditingController@showEdit')) }}
                                {{Form::hidden('meth', $method->mid) }}
                                @if($method->editable === 'true')
                                {{Form::submit('Edit', array('class' => 'btn btn-edit-link'));}}
                                @endif
                                {{Form::close() }}
                            </dd>
                            <dd>
                                <div id="item{{$method->mid}}" class="collapse" >
                                    <p id = "text{{$method->mid}}" name = "text" value = "{{$method->text}}">{{$method->text}}</p>
                                </div>
                                <br/>
                            </dd>
                        @endforeach
                    @endforeach
                    </dl>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>


<script>
function render(btnid, textid) {
 var str = document.getElementById(textid);
 var button = document.getElementById(btnid);

     var text = str.innerHTML;

     text = text.replace(/(?:\r\n|\r|\n)/g, '<br />'); 
     str.innerHTML = text;

     var buttonText = button.innerHTML;
    
    if(buttonText === "+"){
        buttonText = "-";
     }
     else{
        buttonText = "+";
     }
     button.innerHTML = buttonText;
 }


</script>
@stop


