@php
    $year = date('Y');
    $create = "2023";
@endphp
<span>
    Hak Cipta &copy; {{ $year > $create ? $create. ' - ' .$year : $create }}
    <a href="https://bim-pt.co.id">PT. Berlian Inovasi Mandiri</a>.
</span>
