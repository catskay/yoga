@extends('layout.named')

@section('content')                              


<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Section Summary</h2>
        </div>
    </div>


    <div class="row col-lg-12 custyle">
        <table class="table table-striped custab">
            <thead>
                <tr>
                    <th>Methods</th>
                </tr>
            </thead>
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
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="collapse" 
                                data-target="#item{{$method->mid}}" onclick="render()" name="buttons">+</button>
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
                                    <p name = "text" value = "{{$method->text}}">{{$method->text}}</p>
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

    <div class="row">
        <div class="col-lg-12">
            <a href="selection">  <button type="button" class="btn btn-danger" style="float:left">Back</button> </a>
            <a href="preview"> <button type="button" class="btn btn-danger" style="float:right">Document Preview</button> </a>
        </div>
    </div>
</div>


<script>
function render() {
 var strs = document.getElementsByName("text");
 var buttons = document.getElementsByName("buttons");
 var i;

 for(i = 0; i < strs.length; i++){
     var str = strs[i].innerHTML;
     str = str.replace(/(?:\r\n|\r|\n)/g, '<br />'); 
     strs[i].innerHTML = str;

     var button = buttons[i].innerHTML;
    
    if(button === "+"){
        button = "-";
     }
     else{
        button = "+";
     }
     buttons[i].innerHTML = button;
 }

}
</script>
@stop


