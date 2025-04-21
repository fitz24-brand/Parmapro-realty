@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<a href=""> </li><img src="images/logo.png" alt="#" /></a>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
