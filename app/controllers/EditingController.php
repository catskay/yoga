<?php
/*
 * Yoga Project
 *
 * Kay Wang
 * Luke Burtch
 * Phoebe Eng
 */
class EditingController extends BaseController {

    /**
     * shows the section summary page
     * 1)checks if user selected any method
     * 2)save the chosen methods into ChosenMethods table
     * 3)pass the chosen methods array to view
     */
    public function showSummary()
    {
        if(is_null(Session::get('arr')) && is_null(Session::get('scrId'))){
            $methList = Input::get('methodList');
            if($methList===""){
                echo "<script>alert('You did not select any method!');</script>";
                $request = Request::create('selection', 'GET', array());
                return Route::dispatch($request)->getContent();
            }
            $methListArray = explode(',', $methList);
            Session::put('methList',$methListArray);

            $script = new Script;
            $script->name = 'notitle';
            $script->notes = '';
            $script->uid = Auth::user()->uid;
            $script->date = date('Y-m-d');
            $script->font_size = 'medium';
            $script->save();
            Session::put('scrId',$script->id);

            foreach($methListArray as $id){
                $chMethod = new ChosenMethod;
                $chMethod->mid = $id;
                $chMethod->id = $script->id;
                $method = Method::where('mid','=',$id)->first();
                $chMethod->text = $method->text;
                $chMethod->ssid = $method->ssid;
                $chMethod->mname = $method->mname;
                $chMethod->editable = $method->editable;
                $chMethod->save();
            }
        }
        elseif(!is_null(Session::get('methList'))){
            $methListArray = Session::get('methList');
        }
        else{
            $methods = ChosenMethod::where('id','=',Session::get('scrId'))->get();
            $methListArray = array();
            foreach($methods as $method){
                array_push($methListArray, $method->mid);
            }
            Session::put('methList',$methListArray);
        }
        $arr = array();
        $ssArr = array();
        $currSsid = 0;
        $currSid = 0;
        foreach($methListArray as $methodid){
            $method = ChosenMethod::where('mid', '=', $methodid)->where('id','=',Session::get('scrId'))->first();
            $subsection = Subsection::where('ssid','=',$method->ssid)->first();
            if($subsection->sid<>$currSid){
                $ssArr = array();
                $currSid = $subsection->sid;
            }
            if($method->ssid===$currSsid){
                array_push($ssArr[$subsection->ssname],$method);
            }
            else{
                $ssArr[$subsection->ssname] = array($method);
                $currSsid = $method->ssid;
            }

            $section = Section::where('sid','=',$subsection->sid)->first();
            $arr[$section->sname] = $ssArr;
        }

        if(Auth::check()){
            $name = Auth::user()->name;
        }
        $namearr = array('name'=>$name);

        Session::put('arr',$arr);
        return View::make('summary')->with('arr',$arr)->with('namearr',$namearr);
    }

    /**
     * @return an array of methods that are editable
     */
    public function getEditables(){
        $methList = Session::get('methList');
        $editables = array();
        foreach($methList as $meth){
            $method = Method::where('mid','=',$meth)->first();
            if($method->editable === 'true'){
                array_push($editables,$meth);
            }
        }
        return $editables;
    }

    /**
     * shows the method selection page
     * with all the section/subsection/methods/keywords
     */
    public function showSelect()
    {
        //remembers the previously chosen methods if going back to the selection page
        ChosenMethod::where('id','=',Session::get('scrId'))->delete();
        Script::where('id','=',Session::get('scrId'))->delete();
        Session::forget('arr');
        Session::forget('scrId');
        $methListArray = Session::get('methList');
        Session::forget('methList');
        if(is_null($methListArray)){
            $methListArray = array();
        }

        $sections = Section::all();
        $keywords = array();
        $arr = array();
        foreach($sections as $section){
            $subsections = Subsection::where('sid','=',$section->sid)->get();
            $ssArr = array();
            foreach($subsections as $subsection){
                $methods = Method::where('ssid','=',$subsection->ssid)->get();
                $ssArr[$subsection->ssname] = $methods;
                foreach($methods as $method){
                    $methKeywords = Keyword::where('mid','=',$method->mid)->get();
                    $str = '';
                    foreach($methKeywords as $keyword){
                        $str = $str.$keyword->kname.'&#10;';
                    }
                    if($str === ''){
                        $str = 'No&#32;notes';
                    }
                    $keywords[$method->mid]=$str;
                }
            }
            $arr[$section->sname] = $ssArr;
        }

        if(Auth::check()){
            $name = Auth::user()->name;
        }
        $namearr = array('name'=>$name);

        return View::make('selection')->with('arr',$arr)->with('methList', $methListArray)->with('namearr',$namearr)->with('keywords',$keywords);
    }

    public function doMethod1()
    {
        $str = Input::get('text');
        $chMethod = ChosenMethod::where('mid','=',1)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();
        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod2()
    {
        $str = Input::get('text');

        $chMethod = ChosenMethod::where('mid','=',2)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod3()
    {
        $str = Input::get('text');
        $intent = Input::get('intention');
        $str .= $intent;

        $chMethod = ChosenMethod::where('mid','=',3)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod7()
    {
        $array = Input::get('checkgroup');
        $str = '';
        foreach($array as $box){
            $str = $str.chr(13).$box;
        }

        $chMethod = ChosenMethod::where('mid','=',7)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod10()
    {
        $str = Input::get('text');
        $str = $str.'&#10;'.Input::get('intention');

        Session::put('intention',Input::get('intention'));

        $chMethod = ChosenMethod::where('mid','=',10)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod19()
    {
        $array = Input::get('checkgroup');
        $str = Input::get('text1');
        $str = $str.' &#13; '.Input::get('text2');
        foreach($array as $box){
            $str = $str.' &#13; '.$box;
        }
        $str = $str.' &#13; '.Input::get('custom');
        $str = $str.' &#13; '.Input::get('text3');

        $chMethod = ChosenMethod::where('id','=',Session::get('scrId'))->where('mid','=',19)->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod20()
    {
        $array = Input::get('checkgroup');
        $str = Input::get('text1');
        if(is_null($array)){
            echo "<script>alert('You did not select anything!');</script>";
           return Redirect::to('method20');
        }        
        foreach($array as $box){
            $str = $str.' &#13; '.$box;
        }
        $str = $str.' &#13; '.Input::get('custom');
        $str = $str.' &#13; '.Input::get('text2');

        $chMethod = ChosenMethod::where('mid','=',20)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod23()
    {
        $str = Input::get('text');

        $chMethod = ChosenMethod::where('mid','=',23)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod24()
    {
        $str = Input::get('text1');
        $str = $str.'&#10;'.Input::get('intention');
        $str = $str.'&#10;'.Input::get('text2');

        Session::put('intention',Input::get('intention'));

        $chMethod = ChosenMethod::where('mid','=',24)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod25()
    {
        $array = Input::get('checkgroup');
        $str = Input::get('text1');
        foreach($array as $box){
            $str = $str.' \r '.$box;
        }

        $chMethod = ChosenMethod::where('mid','=',25)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod26()
    {
        $str = Input::get('text');

        $chMethod = ChosenMethod::where('mid','=',26)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    public function doMethod27()
    {

        $str = Input::get('text');

        $chMethod = ChosenMethod::where('mid','=',27)->where('id','=',Session::get('scrId'))->first();
        $chMethod->text = $str;
        $chMethod->save();

        $request = Request::create('edit', 'POST', array());
        return Route::dispatch($request)->getContent();
    }

    /**
     * shows the corresponding edit page depending on the method id
     */
    public function showEdit()
    {
        if(Input::get('submitButton')==='Section Summary'){
            $request = Request::create('summary', 'GET', array());
            return Route::dispatch($request)->getContent();
        }
        elseif(Input::get('submitButton')==='Previous'){
            $meth = Input::get('mid');
            $methList = $this->getEditables();
            $index = array_search($meth,$methList);
            $index--;

            if($index < 0){
                $request = Request::create('summary', 'GET', array());
                return Route::dispatch($request)->getContent();
            }
            else{
                $meth = $methList[$index];
            }
        }
        elseif(Input::get('submitButton')==='Next'){
            $meth = Input::get('mid');
            $methList = $this->getEditables();
            $index = array_search($meth,$methList);
            $index++;
            if($index > count($methList)-1){
                $request = Request::create('summary', 'GET', array());
                return Route::dispatch($request)->getContent();
            }
            else{
                $meth = $methList[$index];
            }
        }
        else{
            $meth = Input::get('meth');
        }

        $meth = ''.$meth;
        $method = Method::where('mid', '=', $meth)->first();
        $subsection = Subsection::where('ssid', '=', $method->ssid)->first();
        $section = Section::where('sid', '=', $subsection->sid)->first();
        $array = array('method'=>$method, 'subsection'=>$subsection, 'section'=>$section);

        if($meth==='7'){
            return View::make('editables/method7')->with('array',$array);
        }
        else if($meth==='19'){
            return View::make('editables/method19')->with('array',$array);
        }
        else if($meth==='20'){
            return View::make('editables/method20')->with('array',$array);
        }
        else if($meth==='25'){
            return View::make('editables/method25')->with('array',$array);
        }
        else if($meth === '26'){
            return View::make('editables/method26')->with('array', $array);
        }
        else if($meth === '10'){
            return View::make('editables/method10')->with('array', $array);
        }
        else if($meth === '23'){
            return View::make('editables/method23')->with('array', $array);
        }
        else if($meth === '24'){
            return View::make('editables/method24')->with('array', $array);
        }
        else if($meth === '27'){
            return View::make('editables/method27')->with('array', $array);
        }
        else if($meth === '2'){
            return View::make('editables/method2')->with('array', $array);
        }
        else if($meth === '3'){
            return View::make('editables/method3')->with('array', $array);
        }
        else if($meth === '1'){
            return View::make('editables/method1')->with('array', $array);
        }

        return View::make('edit')->with('array',$array);
    }

    /**
     * shows the print preview page
     * uses fpdf to generate pdf page
     */
    public function showPreview()
    {
        $fontSize = Input::get('fontSize');
        $arr = Session::get('arr');

        if(isset($_POST['small'])) {
            $font = $_POST['small'];
            print_r($font);
        }

        if($fontSize === 'large'){
            Fpdf::AddPage('p','letter');
            foreach($arr as $section => $subsections){
                Fpdf::SetFont('Arial','B','20');
                Fpdf::Write(10,html_entity_decode($section));

                foreach($subsections as $subsection => $methods){

                    Fpdf::SetFont('Arial','B','18');

                    $ss = Subsection::where('ssname','=',$subsection)->first();
                    $r = $ss->r;
                    $g = $ss->g;
                    $b = $ss->b;

                    Fpdf::SetTextColor($r,$g,$b);
                    Fpdf::SetX(15);
                    Fpdf::MultiCell('0','10',html_entity_decode($subsection));

                    foreach($methods as $method){
                        Fpdf::SetTextColor($r,$g,$b);
                        Fpdf::SetFont('Arial','B','16');
                        Fpdf::SetX(18);
                        Fpdf::MultiCell('0','5',html_entity_decode($method->mname));
                        Fpdf::Ln();
                        Fpdf::SetFont('Arial','','16');
                        Fpdf::SetTextColor('0','0','0');
                        Fpdf::SetX(20);
                        Fpdf::MultiCell('0','7',html_entity_decode($method->text));
                        Fpdf::Ln();
                        $yPos=Fpdf::GetY();
                        Fpdf::Line('10',$yPos,'200',$yPos);
                        Fpdf::Ln();
                    }
                }
            }
        }
        else if($fontSize ==='medium'){
            Fpdf::AddPage('p','letter');
            foreach($arr as $section => $subsections){

                Fpdf::SetFont('Arial','B','18');
                Fpdf::Write(10,html_entity_decode($section));

                foreach($subsections as $subsection => $methods){

                    Fpdf::SetFont('Arial','B','16');

                    $ss = Subsection::where('ssname','=',$subsection)->first();
                    $r = $ss->r;
                    $g = $ss->g;
                    $b = $ss->b;

                    Fpdf::SetTextColor($r,$g,$b);
                    Fpdf::SetX(15);
                    Fpdf::MultiCell('0','10',html_entity_decode($subsection));

                    foreach($methods as $method){
                        Fpdf::SetTextColor($r,$g,$b);
                        Fpdf::SetFont('Arial','B','14');
                        Fpdf::SetX(18);
                        Fpdf::MultiCell('0','5',html_entity_decode($method->mname));
                        Fpdf::Ln();
                        Fpdf::SetFont('Arial','','14');
                        Fpdf::SetTextColor('0','0','0');
                        Fpdf::SetX(20);
                        Fpdf::MultiCell('0','6',html_entity_decode($method->text));
                        Fpdf::Ln();
                        $yPos=Fpdf::GetY();
                        Fpdf::Line('10',$yPos,'200',$yPos);
                        Fpdf::Ln();
                    }
                }
            }
        }
        else{
            Fpdf::AddPage('p','letter');
            foreach($arr as $section => $subsections){

                Fpdf::SetFont('Arial','B','16');
                Fpdf::Write(10,html_entity_decode($section));

                foreach($subsections as $subsection => $methods){

                    Fpdf::SetFont('Arial','B','14');

                    $ss = Subsection::where('ssname','=',$subsection)->first();
                    $r = $ss->r;
                    $g = $ss->g;
                    $b = $ss->b;

                    Fpdf::SetTextColor($r,$g,$b);
                    Fpdf::SetX(15);
                    Fpdf::Write('10',html_entity_decode($subsection));

                    foreach($methods as $method){
                        Fpdf::SetTextColor($r,$g,$b);
                        Fpdf::SetFont('Arial','B','14');
                        Fpdf::SetX(18);
                        Fpdf::MultiCell('0','5',html_entity_decode($method->mname));
                        Fpdf::Ln();
                        Fpdf::SetFont('Arial','','12');
                        Fpdf::SetTextColor('0','0','0');
                        Fpdf::SetX(20);
                        $text = $method->text;
                        Fpdf::MultiCell('0','5',html_entity_decode($text));
                        Fpdf::Ln();
                        $yPos=Fpdf::GetY();
                        Fpdf::Line('10',$yPos,'200',$yPos);
                        Fpdf::Ln();
                    }
                }
            }

            Fpdf::SetY(-15);
            // Select Arial italic 8
            Fpdf::SetFont('Arial','I',8);
            // Print centered page number
            Fpdf::Cell(0,10,'Page '.Fpdf::PageNo(),0,0,'C');
        }

        Fpdf::Output('script_'.Session::get('scrId').'.pdf','F');

        if(Auth::check()){
            $name = Auth::user()->name;
        }
        $namearr = array('name'=>$name);

        return View::make('preview')->with('arr',$arr)->with('namearr',$namearr);
    }
}
