{"filter":false,"title":"ProjectsController.php","tooltip":"/app/Http/Controllers/ProjectsController.php","undoManager":{"mark":57,"position":57,"stack":[[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":2,"column":13},"action":"insert","lines":["use Input;","use Redirect;"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":3},"end":{"row":39,"column":4},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":2},"end":{"row":39,"column":3},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":2},"end":{"row":42,"column":78},"action":"insert","lines":["$input = Input::all();","\tProject::create( $input );"," ","\treturn Redirect::route('projects.index')->with('message', 'Project created');"]}]}],[{"group":"doc","deltas":[{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":40,"column":1},"end":{"row":40,"column":2},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":75,"column":2},"end":{"row":75,"column":53},"action":"remove","lines":["// return view('project.show', compact('project'));"]},{"start":{"row":75,"column":2},"end":{"row":79,"column":0},"action":"insert","lines":["$input = array_except(Input::all(), '_method');","\t$project->update($input);"," ","\treturn Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');",""]}]}],[{"group":"doc","deltas":[{"start":{"row":78,"column":0},"end":{"row":78,"column":1},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":76,"column":1},"end":{"row":76,"column":2},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":90,"column":3},"end":{"row":90,"column":4},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":90,"column":2},"end":{"row":90,"column":3},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":90,"column":2},"end":{"row":93,"column":1},"action":"insert","lines":["$project->delete();"," ","\treturn Redirect::route('projects.index')->with('message', 'Project deleted.');","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":93,"column":0},"end":{"row":93,"column":1},"action":"remove","lines":["}"]}]}],[{"group":"doc","deltas":[{"start":{"row":92,"column":79},"end":{"row":93,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":92,"column":1},"end":{"row":92,"column":2},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":42,"column":33},"end":{"row":42,"column":34},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":78,"column":33},"end":{"row":78,"column":34},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":92,"column":33},"end":{"row":92,"column":34},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":88,"column":0},"end":{"row":93,"column":2},"action":"remove","lines":["\tpublic function destroy(Project $project)","\t{","\t\t$project->delete();"," ","\t\treturn Redirect::route('project.index')->with('message', 'Project deleted.');","\t}"]},{"start":{"row":88,"column":0},"end":{"row":93,"column":1},"action":"insert","lines":["public function destroy(Project $project)","{","\t$project->delete();"," ","\treturn Redirect::route('projects.index')->with('message', 'Project deleted.');","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":88,"column":0},"end":{"row":88,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":89,"column":0},"end":{"row":89,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":90,"column":0},"end":{"row":90,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":91,"column":0},"end":{"row":91,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":92,"column":0},"end":{"row":92,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":93,"column":0},"end":{"row":93,"column":1},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":92,"column":33},"end":{"row":92,"column":34},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":0},"end":{"row":80,"column":2},"action":"remove","lines":["\tpublic function update(Project $project)","\t{","\t\t$input = array_except(Input::all(), '_method');","\t\t$project->update($input);"," ","\t\treturn Redirect::route('project.show', $project->slug)->with('message', 'Project updated.');","","\t}"]},{"start":{"row":73,"column":0},"end":{"row":79,"column":1},"action":"insert","lines":["public function update(Project $project)","{","\t$input = array_except(Input::all(), '_method');","\t$project->update($input);"," ","\treturn Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":0},"end":{"row":73,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":74,"column":0},"end":{"row":74,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":75,"column":0},"end":{"row":75,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":76,"column":0},"end":{"row":76,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":77,"column":0},"end":{"row":77,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":78,"column":0},"end":{"row":78,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":79,"column":0},"end":{"row":79,"column":1},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":78,"column":33},"end":{"row":78,"column":34},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":0},"end":{"row":43,"column":2},"action":"remove","lines":["\tpublic function store()","\t{","\t\t$input = Input::all();","\t\tProject::create( $input );"," ","\t\treturn Redirect::route('project.index')->with('message', 'Project created');","\t}"]},{"start":{"row":37,"column":0},"end":{"row":43,"column":1},"action":"insert","lines":["public function store()","{","\t$input = Input::all();","\tProject::create( $input );"," ","\treturn Redirect::route('projects.index')->with('message', 'Project created');","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":0},"end":{"row":37,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":38,"column":0},"end":{"row":38,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":39,"column":0},"end":{"row":39,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":40,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":41,"column":0},"end":{"row":41,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":42,"column":0},"end":{"row":42,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":43,"column":0},"end":{"row":43,"column":1},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":42,"column":33},"end":{"row":42,"column":34},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":9,"column":45},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":1},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":1},"action":"insert","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":1},"end":{"row":14,"column":3},"action":"insert","lines":["\tprotected $rules = [","\t\t'name' => ['required', 'min:3'],","\t\t'slug' => ['required'],","\t];"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":0},"end":{"row":11,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":40,"column":20},"end":{"row":41,"column":0},"action":"insert","lines":["",""]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["\t * "]}]}],[{"group":"doc","deltas":[{"start":{"row":41,"column":2},"end":{"row":41,"column":3},"action":"remove","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":41,"column":2},"end":{"row":42,"column":0},"action":"insert","lines":["\t * @param \\Illuminate\\Http\\Request $request",""]}]}],[{"group":"doc","deltas":[{"start":{"row":42,"column":0},"end":{"row":42,"column":1},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":41,"column":46},"end":{"row":42,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":41,"column":0},"end":{"row":41,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":41,"column":5},"end":{"row":41,"column":45},"action":"remove","lines":["@param \\Illuminate\\Http\\Request $request"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":3},"end":{"row":39,"column":43},"action":"insert","lines":["@param \\Illuminate\\Http\\Request $request"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":3},"end":{"row":39,"column":4},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":4},"end":{"row":40,"column":0},"action":"insert","lines":["",""]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["\t * "]}]}],[{"group":"doc","deltas":[{"start":{"row":42,"column":5},"end":{"row":43,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":42,"column":0},"end":{"row":42,"column":5},"action":"remove","lines":[" \t * "]}]}],[{"group":"doc","deltas":[{"start":{"row":43,"column":23},"end":{"row":43,"column":39},"action":"insert","lines":["Request $request"]}]}],[{"group":"doc","deltas":[{"start":{"row":44,"column":2},"end":{"row":45,"column":0},"action":"insert","lines":["",""]},{"start":{"row":45,"column":0},"end":{"row":45,"column":2},"action":"insert","lines":["\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":45,"column":2},"end":{"row":46,"column":0},"action":"insert","lines":["",""]},{"start":{"row":46,"column":0},"end":{"row":46,"column":2},"action":"insert","lines":["\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":45,"column":0},"end":{"row":46,"column":0},"action":"insert","lines":["\t\t$this->validate($request, $this->rules);",""]}]}],[{"group":"doc","deltas":[{"start":{"row":46,"column":0},"end":{"row":46,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":46,"column":0},"end":{"row":46,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":46,"column":0},"end":{"row":47,"column":2},"action":"remove","lines":["","\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":78,"column":0},"end":{"row":78,"column":33},"action":"remove","lines":["\t * @param  int  Project $project"]}]}],[{"group":"doc","deltas":[{"start":{"row":78,"column":0},"end":{"row":79,"column":44},"action":"insert","lines":["\t * @param  \\App\\Project $project","\t * @param \\Illuminate\\Http\\Request $request"]}]}],[{"group":"doc","deltas":[{"start":{"row":83,"column":2},"end":{"row":84,"column":0},"action":"insert","lines":["",""]},{"start":{"row":84,"column":0},"end":{"row":84,"column":2},"action":"insert","lines":["\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":84,"column":2},"end":{"row":85,"column":0},"action":"insert","lines":["",""]},{"start":{"row":85,"column":0},"end":{"row":85,"column":2},"action":"insert","lines":["\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":84,"column":2},"end":{"row":85,"column":0},"action":"insert","lines":["\t\t$this->validate($request, $this->rules);",""]}]}],[{"group":"doc","deltas":[{"start":{"row":84,"column":0},"end":{"row":84,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":84,"column":0},"end":{"row":84,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":85,"column":0},"end":{"row":86,"column":2},"action":"remove","lines":["","\t\t"]}]}]]},"ace":{"folds":[],"scrolltop":960,"scrollleft":0,"selection":{"start":{"row":85,"column":0},"end":{"row":85,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":38,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1425890469230,"hash":"6bc50fc66a39e35f4e1825b5b35e5d118ab8a0a0"}