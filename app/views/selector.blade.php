@extends('layout.master')

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
                            <dt> {{$subsection}}</dt>
                            @foreach($methods as $method)
                                <dd>
                                    {{$method->mname}}

                                    {{Form::open(array('action' => 'EditingController@showEdit')) }}
                                    {{Form::hidden('meth', $method->mid) }}
                                    {{Form::submit('Edit', array('class' => 'btn btn-edit-link'));}}
                                    {{Form::close() }}
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
            <a href="/yoga/public/selection2">  <button type="button" class="btn btn-danger" style="float:left">Back</button> </a>
            <a href="/yoga/public/preview"> <button type="button" class="btn btn-danger" style="float:right">Document Preview</button> </a>
        </div>
    </div>
</div>

@stop


</body>
</html>
