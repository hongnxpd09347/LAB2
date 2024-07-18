<h1>TIN TRONG LOẠI ABC </h1><hr>

@php
foreach($data as $tin) {

echo "<div class='row'>";
echo "<h3> {$tin->tieuDe} </h3>";
echo "<p>{$tin->tomTat} </p>";
echo "</div><hr>";

}
@endphp