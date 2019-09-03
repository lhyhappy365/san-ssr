<?php $render = function ($data, $noDataOutput) {
function _id60($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id60Proto = [
"filters" => [

],
"computed" => [

],
"computedNames" => [

],
"tagName" => "div"
];
$html = "";
$componentCtx = [
"proto" => $_id60Proto,
"sourceSlots" => $sourceSlots,
"data" => $data ? $data : (object)[],
"owner" => $parentCtx,
"slotRenderers" => []
];
if ($data) {
}
$computedNames = $componentCtx["proto"]["computedNames"];
foreach ($computedNames as $i => $computedName) {
  $data[$computedName] = $componentCtx["proto"]["computed"][$computedName]($componentCtx);
}
$html .= "<div";
if ((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null)) {
$html .= San::attrFilter('class', San::escapeHTML(San::_classFilter((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null))));
}
if ((isset($componentCtx["data"]->{"style"}) ? $componentCtx["data"]->{"style"} : null)) {
$html .= San::attrFilter('style', San::escapeHTML(San::_styleFilter((isset($componentCtx["data"]->{"style"}) ? $componentCtx["data"]->{"style"} : null))));
}
if ((isset($componentCtx["data"]->{"id"}) ? $componentCtx["data"]->{"id"} : null)) {
$html .= San::attrFilter('id', San::escapeHTML((isset($componentCtx["data"]->{"id"}) ? $componentCtx["data"]->{"id"} : null)));
}
$html .= ">";
if (!$noDataOutput) {
$html .= "<!--s-data:" . json_encode($componentCtx["data"], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "-->";
}
if ((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null)>10000) {
$html .= "<h2>biiig</h2><p>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null));
$html .= "</p>";

}
else if ((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null)>1000) {
$html .= "<h3>biig</h3><p>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null));
$html .= "</p>";

}
else if ((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null)>100) {
$html .= "<h4>big</h4><p>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null));
$html .= "</p>";

}
else {
$html .= "<h5>small</h5><p>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"num"}) ? $componentCtx["data"]->{"num"} : null));
$html .= "</p>";

}
$html .= "</div>";
return $html;
};
return call_user_func("_id60", $data, $noDataOutput);
}; ?>