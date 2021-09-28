<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://bioderecho.org.mx/wp-content/uploads/2021/02/ESCUELA-JUDISIAL-NAYARIT.jpg" class="" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
